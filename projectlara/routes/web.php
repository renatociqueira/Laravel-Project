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

use App\Http\Controllers\EventController;

// Direcionar para Home
Route::get('/', function () {
    return view('page');
});

// retorna o formulario de cadastro
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/contact', [EventController::class, 'contact']);
Route::get('/page', [EventController::class, 'page']);
// Permiti salvar o formulario no controller
Route::post('/events', [EventController::class, 'store']);
// Ação de deletar registros
Route::delete('/events/{id}', [EventController::class, 'destroy']);
// Ação para visualizar view
Route::get('/events/show', [EventController::class, 'show']);
Route::get('/testef', [EventController::class, 'testef']);
// Ação para editar o formulario recuperando os registros
Route::get('/events/edit/{id}', [EventController::class, 'edit']);
// Ação para de fato mudar o registro no formulario
Route::put('/events/update/{id}', [EventController::class, 'update']);
// Exibi funcionarios cadastrados na table
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');



// Route::get('/events/dashboard', [EventController::class, 'dashboard']->middleware(['auth:sanctum', 'verified']));

//Route::delete('/testef/{id}', [EventController::class, 'destroy']);

//Route::get('/events/{id}', [EventController::class, 'show'])->middleware('auth');

//Route::get('/loginn', [EventController::class, 'loginn']);

//Route::get('/formfun', [EventController::class, 'formfun']);

//Route::get('/portaldoaluno', [EventController::class, 'index']);
//Route::get('/listfun', [EventController::class, 'index1']);

//Route::get('/tablefun', function () {
  //  return view('tablefun');
//});

/*
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/page', function () {
    return view('page');
});

Route::get('/formfun', function () {
    return view('formfun');
});
*/

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  //  return view('dashboard');
//})->name('dashboard');

