<?php

use App\Http\Controllers\DashBoard\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('post', PostController::class);
//para rutear un controlador hay que usarlo de ésta forma
//indicando el nombre del controlador, dos puntos class coma entre comillas nombre de la funcion
//Route::get('test', [PrimerControlador::class,'index']);
//Route::get('otro/{param1}/{param2}', [PrimerControlador::class,'otro']); 
/*
Route::get('contact', function () {
    //redireccion forma 1
    //return redirect('/contact2');
    //redirección por nombre
    //return redirect()->route('contact2');
    //redirección por nombre forma 3
    //return to_route('contact2');
   
    $data = [ 'name'=> 'Arturo', 'primerap'=>'Aguirre', 'segundoap'=>'Munguia', 'edad'=>36];
    return view('contact',$data);
    
})->name('contact');

*/
/*
Route::get('contact2', function () {
    return view('contact2
');
})->name('contact2');
*/
/*
Route::get('bienvenido', function () {
    return "welcome";
});
*/
/*
Route::get('test', function () {
    $age = 33;
    $data = ['name' => 'Héctor', 'age'=> $age];
    return view('test',$data);
})->name('crudy'); 
*/
//para poner un alias interno
//entonces puedes usar route en el enlace
//sirve para cambiar el nombre en el back 
// sin afectar el front
//esto es código blade, no funciona en php puro
//<a href"{{ route("crudy") }}">CRUD</a>


//en php puro sería:
/*
<a href"<?php echo e(route("crudy")); ?>">CRUD</a>
*/