<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuidadorIdososController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutentificacaoController;
use App\Http\Controllers\HomeCestaController;
use App\Http\Controllers\OngController;
use App\Http\Controllers\BeneficiariosController;
use App\Http\Controllers\RegistroController;
use Jenssegers\Agent;
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
Route::domain('cidsol.ubbas.org')->group(function(){
    

    Route::get('/login',[AutentificacaoController::class,'index'])->name('login');
    Route::post('/login',[AutentificacaoController::class,'autenticar'])->name('auth_login');
    Route::get('/deslogar',[AutentificacaoController::class,'deslogar'])->name('auth_deslogar');

Route::middleware('auth')->group(function(){
    Route::get('/',[HomeCestaController::class,'index'])->name('home_cesta');
    Route::get('/cadastro-usuario',[RegistroController::class,'index'])->name('registrar_usuario');
    Route::post('/cadastro-usuario',[AutentificacaoController::class,'registrarUsuario'])->name('cadastrar_usuario');


    Route::controller(OngController::class)->group(function (){
        Route::get('/cadastro-ong','index')->name('view_ong');
        Route::post('/cadastro-ong','store')->name('cadastrar_ong');
    });
    

    Route::controller(BeneficiariosController::class)->group(function (){
        Route::get('/cadastro-beneficiario','create')->name('cad_familia');
        Route::post('/cadastro-beneficiario','store')->name('cadastrar_beneficiario');
        Route::get('/cadastro-beneficiario/busca','show')->name('busca_familia')->methods(['GET','POST']);

    });

/*
Route::get('/',[HomeCestaController::class,'index'])->middleware('auth')->name('home_cesta');

//              LOGIN
Route::get('/login',function(Agent $agent){
    if($agent->isMobile()){
        return view('cidsol/mobile/login');
    }
    else{
        return view('cidsol/login');
    }
    
})->name('login');

Route::post('/login',[AutentificacaoController::class,'autenticar'])->name('auth_login');
Route::get('/deslogar',[AutentificacaoController::class,'deslogar'])->name('auth_deslogar');

//              CADASTRO USUARIO
Route::get('/registrar',[RegistroController::class,'index'])->middleware('auth')->name('registrar_usuario');
Route::post('/registrar',[AutentificacaoController::class,'registrarUsuario'])->middleware('auth')->name('cadastrar_usuario');

//              CADASTRO ONG
Route::get('/cadastro-ong',[OngController::class,'index'])->middleware('auth')->name('view_ong');
Route::post('/cadastro-ong',[OngController::class,'store'])->middleware('auth')->name('cadastrar_ong');

//              CADASTRO BENEFICIARIO
Route::controller(BeneficiariosController::class)->group(function (){
    Route::get('/cadastro-beneficiario','create')->name('cad_familia')->middleware('auth');
    Route::post('/cadastro-beneficiario','store')->middleware('auth')->name('cadastrar_beneficiario');
    Route::get('/cadastro-beneficiario/buscar','show')->middleware('auth')->name('busca_familia');
    Route::get('/buscar/{nome}', 'buscarId')->middleware('auth')->name('buscar_nome');
});
*/


});

         

});
/*
Route::get('/login',[AutentificacaoController::class,'index'])->name('login');

Route::post('/login',[AutentificacaoController::class,'autenticar'])->name('auth_login');
Route::get('/deslogar',[AutentificacaoController::class,'deslogar'])->name('auth_deslogar');

Route::middleware('auth')->group(function(){
   
    Route::get('/cadastro-usuario',[RegistroController::class,'index'])->name('registrar_usuario');
    Route::post('/cadastro-usuario',[AutentificacaoController::class,'registrarUsuario'])->name('cadastrar_usuario');


    Route::controller(OngController::class)->group(function (){
        Route::get('/cadastro-ong','index')->name('view_ong');
        Route::post('/cadastro-ong','store')->name('cadastrar_ong');
    });
    

    Route::controller(BeneficiariosController::class)->group(function (){
        Route::get('/cadastro-beneficiario','create')->name('cad_familia');
        Route::post('/cadastro-beneficiario','store')->name('cadastrar_beneficiario');
        Route::get('/cadastro-beneficiario/busca','show')->name('busca_familia')->methods(['GET','POST']);

    });

});
*/

//PAGINA CURSOS
Route::get('/', [HomeController::class, 'index']);
Route::get('/cadastrado', function(){
    return View('mensagens/cadastrado');
});
Route::get('/cuidador-idosos', [CuidadorIdososController::class, 'index'])->name('cad_idosos');
Route::post('/cuidador-idosos/cadastrando', [CuidadorIdososController::class, 'store'])->name('cadcuidador');
Route::get('/buscar-mobile',[BeneficiariosController::class,'show'])->name('mobile_buscar');
Route::get('/cadastro-beneficiario/busca',[BeneficiariosController::class,'show'])->middleware('auth')->name('busca_familia');

// 

