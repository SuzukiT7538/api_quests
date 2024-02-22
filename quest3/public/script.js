const URL = 'http://localhost:8000/api';

function fetchTodo()
{
  api = `${URL}/todos`;
  fetch(api)
  .then(response => response.json())
  .then(data => {
    console.log(data);
    todoList = document.getElementById('todo-list');
    todoList.innerHTML = '';
    for(let todo of data.todos) {
      let listItem = document.createElement('li');
      listItem.className = 'todo-item';
      listItem.innerHTML = `
      ${todo.title}
      <button onclick="editTodo(${todo.id})">編集</button>
      <button onclick="deleteTodo(${todo.id})">削除</button>
      `;
      todoList.appendChild(listItem);
    }
  });
}

function addTodo()
{
  const title = document.getElementById('new-todo').value;
  fetch(`${URL}/todos`, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json'},
    body: JSON.stringify({'todo': { title }}),
  })
  .then(response => response.json())
  .then(() => {
    document.getElementById('new-todo').value = '';
    fetchTodo();
  });
}

function editTodo(id)
{
  const title = prompt("新しいTODOを入力");
  fetch(`${URL}/todos/${id}`, {
    method: 'PUT',
    headers: { 'Content-Type': 'application/json'},
    body: JSON.stringify({'todo': { title }}),
  })
  .then(request => request.json())
  .then(() => fetchTodo());
}

function deleteTodo(id)
{
   fetch(`${URL}/todos/${id}`, {
    method: 'DELETE',
    headers: { 'Content-Type': 'application/json'},
   })
   .then(() => fetchTodo())
}


fetchTodo();
