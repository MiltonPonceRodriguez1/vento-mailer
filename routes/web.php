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

Route::get('/send/{table?}', function ($table = "developers") {

    $data_email['date'] = "27sep22";

    $data_email['content_href'] = "https://www.vento.com/vracer-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VRacer250_27Sep2022";

    $data_email['moto_model'] = "V-RACER 250";
    $data_email['discount'] = "$16,000";

    $data_email['planes'] = "https://www.vento.com/planes-vracer-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VRacer250_27Sep2022";

    $data_email['cilindrada'] = "250 c.c.";
    $data_email['vel_max'] = "130 km/h";
    $data_email['rendimiento'] = "30 km/l";
    $data_email['velocidades'] = "5";
    $data_email['potencia'] = "18 HP";

    $data_email['reccomend_1_hrf'] = "https://www.vento.com/rocketman-carrera-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VRacer250_27Sep2022";

    $data_email['reccomend_2_hrf'] = "https://www.vento.com/rocketman-sport-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VRacer250_27Sep2022";

    $data_email['reccomend_3_hrf'] = "https://www.vento.com/rocketman-racing-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VRacer250_27Sep2022";

    $data = array(
        'code' => 400,
        'msg' => 'Error',
        'table' => $table,
        'count' => 0
    );

    try {
        $users = DB::table($table)->get();
    } catch (\Throwable $th) {
        echo json_encode($data);
        // echo "<center><h1 style='color: red;'>Error La Tabla No Existe</h1></center>";
        die();
    }

    // if(count($users) < 15) {
    //     for($i=0; $i < count($users); $i++) {
    //         echo "<h3>".$users[$i]->NOMBRE." => ".$users[$i]->TOKEN."</h3>";
    //     }
    // }

    $n = count($users);

    // for($i=0; $i < count($users); $i++) {
    //     $data_email['TOKEN'] = $users[$i]->TOKEN;
    //     Mail::send('mails.mail', $data_email, function($message) use ($users, $i) {
    //         //$message->to($users[$i]->EMAIL)->subject('Hello '.$users[$i]->NOMBRE.', pruebita xD.');
    //         $message->to($users[$i]->EMAIL)->subject('Aprovecha el descuento de $16,000 y estrena tu V-Racer 250');
    //     });
    // }

    
    $data = array(
        'code' => 200,
        'msg' => 'Success',
        'users' => $users,
        'table' => $table,
        'count' => $n
    );
    
    echo json_encode($data);

    // return "<h1 style='text-align: center;'><span style='color: rgb(35, 111, 161); font-family: 'comic sans ms', sans-serif;'>CORREO ENVIADO CORRECTAMENTE</span></h1>";  

});

Route::get('/unsubscribe/{TOKEN}', function($TOKEN){
    $data = array(
        'code' => 400,
        'status' => 'error',
        'title' => 'Error al Cancelar la Suscripción!',
        'subtitle' => 'Usuario no localizado.',
        'color' => '#A51D2A'
    );

    $response = DB::table('developers')->where('TOKEN', $TOKEN)->delete();

    if($response > 0) {
        $data = array(
            'code' => 200,
            'status' => 'success',
            'title' => 'Suscripción Cancelada Correctamente!',
            'subtitle' => 'Esperamos Verte Pronto ...',
            'color' => '#208637'
        );
    }

    return view('unsubscribe', array(
        'data' => $data
    ));
});

Route::get('/pruebas/{name?}', function($name = null){
    $text = '<h2>Texto desde una ruta !!</h2>';
    $text .= 'Nombre: '.$name;


    
    echo $text;
});
