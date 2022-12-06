<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Animal;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-animal',function (Request $request ){
//    dd($request->all());
    Animal::create([
        'donoId' => $request->donoId,
        'tagAnimal' => $request->tagAnimal,
        'peso' => $request->peso,
        'preco' => $request->preco,
        ]
    );
echo "Animal criado com sucesso";
});

Route::get('buscar-animais/{donoId}', function ($donoId){
//    dd($donoId);
    $animal =  Animal::find($donoId);
    echo "Tag";
    echo "<br>";
    echo $animal->tagAnimal;
});

Route::get ('editar-animal/{donoId}', function ($donoId){
//    dd($donoId);
    $animal =  Animal::find($donoId);
    return view('editar-animal',['animal' => $animal]);
});

Route::put('editar-animal/{animalId}', function (Request $info, $animalId){
    $animal = Animal::findOrFail($animalId);
    $animal->donoId = $info->donoId;
    $animal->tagAnimal = $info->tagAnimal;
    $animal->peso = $info->peso;
    $animal->preco = $info->preco;
    $animal->save();
    echo "Animal atualizado";
});

Route::get('excluir-animal/{animalId}',function ($donoId) {
//    dd($donoId);
    $animal = Animal::findOrFail($donoId);
    $animal->delete();
    echo "Animal deletado com sucesso";
});
