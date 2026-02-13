<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\db_controller;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/students', [db_controller::class, 'students'])
->name('students.index');

Route::get('/students/create', function () {
    return view('students.create');
})->name('students.create');

Route::get('/students/show', function () {
    return view('students.show');
})->name('students.show');

Route::get('/students/edit', function () {
    return view('students.edit');
})->name('students.edit');

Route::post('/students/create', function(){
    Student::create([
        'name' => request('name'),
        'course' => request('course'),
        'year_level' => request('year_level')
    ]);
    return redirect()->route('students.index');
});
