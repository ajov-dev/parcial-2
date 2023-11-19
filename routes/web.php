<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Task_01Controller;
use App\Http\Controllers\Task_02Controller;
use App\Http\Controllers\Task_03Controller;
use App\Http\Controllers\Task_04Controller;
use App\Http\Controllers\Task_05Controller;
use App\Http\Controllers\Task_06Controller;
use App\Http\Controllers\Task_07Controller;
use App\Http\Controllers\Task_08Controller;
use App\Http\Controllers\Task_09Controller;
use App\Http\Controllers\Task_10Controller;
use App\Http\Controllers\Task_11Controller;
use App\Http\Controllers\Task_12Controller;
use App\Http\Controllers\Task_13Controller;
use App\Http\Controllers\Task_14Controller;
use App\Http\Controllers\Task_15Controller;
use App\Http\Controllers\Task_16Controller;
use App\Http\Controllers\Task_17Controller;
use App\Http\Controllers\Task_18Controller;
use App\Http\Controllers\Task_19Controller;
use App\Http\Controllers\Task_20Controller;
use App\Http\Controllers\Task_21Controller;
use App\Http\Controllers\Task_22Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/", [HomeController::class, 'index'])->name("home.index");

Route::get("/Task_01/index", [Task_01Controller::class, 'index'])->name("task_01.index");
Route::get("/Task_01/store", [Task_01Controller::class, 'store'])->name("task_01.store");

Route::get("/Task_02/index", [Task_02Controller::class, 'index'])->name("task_02.index");
Route::post("/Task_02/store", [Task_02Controller::class, 'store'])->name("task_02.store");

Route::get("/Task_03/index", [Task_03Controller::class, 'index'])->name("task_03.index");
Route::get("/Task_03/store", [Task_03Controller::class, 'store'])->name("task_03.store");

Route::get("/Task_04/index", [Task_04Controller::class, 'index'])->name("task_04.index");
Route::post("/Task_04/store", [Task_04Controller::class, 'store'])->name("task_04.store");

Route::get("/Task_05/index", [Task_05Controller::class, 'index'])->name("task_05.index");
Route::post("/Task_05/store", [Task_05Controller::class, 'store'])->name("task_05.store");

Route::get("/Task_06/index", [Task_06Controller::class, 'index'])->name("task_06.index");
Route::post("/Task_06/store", [Task_06Controller::class, 'store'])->name("task_06.store");

Route::get("/Task_07/index", [Task_07Controller::class, 'index'])->name("task_07.index");
Route::get("/Task_07/store", [Task_07Controller::class, 'store'])->name("task_07.store");

Route::get("/Task_08/index", [Task_08Controller::class, 'index'])->name('task_08.index');
Route::post("/Task_08/store", [Task_08Controller::class, 'store'])->name("task_08.store");

Route::get("/Task_09/index", [Task_09Controller::class, 'index'])->name('task_09.index');
Route::get("/Task_09/store", [Task_09Controller::class, 'store'])->name("task_09.store");

Route::get("/Task_10/index", [Task_10Controller::class, 'index'])->name('task_10.index');
Route::post("/Task_10/store", [Task_10Controller::class, 'store'])->name("task_10.store");

Route::get("/Task_11/index", [Task_11Controller::class, 'index'])->name('task_11.index');
Route::get("/Task_11/store", [Task_11Controller::class, 'store'])->name("task_11.store");

Route::get("/Task_12/index", [Task_12Controller::class, 'index'])->name('task_12.index');
Route::post("/Task_12/store", [Task_12Controller::class, 'store'])->name("task_12.store");

Route::get("/Task_13/index", [Task_13Controller::class, 'index'])->name('task_13.index');
Route::post("/Task_13/store", [Task_13Controller::class, 'store'])->name("task_13.store");

Route::get("/Task_14/index", [Task_14Controller::class, 'index'])->name('task_14.index');
Route::post("/Task_14/store", [Task_14Controller::class, 'store'])->name("task_14.store");

Route::get("/Task_15/index", [Task_15Controller::class, 'index'])->name('task_15.index');
Route::post("/Task_15/store", [Task_15Controller::class, 'store'])->name("task_15.store");

Route::get("/Task_16/index", [Task_16Controller::class, 'index'])->name('task_16.index');
Route::post("/Task_16/store", [Task_16Controller::class, 'store'])->name("task_16.store");

Route::get("/Task_17/index", [Task_17Controller::class, 'index'])->name('task_17.index');
Route::get("/Task_17/store", [Task_17Controller::class, 'store'])->name("task_17.store");

Route::get("/Task_18/index", [Task_18Controller::class, 'index'])->name('task_18.index');
Route::get("/Task_18/store", [Task_18Controller::class, 'store'])->name("task_18.store");

Route::get("/Task_19/index", [Task_19Controller::class, 'index'])->name('task_19.index');
Route::get("/Task_19/store", [Task_19Controller::class, 'store'])->name("task_19.store");

Route::get("/Task_20/index", [Task_20Controller::class, 'index'])->name('task_20.index');
Route::post("/Task_20/store", [Task_20Controller::class, 'store'])->name("task_20.store");

Route::get("/Task_21/index", [Task_21Controller::class, 'index'])->name('task_21.index');
Route::post("/Task_21/store", [Task_21Controller::class, 'store'])->name("task_21.store");

Route::get("/Task_22/index", [Task_22Controller::class, 'index'])->name('task_22.index');
Route::post("/Task_22/store", [Task_22Controller::class, 'store'])->name("task_22.store");
