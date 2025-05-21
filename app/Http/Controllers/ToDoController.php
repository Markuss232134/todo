<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    // Pieslēdzies lietotājs obligāts
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $todos = Todo::where('user_id', auth()->id())->get();
        return view('todos.index', compact('todos'));
    }

    // pārējās metodes: create, store, edit, update, destroy utt.
}
