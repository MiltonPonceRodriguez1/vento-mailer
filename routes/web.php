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


    try {
        $users = DB::table($table)->get();
    } catch (\Throwable $th) {
        // echo $th;
        // echo "<hr>";
        echo "<center><h1 style='color: red;'>Error La Tabla No Existe</h1></center>";
        die();
    }

    if(count($users) < 12) {
        for($i=0; $i < count($users); $i++) {
            echo "<h3>".$users[$i]->NOMBRE." => ".$users[$i]->TOKEN."</h3>";
        }
    }

    // $data_email['TOKEN'] = $users[$i]->TOKEN;

    

    for($i=0; $i < count($users); $i++) {
        $data_email['TOKEN'] = $users[$i]->TOKEN;
        Mail::send('mails.mail', $data_email, function($message) use ($users, $i) {
            $message->to($users[$i]->EMAIL)->subject('Hello '.$users[$i]->NOMBRE.', nueva plantilla.');
        });
        // var_dump($data_email['TOKEN']);
    }

    return "<h1 style='text-align: center;'><span style='color: rgb(35, 111, 161); font-family: 'comic sans ms', sans-serif;'>CORREO ENVIADO CORRECTAMENTE</span></h1>";  

});

Route::get('/unsubscribe/{TOKEN}', function($TOKEN){
    $data = array(
        'code' => 400,
        'status' => 'error',
        'title' => 'Error al Cancelar la Suscripción!',
        'subtitle' => 'Usuario no localizado.',
        'color' => '#A51D2A'
    );

    // $users = DB::table('developers')->where('TOKEN', $TOKEN)->first();
    // var_dump($users);die();
    $response = DB::table('developers')->where('TOKEN', $TOKEN)->delete();

    if($response > 0) {
        $data = array(
            'code' => 200,
            'status' => 'success',
            'title' => 'Suscripción Cancelada Correctamente!',
            'subtitle' => 'Esperamos te arrepientas xD, SALUDOTES',
            'color' => '#208637'
        );
    }

    return view('unsubscribe', array(
        'data' => $data
    ));

    // return $data;
});

Route::get('/pruebas/{name?}', function($name = null){
    $text = '<h2>Texto desde una ruta !!</h2>';
    $text .= 'Nombre: '.$name;


    
    echo $text;
});

Route::get('/db', function(){
    $servername = "localhost";
	$username = "vento_hector";
	$password = "Dokkenxbox360";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=vento_wp341981", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión Success";
	} catch(PDOException $e) {
		echo "Conexión Failed";
	}
});
