<!DOCTYPE html>
<html>

<head>
  <title>TODO</title>
  <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>
  <h1>TODO</h1>
  <input id="new-todo" type="text" placeholder="新しいTODO">
  <button onclick="addTodo()">追加する</button>
  <ul id="todo-list">
  </ul>
  <script src="{{ asset('/script.js') }}"></script>
</body>


</html>
