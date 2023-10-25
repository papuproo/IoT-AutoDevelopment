<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\iotcontroller;
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

/*Aqui van las rutas, aun falta implementar los prefijos y el Resource*/
/*Cabe destacar que falta muchisima documentacion */

Route::view('/', 'index')->name('index');
Route::view('/iot', 'iot')->name('iot');
Route::view('/jetstream', 'jetstream')->name('jetstream');
Route::get('/datos', [ProjectController::class,'index'])->name('projects.index');
Route::get('/datos/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/datos/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/datos/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::post('/datos', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/datos/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::post('iot', [iotcontroller::class,'form']);

Route::delete('/datos/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

//Route::resource('projects', [datoscontroller::class]);

// Route::get('/', function() {
//     $nombre = "Emiliano";

//     return view('index', compact('nombre'));
// })-> name('index');

Route::get('cursos/{curso}/{categoria?}', function($curso,$categoria = null){
    if($categoria){
        return "Bienvenido a $curso con su subclase $categoria";
    }else{
        return "Bienvenido a $curso sin subclase";
    }
});