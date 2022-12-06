<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Dono;

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

Route::get('/cadastrar-animal', function () {
    return view('cadastro-animal');
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
    $animal =  Animal::findOrFail($donoId);
    echo "Tag";
    echo "<br>";
    echo $animal->tagAnimal;
});

Route::get ('editar-animal/{donoId}', function ($donoId){
//    dd($donoId);
    $animal =  Animal::findOrFail($donoId);
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


// --------------------------------------------------------------
//FIM DO ANIMAL
//----------------------------------------------------

// ------------------------------------------
//INICIO DO DONO
// ------------------------------

Route::get('/cadastrar-dono', function () {
    return view('cadastro-dono');
});

Route::post('/cadastrar-dono',function (Request $request ){
//    dd($request->all());
    Dono::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'endereco' => $request->endereco,
        ]
    );
    echo "Dono criado com sucesso";
});

Route::get('buscar-dono/{donoId}', function ($donoId){
//    dd($donoId);
    $dono =  Dono::findOrFail($donoId);
    echo "Nome";
    echo "<br>";
    echo $dono->nome;
});

Route::get ('editar-dono/{donoId}', function ($donoId){
//    dd($donoId);
    $dono =  Dono::findOrFail($donoId);
    return view('editar-dono',['dono' => $dono]);
});

Route::put('editar-dono/{donoId}', function (Request $info, $donoId){
    $dono = Dono::findOrFail($donoId);
    $dono->nome = $info->nome;
    $dono->cpf = $info->cpf;
    $dono->endereco = $info->endereco;
    $dono->save();
    echo "Dono atualizado";
});

Route::get('excluir-dono/{donoId}',function ($donoId) {
//    dd($donoId);
    $dono = Dono::findOrFail($donoId);
    $dono->delete();
    echo "Dono deletado com sucesso";
});


