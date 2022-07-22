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
        'humano.humano.0910@gmail.com',
        'toxquisandra@gmail.com',
        'aline.quintero.vna@gmail.com',
        'pamela.mvna@gmail.com',
        'rodrigo.ogme@gmail.com',
        'hectorponce1im2@gmail.com',
        'moises.calderon@vnagroup.us'
    );
    
    $names = array(
        'Milton',
        'Javier',
        'Dokken',
        'Humano',
        'Sandra',
        'Aline',
        'Pamela',
        'Rodrigo',
        'Hector',
        'Moy'
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
        'humano.humano.0910@gmail.com',
        'sweet_roses197@hotmail.com'
    );

    $names = array(
        'Milton',
        'Javier',
        'JaviDende',
        'Dokken',
        'Rokys',
        'Milton',
        'Javys',
        'Milton',
        'Humano',
        'Hector',
        'Humano Desconocido',
        'Hector'
    );

    $data_email['home'] = "https://vento.com/";

    $data_email['content_href'] = "https://vento.com/rocketman-carrera-250/";
    $data_email['content_src'] = "https://vento.com/mailing/content/main.gif";

    $data_email['moto_model'] = "ROCKETMAN CARRERA 250";
    $data_email['discount'] = "$11,000";

    $data_email['logo_moto'] = "https://vento.com/mailing/content/despiertacaferacer.png";

    $data_email['planes'] = "https://vento.com/planes-rocketman-carrera-250/";
    $data_email['img_360'] = "https://vento.com/mailing/content/rcarrera250.gif";

    // ESPECIFICACIONES
    $data_email['cilindrada'] = "250 c.c.";
    $data_email['vel_max'] = "130 km/h";
    $data_email['rendimiento'] = "30 km/l";
    $data_email['velocidades'] = "6";
    $data_email['potencia'] = "18 HP";

    $data_email['reccomend_1_hrf'] = "https://vento.com/rocketman-racing-250/";
    $data_email['reccomend_1_src'] = "https://vento.com/mailing/recommend/link1.jpg";

    $data_email['reccomend_2_hrf'] = "https://vento.com/rocketman-sport-250/";
    $data_email['reccomend_2_src'] = "https://vento.com/mailing/recommend/link2.jpg";

    $data_email['reccomend_3_hrf'] = "https://vento.com/screamer-sportivo-250/";
    $data_email['reccomend_3_src'] = "https://vento.com/mailing/recommend/link3.jpg";


    $i = 0;
    foreach ($receivers as $user) {
        Mail::send('mails.mail', $data_email, function($message) use ($user, $names, $i) {
            $message->to($user)->subject('Hello '.$names[$i].' Mira la prueba de subject personalizado.');
        });
        $i++;
    }

    return "<h1 style='text-align: center;'><span style='color: rgb(35, 111, 161); font-family: 'comic sans ms', sans-serif;'>CORREO ENVIADO CORRECTAMENTE</span></h1>";
});
