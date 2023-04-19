<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MailerController;

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

Route::get('/unsubscribe/{token}', function($token){
    $user = DB::table('users')->where('TOKEN', $token)->first();

    if (is_object($user)) {
        $test = DB::insert('INSERT INTO unsubscribe_users (ID, NOMBRE, EMAIL) values (?, ?, ?)', [null, $user->NOMBRE, $user->EMAIL]);
        $response = DB::table('users')->where('TOKEN', $token)->delete();

        $data = array(
            'code' => 200,
            'status' => 'success',
            'title' => 'Suscripción Cancelada Correctamente!',
            'subtitle' => 'Esperamos Verte Pronto ...',
            'color' => '#208637'
        );
    } else {
        $data = array(
            'code' => 400,
            'status' => 'error',
            'title' => 'Error al Cancelar la Suscripción!',
            'subtitle' => 'Usuario no localizado.',
            'color' => '#A51D2A'
        );
    }

    return view('unsubscribe', array(
        'data' => $data
    ));
});

Route::post('/api/count', [MailerController::class, 'getTotalUsers']);
Route::post('/api/send', [MailerController::class, 'send']);
Route::get('/api/unsubscribe/{token}', [MailerController::class, 'unsubscribe']);
Route::get('/api/preview', [MailerController::class, 'preview']);
Route::post('/api/mass-mailing', [MailerController::class , 'massMailing']);
Route::get('/api/test', [MailerController::class , 'test']);