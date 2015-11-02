<?php
Route::get('/', function () {
    return view('welcome');
});

Route::controller('position' , 'PositionController');

Route::controller('employee' , 'EmployeeController');
