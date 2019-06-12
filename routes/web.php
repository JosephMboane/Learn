<?php
     use Illuminate\Support\Facades\Input;
     use Laravel_Learn\Pessoa_perdida;

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
  
Route::resource('/','pessoaPerdidaController');

Route::get('/front-admin','userController@contador');
Route::get('/editar','pessoaPerdidaController@edit');
Route::resource('/caso','casoController');


Route::get('/create_perdida', function () {
    return view('pessoa_perdida.create');
});


Route::resource('/contribuir','contributoController');



Route::get('/create_centro', function () {
    return view('admin.centros.create_centro');
});




Route::get('/localizacao',function (){
    return [\Laravel_Learn\Localizacao::all()];
});
Route::resource('pessoa_perdida','pessoaPerdidaController')->middleware('auth');
Route::get('pessoa-perdidas-Achados','pessoaPerdidaController@index_achado');

Route::resource('pessoa_ajuda','pessoaAjudaController');

Route::resource('centro_acolhimento','centroAcolhimentoController');
Route::resource('localizacao','LocalizacaoController');

Route::resource('user','userController');

//Route::get('localizacaoCentro','LocalizacaoController@index');

Route::post('/search', 'pessoaPerdidaController@pesquisar');
Route::post('/search', 'pessoaPerdidaController@pesquisar')->name('index');

Route::get('/api/locations/',function () {
    $location = \Laravel_Learn\Localizacao::all();
    return view('localizacao1.index')->with('location', $location);
});

Route::get('/mapa',function () {
    return view('localizacao.index');
});
Route::get('/api/locations/{id_localizacao}',function ($id_localizacao) {
 return [\Laravel_Learn\Localizacao::find($id_localizacao)];
});
Route::get('/live_search', 'PesquisaPessoaPerdidaController@index');
Route::get('/live_search/action', 'PesquisaPessoaPerdidaController@action')->name('live_search.action');

//rota que retorna o lugar de onde cada pessoa perdida esta...
Route::get('locations/{id_localizacao}',function ($id_localizacao) {
         $location = \Laravel_Learn\Localizacao::find($id_localizacao);
         return view('localizacao.ver_pessoa_perdida')->with('location',$location);
     });

Route::post('/search1', 'pessoaPerdidaController@pesquisar2');

Route::resource('centro','centroAcolhimentoController')->middleware('auth');

Route::resource('responsavel','responsavelCentroController')->middleware('auth');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chart-teste', 'HomeController@grafico')->name('grafico');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Rotas para autenticacao de usuarios
//Route::group(['middleware' =>['web','auth']],function(){
//
//    Route::get('/inico',function(){
//        return view('welcome');
//    });
//    Route::get('/pessoa_perdida', function(){
//        if(Auth::user()->admin == 0){
//            return view ('pessoa_perdida.index');
//        }else{
//            return view('admin.fron-office');
//        }
//    });
////    Route::get('/front-admin','userController@contador');
//
//});

/*Permission and Roles */
Route::get('/painel', 'PainelController@index');


//VUE.JS Route
//Route::get('/teste', function () {
//    return view('teste');
//});
Route::get('/', function () {
    return view('pessoa_perdida.index2');
});
Route::get('pessoa_perdidas','pessoaPerdidaController@index_vue');
Route::get('pessoa_perdidasAchados','pessoaPerdidaController@index_vueAchados');
Route::post('pessoa_perdidas','pessoaPerdidaController@store');
Route::get('pessoa_perdidas/{id_p_perdida}','pessoaPerdidaController@update1')->name('actualizar');
Route::get('/contribuir','contributoController@store');
Route::get('/contribuir/{{id_p_perdida}}','contributoController@edit');
Route::get('pessoa_perdidas/search', 'pessoaPerdidaController@pesquisar2');
Route::post('contribuir','contributoController@store');
Route::get('contribuir','contributoController@getContribuir');

