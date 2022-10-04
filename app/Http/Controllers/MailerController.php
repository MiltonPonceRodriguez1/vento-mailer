<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
    public function send(Request $request) {
        # INDICE DE INICIO DEL ENVIO
        $index_init = $request->input('index_init');

        # INDICE DE FINAL DEL ENVIO
        $index_end = $request->input('index_end');

        # INICIO DE LOS DATOS DEL ENVIO
        $data_email['date'] = "27sep22";

        $data_email['content_href'] = "https://www.vento.com/ventodays/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VentoDays_30Sep2022";

        $data_email['moto_model'] = "V-RACER 250";
        $data_email['discount'] = "$16,000";

        $data_email['planes'] = "https://www.vento.com/planes-vracer-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VRacer250_27Sep2022";

        $data_email['cilindrada'] = "0 c.c.";
        $data_email['vel_max'] = "0 km/h";
        $data_email['rendimiento'] = "0 km/l";
        $data_email['velocidades'] = "0";
        $data_email['potencia'] = "0 HP";

        $data_email['reccomend_1_hrf'] = "https://www.vento.com/rocketman-carrera-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VRacer250_27Sep2022";

        $data_email['reccomend_2_hrf'] = "https://www.vento.com/rocketman-sport-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VRacer250_27Sep2022";

        $data_email['reccomend_3_hrf'] = "https://www.vento.com/rocketman-racing-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VRacer250_27Sep2022";
        # FIN DE LOS DATOS DEL ENVIO

        try {
            $users = DB::table($request->input('table'))->get();
            
            # ENVIO DE MAILS MASIVOS
            for($i=$index_init; $i < $index_end; $i++) {
                $data_email['TOKEN'] = $users[$i]->TOKEN;
                Mail::send('mails.mail', $data_email, function($message) use ($users, $i) {
                    $message->to($users[$i]->EMAIL)->subject('Hola '.$users[$i]->NOMBRE.', DESDE PYTHON VERSION IV');
                });
            }

            $data = array(
                'code' => 200,
                'status' => 'success',
                'msg' => "Tandeo Enviado Correctamente!",
                'init' => $users[$index_init]->NOMBRE,
                'end' => $users[$index_end - 1]->NOMBRE
            );
        } catch (\Throwable $th) {
            $data = array(
                'code' => 400,
                'status' => 'Error',
                'msg' => "La Tabla ".$request->input('table').", No Existe!"
            );
        }

        return response()->json($data, $data['code']);
    }

    public function getTotalUsers(Request $request) {
        try {
            $users = DB::table($request->input('table'))->get();
            
            $data = array(
                'code' => 200,
                'status' => 'Success',
                'msg' => "Tabla Correcta!",
                'count' => count($users)
            );
        } catch (\Throwable $th) {
            $data = array(
                'code' => 400,
                'status' => 'Error',
                'msg' => "La Tabla ".$request->input('table').", No Existe!"
            );
        }

        return response()->json($data, $data['code']);
        
    }

    public function unsubscribe($token) {
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
    }
}
