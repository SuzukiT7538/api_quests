<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class todoController extends Controller
{
    function index() {
        return view('todo.index');
    }

    function showAllTodo() {
        $todos = Todo::all();
        $todoList =[];
        if (count($todos) > 0) {
            foreach ($todos as $todo) {
                $todoList[] = [
                    'id' => $todo->id,
                    'title' => $todo->title,
                ];
            }
        }
        return ['todos' => $todoList];
    }

    function addTodo(Request $request) {
        $todo = new Todo;
        $form = $request->todo;
        $todo->fill($form)->save();
        return [];
    }

    function editTodo(Request $request, int $id) {
        $todo = Todo::find($id);
        $form = $request->todo;
        $todo->fill($form)->save();
        return [];
    }

    function deleteTodo(int $id) {
        Todo::find($id)->delete();
    }
}
