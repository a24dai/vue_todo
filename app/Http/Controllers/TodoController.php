<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function getTodos()
    {
        $todos = $this->todo->all();
        return $todos;
    }

    public function addTodo(Request $request)
    {
        $input = $request->all();
        $this->todo->fill($input)->save();

        $todos = $this->todo->all();
        return $todos;
    }

    public function deleteTodo(Request $request)
    {
        $id = $request->id;
        $this->todo->find($id)->delete();

        $todos = $this->todo->all();
        return $todos;
    }
}

