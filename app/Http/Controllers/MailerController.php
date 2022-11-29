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
        $data_email['date'] = "21nov22";

        $data_email['content_href'] = "https://www.vento.com/xpress-150/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VuenFin_Xpress150_21Nov22";

        $data_email['moto_model'] = "XPRESS 150";
        $data_email['discount'] = "$6,000";

        $data_email['planes'] = "https://www.vento.com/xpress-150/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VuenFin_Xpress150_21Nov22";

        $data_email['cilindrada'] = "150 c.c.";
        $data_email['vel_max'] = "100 km/h";
        $data_email['rendimiento'] = "35 km/l";
        $data_email['velocidades'] = "5";
        $data_email['potencia'] = "13.7 HP";

        $data_email['reccomend_1_hrf'] = "https://www.vento.com/crossmax-200/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VuenFin_Xpress150_21Nov22";

        $data_email['reccomend_2_hrf'] = "https://www.vento.com/lithium-150-4/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VuenFin_Xpress150_21Nov22";

        $data_email['reccomend_3_hrf'] = "https://www.vento.com/screamer-250/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_VuenFin_Xpress150_21Nov22";
        # FIN DE LOS DATOS DEL ENVIO

        try {
            $users = DB::table($request->input('table'))->get();
            
            # ENVIO DE MAILS MASIVOS
            for($i=$index_init; $i < $index_end; $i++) {
                $data_email['TOKEN'] = $users[$i]->TOKEN;
                Mail::send('mails.mail', $data_email, function($message) use ($users, $i) {
                    $message->to($users[$i]->EMAIL)->subject('Hola '.$users[$i]->NOMBRE.', Atencion Requerida: Ultimo Aviso');
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
