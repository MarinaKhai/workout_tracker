<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Index page with all workouts ('home')
Route::get('/', [WorkoutController::class, 'index']);

// 'Create workout' page (form) 
Route::get('/workouts/create', [WorkoutController::class, 'create']);

// 'Post created item' page
Route::post('/workouts', [WorkoutController::class, 'store']);

// 'Edit workout' page (form) 
Route::get('/workouts/edit', [WorkoutController::class, 'edit']);

// 'Update changes on the item' page
Route::put('/workouts/{workout}', [WorkoutController::class, 'update']);

// Delete one workout
Route::delete('workouts/{workout}', [WorkoutController::class, 'delete']);

// Show 'one workout' page (detail)
Route::get('/workouts/{workout}', [WorkoutController::class, 'show']);
