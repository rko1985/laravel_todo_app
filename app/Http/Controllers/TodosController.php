<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    
    public function index(){
        //fetch all todos from database and display them in the todos.index page

        return view('todos.index')->with('todos', Todo::all());
    }
}
