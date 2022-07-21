<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/mail', function () {

    /*$receivers = array(
        'miltonponceipn@gmail.com',
        'ja.1999.ga@gmail.com',
        'xxd39933@gmail.com',
        'humano.qwert.1234@gmail.com',
        'toxquisandra@gmail.com',
        'aline.quintero.vna@gmail.com',
        'pamela.mvna@gmail.com',
        'rodrigo.ogme@gmail.com'
    );
    
    $names = array(
        'Milton Ponce Rodriguez',
        'Javier Garcia Montes de Oca',
        'Dokken Lee',
        'Humano Desconocido',
        'Sandra Arely González Toxqui',
        'Aline Quintero Campos',
        'Pamela',
        'Rodrigo Larrañaga'
    );*/

    $receivers = array(
        'miltonponceipn@gmail.com',
        'ja.1999.ga@gmail.com',
        'javi.javier.gm@gmail.com',
        'dokken.lee.99@gmail.com',
        'javi.99.gmtz@gmail.com',
        'xxd39933@gmail.com',
        '2173034772@cua.uam.mx',
        '2173034709@cua.uam.mx',
        'humano.qwert.1234@gmail.com',
        '2163032024@cua.uam.mx',
        'humano.humano.0910@gmail.com'
    );

    $names = array(
        'Milton Ponce Rodriguez',
        'Javier Garcia Montes de Oca',
        'JaviDende',
        'Dokken Lee',
        'El Rokys',
        'El Milton',
        'El Javys',
        'El Milton',
        'Humano',
        'El Hector',
        'Humano Desconocido'
    );

    $data_email['home'] = "https://vento.com/";

    /* LINK AND IMG FROM CONTENT */
    $data_email['content_href'] = "https://vento.com/rocketman-carrera-250/";
    $data_email['content_src'] = "https://vento.com/modules/images/main.gif";


    $i = 0;
    foreach ($receivers as $user) {
        Mail::send('mails.mail', $data_email, function($message) use ($user, $names, $i) {
            $message->to($user)->subject('Mundo '.$names[$i]);
        });
        $i++;
    }

    return "<h1 style='text-align: center;'><span style='color: rgb(35, 111, 161); font-family: 'comic sans ms', sans-serif;'>CORREO ENVIADO CORRECTAMENTE</span></h1>";
});
