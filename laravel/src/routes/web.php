<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
})->name('landing');

Route::get('/tasks', function () {
    return view('index', [
        "tasks" => \App\Models\Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')
    ->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {
    return view('show', [
        "task" => \App\Models\Task::findOrFail($id)
    ]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
   // dd($request->all());
    $data = $request->validate([
        'title' => 'required | max:255',
        'description' => 'required',
        'long_description' => 'required',
    ]);

    $task = new \App\Models\Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->description = $data['long_description'];

    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id]);

})->name('tasks.store');




