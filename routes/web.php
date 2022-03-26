<?php

use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------------  -----
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return "Welcome Eng moath this is web site";
// });

Route::get('/about', function () {
    $name = 'moath mohammed';
    $age = 23;

    //3 ways to send data from database or aother to view via router
    // return view('aboutdata', ['name' => $name, 'age' => $age]);
    // return view('aboutdata', compact('name', 'age'));
    // return view('aboutdata')->with('name',$name)->with('age',$age);

    $tasks = ['1' => 'task1', '2' => 'task2', '3' => 'task3'];

    // $tasks = ['task1', 'task2', 'task3'];
    return view('aboutdata', compact('tasks'));
});

Route::get('/task/{id}', function ($id) {
    $tasks = ['1' => 'task1', '2' => 'task2', '3' => 'task3'];
    // $tasks = ['task1', 'task2', 'task3'];

    $task = $tasks[$id];

    return view('task', compact('task'));
})->name('taskId');


//Route Parameters
//1- Required Parameters
Route::get('/product/{id}', function ($id) {

    return 'product No:' . $id;
})->name('productId');

//2- Optional Parameters
// Route::get('/product/{id?}', function ($id = 0) {

//     return 'product No:' . $id;
// });
