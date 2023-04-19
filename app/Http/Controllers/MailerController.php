<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller {
    public function send(Request $request) {
        # INDICE DE INICIO DEL ENVIO
        $index_init = $request->input('index_init');

        # INDICE DE FINAL DEL ENVIO
        $index_end = $request->input('index_end');

        # INICIO DE LOS DATOS DEL ENVIO
        $data_email['date'] = "15mar23";

        $data_email['content_href'] = "https://www.vento.com/xplor-150/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_Xplor150_15Mar23";

        $data_email['moto_model'] = "XPLOR 150";
        $data_email['discount'] = "$4,000";

        $data_email['planes'] = "https://www.vento.com/xplor-150/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_Xplor150_15Mar23";

        $data_email['cilindrada'] = "150 c.c.";
        $data_email['vel_max'] = "100 km/h";
        $data_email['rendimiento'] = "35 km/l";
        $data_email['velocidades'] = "5";
        $data_email['potencia'] = "13.7 HP";

        $data_email['reccomend_1_hrf'] = "https://www.vento.com/crossmax-150/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_Xplor150_15Mar23";

        $data_email['reccomend_2_hrf'] = "https://www.vento.com/crossmax-200/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_Xplor150_15Mar23";

        $data_email['reccomend_3_hrf'] = "https://www.vento.com/crossmax-250-pro/?utm_source=mailing&utm_medium=email&utm_campaign=NuevoMailing_Xplor150_15Mar23";
        # FIN DE LOS DATOS DEL ENVIO

        try {
            $users = DB::table($request->input('table'))->get();

            # ENVIO DE MAILS MASIVOS
            // for($i=$index_init; $i < $index_end; $i++) {
            //     $data_email['TOKEN'] = $users[$i]->TOKEN;
            //     Mail::send('mails.mail', $data_email, function($message) use ($users, $i) {
            //         $message->to($users[$i]->EMAIL)->subject('Hola '.$users[$i]->NOMBRE.', ¡Explora la ciudad sin límites!');
            //     });
            // }

            $data = array(
                'code' => 200,
                'status' => 'success',
                'msg' => "Tandeo Enviado Correctamente!",
                'init' => $users[$index_init]->NOMBRE,
                'end' => $users[$index_end - 1]->NOMBRE
            );

            return response()->json($data, $data['code']);
        } catch (\Throwable $th) {
            $data = array(
                'code' => 400,
                'status' => 'error',
                'msg' => "La Tabla ".$request->input('table').", No Existe!"
            );

            return response()->json($data, $data['code']);
        }

    }

    public function getTotalUsers(Request $request) {
        try {
            $data = array(
                'code' => 200,
                'status' => 'success',
                'message' => "Petición atendida correctamente!",
                'count' => DB::table($request->input('table'))->count()
            );

            return response()->json($data, $data['code']);
        } catch (\Throwable $th) {
            $data = array(
                'code' => 400,
                'status' => 'error',
                'message' => "La Tabla ".$request->input('table').", No Existe!"
            );

            return response()->json($data, $data['code']);
        }

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


    public function convertData($str_convert) {
        $str_convert = str_replace(" ", "%20", $str_convert);
        $str_convert = str_replace(",", "%2C", $str_convert);
        return $str_convert;
    }

    public function preview() {
        $data_email['date'] = $_GET['date'];
        $data_email['header_img'] = $_GET['header_img'];
        $data_email['header_url'] = $_GET['header_url'];
        $data_email['motorcycle'] = $_GET['motorcycle'];
        $data_email['discount'] = $_GET['discount'];
        $data_email['plans_url'] = $_GET['plans_url'];
        $data_email['motorcycle_img_360'] = $_GET['motorcycle_img_360'];
        $data_email['displacement'] = $_GET['displacement'];
        $data_email['max_speed'] = $_GET['max_speed'];
        $data_email['performance'] = $_GET['performance'];
        $data_email['speeds'] = $_GET['speeds'];
        $data_email['power'] = $_GET['power'];
        $data_email['option_one_img'] = $_GET['option_one_img'];
        $data_email['option_one_url'] = $_GET['option_one_url'];
        $data_email['option_two_img'] = $_GET['option_two_img'];
        $data_email['option_two_url'] = $_GET['option_two_url'];
        $data_email['option_three_img'] = $_GET['option_three_img'];
        $data_email['option_three_url'] = $_GET['option_three_url'];
        $data_email['slogan_img'] = $_GET['slogan_img'];
        $data_email['TOKEN'] = "Test_Token";

        return view('mails/first', $data_email);
    }

    public function massMailing(Request $request) {
        $data = array(
            'code' => 400,
            'status' => 'Error',
            'message' => "Error al conectarse a la DB"
        );

        $table = $request->input('table');

        if($table == 'users' || $table == 'marketing'){
            return response()->json($data, $data['code']);
        }

        $subject = $request->input('subject');
        $skip = $request->input('skip');
        $take = $request->input('take');

        $begin = $request->input('begin');
        $end = $request->input('end');

        $data_email['date'] = $request->input('date');
        $data_email['header_img'] = $request->input('header_img');
        $data_email['header_url'] = $request->input('header_url');
        $data_email['motorcycle'] = $request->input('motorcycle');
        $data_email['discount'] = $request->input('discount');
        $data_email['plans_url'] = $request->input('plans_url');
        $data_email['motorcycle_img_360'] = $request->input('motorcycle_img_360');
        $data_email['displacement'] = $request->input('displacement');
        $data_email['max_speed'] = $request->input('max_speed');
        $data_email['performance'] = $request->input('performance');
        $data_email['speeds'] = $request->input('speeds');
        $data_email['power'] = $request->input('power');
        $data_email['option_one_img'] = $request->input('option_one_img');
        $data_email['option_one_url'] = $request->input('option_one_url');
        $data_email['option_two_img'] = $request->input('option_two_img');
        $data_email['option_two_url'] = $request->input('option_two_url');
        $data_email['option_three_img'] = $request->input('option_three_img');
        $data_email['option_three_url'] = $request->input('option_three_url');
        $data_email['slogan_img'] = $request->input('slogan_img');

        try {
            $users = DB::table($table)->skip($skip)->take($take)->get();

            // foreach ($users as $user) {
            //     $data_email['TOKEN'] = $user->TOKEN;
            //     Mail::send('mails.first', $data_email, function($message) use ($user, $subject) {
            //         $message->to($user->EMAIL)->subject('Hola '.$user->NOMBRE.', '.$subject);
            //     });
            // }

            $data = array(
                'code' => 200,
                'status' => 'success',
                'message' => "Tandeo Enviado Correctamente!",
                'users' => $users
            );
        } catch (\Throwable $th) {

        }

        return response()->json($data, $data['code']);
    }

    public function test(Request $requesst) {
        return response()->json(array(
            "code" => 200,
            "status" => "success"
        ));
    }

}
