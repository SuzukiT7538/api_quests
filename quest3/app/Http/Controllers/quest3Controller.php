<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Symfony\Component\HttpFoundation\Response;

class quest3Controller extends Controller
{
    public function health() {
        return ["status" => "success"];
    }

    public function todos(Request $request) {
        // $this->validate($request->todo, Todo::$rules);
        $todo = new Todo;
        $form = $request->todo;
        $todo->fill($form)->save();
        $items = Todo::all();
        return $items;
    }

    public function showAllTodo() {
        return Todo::all();
    }

    public function updateTodo(Request $request, $id) {
        $todo = Todo::find($id);
        $form = $request->todo;
        $todo->fill($form)->save();
        return Todo::all();
    }

    public function deleteTodo($id) {
        $todo = Todo::find($id)->delete();
        return response()->json([
            'message' => 'koredesu',
        ], 204);
    }
}
