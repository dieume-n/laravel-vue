<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        Task::create($request->all());
        return (['message' => "task created"]);
    }
}
