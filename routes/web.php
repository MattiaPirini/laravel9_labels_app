<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use Ramsey\Uuid\Type\Integer;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TodoListController;

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

Route::get('/',[TodoListController::class, 'showList']);
Route::get('/todo',[TodoListController::class, 'showList']);
Route::get('/completed',[TodoListController::class, 'showListCompleted'])->name('showListCompleted');
// Route::get('/', function () {
//     // return view('home');
   
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', [ProductsController::class, 'index']);


Route::get('/products/{name}', 
[ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');


 
Route::get('create-pdf-file', [PDFController::class, 'index']);

Route::post('/saveItem' ,[TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markComplete/{id}' ,[TodoListController::class, 'markComplete'])->name('markComplete');

Route::get('/delete',[TodoListController::class, 'deleteList'])->name('deleteList');

Route::get('/mail',[MailController::class, 'sendMail']);