<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
    public function send(Request $request) {
        $index_init = $request->input('index_init');
        $index_end = $request->input('index_end');

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

        try {
            $users = DB::table($request->input('table'))->get();
            
            // for($i=$index_init; $i <= $index_end; $i++) {
            //     $data_email['TOKEN'] = $users[$i]->TOKEN;
            //     Mail::send('mails.mail', $data_email, function($message) use ($users, $i) {
            //         $message->to($users[$i]->EMAIL)->subject('Hola '.$users[$i]->NOMBRE.', DESDE PYTHON VERSION II');
            //     });
            // }

            $data = array(
                'code' => 200,
                'status' => 'success',
                'msg' => "Todo Chido xD!",
                'init' => $users[$index_init]->NOMBRE,
                'end' => $users[$index_end]->NOMBRE
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
}
