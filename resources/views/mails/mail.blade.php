<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet" type="text/css">
    <title>Marketing</title>

    <style type="text/css">
        html {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
        }

        p {
            font-family: 'Saira', sans-serif;
        }

        #header {
            background-color: #000000;
            padding-bottom: 20px;
            padding-top: 20px;
        }

        #header p {
            color: #ffffff;
            font-size: 25px;
            font-style: italic;
            font-weight: 700;
            text-align: center;
            margin: 0px;
            padding: 0px;
            align-items: center;
        }

        #header a {
            text-decoration: none;
            color: #ffffff;
        }

        #headerm {
            background-color: #000000;
        }

        #content {
            background-color: #000000;
            margin: 0px;
            padding: 0px;
        }

        #content img {
            margin: 0px;
            padding: 0px;
        }

        #title p {
            color: #ffffff;
            text-align: center;
            font-style: italic;
            font-size: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        #title {
            background-color: #000000;
            padding-bottom: 30px;
            padding-top: 30px;
        }

        #title a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 500 !important;
            font-style: normal;
        }

        #detalles {
            background-color: #ffffff;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        #detalles table p {
            margin: auto;
        }

        #detallesm table p {
            margin: auto;
        }

        #detalles p {
            margin: 0px;
        }

        #contenedorvermas {
            position: relative;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            padding-bottom: 40px;
        }

        #vermas {
            background-color: #000000;
            width: 100%;
            position: relative;
        }

        #footer {
            width: 100%;
            background-color: #1c1d1d;
        }

        #footercontent {
            padding-top: 40px;
            padding-bottom: 20px;
        }


        @media only screen and (min-width:768px) {
            #header {
                display: block;
            }

            #headerm {
                display: none;
            }

            #title img {
                width: 50%;
            }

            #botones {
                display: block;
            }

            #botonesm {
                display: none;
            }

            #detalles {
                width: 90%;
                margin-left: auto;
                margin-right: auto;
            }

            #detalles table {
                width: 100%;
            }

            #detalles {
                display: block;
            }

            #detallesm {
                display: none;
            }

            .opcionver {
                display: inline-block;
                width: 33%;
            }

            #footercontent a {
                color: #ffffff;
                font-size: 18px;
                text-align: center;
                text-decoration: none;
            }

            #footercontent p {
                color: #ffffff;
                font-size: 18px;
                text-align: center;
                text-decoration: none;
            }

        }

        @media only screen and (max-width:767px) {
            #headerm {
                display: block;
            }

            #header {
                display: none;
            }

            #title img {
                width: 80%;
            }

            #botones {
                display: none;
            }

            #botonesm {
                display: block;
            }

            #detalles {
                display: none;
            }

            #detallesm {
                display: block;
            }

            .opcionver {
                display: inline-block;
                width: 100%;
            }

            #footercontent a {
                color: #ffffff;
                font-size: 12px;
                text-align: center;
                text-decoration: none;
            }

            #footercontent p {
                color: #ffffff;
                font-size: 12px;
                text-align: center;
                text-decoration: none;
            }

            #title {
                padding-right: 10px;
                padding-left: 10px;
            }
        }

    </style>
</head>

<body>

<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> ¡Explora la ciudad sin límites! </div>
    <!--Header Web-->
    <div id="header">
        <table align="center">
            <tr>
                <td>
                    <p><a href="https://vento.com/"><img src="https://vento.com/mailing/main/ventologo.png"></a></p>
                </td>
            </tr>
        </table>

        <table align="center" width="100%">
            <tr>
                <td align="center">
                    <p>
                        <a href="https://vento.com/mailing/redirect/fb"><img src="https://vento.com/mailing/main/fb.png"></a>
                        <a href="https://vento.com/mailing/redirect/ig"><img src="https://vento.com/mailing/main/ig.png"></a>
                        <a href="https://vento.com/mailing/redirect/tw"><img src="https://vento.com/mailing/main/tw.png"></a>
                    </p>
                </td>
                <td align="center">
                    <p><a href="https://vento.com/tienda/">MODELOS</a></p>
                </td>
                <td align="center">
                    <p><a href="https://vento.com/agencias/">AGENCIAS</a></p>
                </td>
                <td align="center">
                    <p><a href="https://ventorefacciones.com/">REFACCIONES</a></p>
                </td>
                <td align="center">
                    <p><a href="https://vento.com/blog/">BLOG</a></p>
                </td>
            </tr>
        </table>
    </div>
    <!--Header Web Fin-->


    <!--Header Mobile-->
    <div id="headerm">
		<a href="https://vento.com/">
			<center><img src="https://vento.com/mailing/main/headerm.jpg" width="100%"></center>
		</a>
	</div>
    <!--Header Mobile Fin-->


    <!--Comienza Content-->
    <div id="content">
        <a href="{{$content_href}}" target="_blank">
            <center>
                <img src="https://vento.com/mailing/content/{{$date}}/encabezado-{{$date}}.gif" width="100%">
            </center>
        </a>
    </div>
    <!--Termina Content-->


    <!--Comienza Title-->
    <div id="title">
        <center>
            <img src="https://vento.com/mailing/content/{{$date}}/slogan-{{$date}}.png">
        </center>

        <p>Estrena hoy tu Vento {{$moto_model}} con {{$discount}} de descuento en <a href="{{$content_href}}"><b>www.vento.com</b></a></p>

        <!--<div class="btn" style="margin-top:30px;">
            <p><a href="{{$content_href}}">QUIERO MÁS INFORMACIÓN</a></p>
        </div>
        <div class="btn" style="margin-top:30px;margin-bottom:30px;">
            <p><a href="https://vento.com/mailing/redirect/credit">DESCUBRE VENTOCREDIT</a></p>
        </div>-->

        <div id="botones">
			<table align="center" width="100%">
				<tr>
					<td>
                        <a href="{{$content_href}}">
							<center>
                                <img src="https://vento.com/mailing/main/btninfo.png">
                            </center>
						</a>
                    </td>
					<td>
                        <a href="https://vento.com/mailing/redirect/credit/">
							<center>
                                <img src="https://vento.com/mailing/main/btncredit.png">
							</center>
						</a>
                    </td>
				</tr>
			</table>
		</div>

        <!--Comienza Botonesm-->
		<div id="botonesm">
			<table align="center" width="100%">
				<tr>
					<td>
                        <a href="{{$content_href}}">
							<center>
                                <img src="https://vento.com/mailing/main/btninfo.png" style="margin-bottom:20px;">
                            </center>
						</a>
                    </td>
				</tr>
				<tr>
					<td>
                        <a href="https://vento.com/mailing/redirect/credit/">
							<center>
                                <img src="https://vento.com/mailing/main/btncredit.png">
                            </center>
						</a>
                    </td>
				</tr>
			</table>
		</div>
		<!--Termina Botonesm-->
    </div>
    <!--Termina Title-->




    <!--Comienza Detalles-->
    <div id="detalles">
		<p style="text-align:center;font-size:25px;"><b>360°</b></p>

		<a href="{{$planes}}">
			<center>
                <img src="https://vento.com/mailing/content/{{$date}}/360-{{$date}}.gif" style="margin-top:20px;">
            </center>
		</a>

		<table style="margin-top:20px;" align="center">
			<tr>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/cilindrada.jpg"></td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$cilindrada}}</b></p>
								<p align="left">Cilindrada</p>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/velocidadmaxima.jpg">
							</td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$vel_max}}</b></p>
								<p align="left">Velocidad Máxima</p>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/rendimiento.jpg"></td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$rendimiento}}</b></p>
								<p align="left">Rendimiento</p>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/velocidades.jpg"></td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$velocidades}}</b></p>
								<p align="left">Velocidades</p>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/potenciamaxima.jpg"></td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$potencia}}</b></p>
								<p align="left">Potencia Máxima</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
    <!--Termina Detalles-->


    <!--------     ME QUEDE AQUI XD -------------->


    <div id="detallesm">
		<p style="text-align:center;font-size:25px;"><b>360°</b></p>
		<a href="{{$planes}}">
			<center><img src="https://vento.com/mailing/content/{{$date}}/360-{{$date}}.gif"></center>
		</a>
		<table align="center" style="margin-top:20px;">
			<tr>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/cilindrada.jpg"></td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$cilindrada}}</b></p>
								<p align="left">Cilindrada</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/velocidadmaxima.jpg">
							</td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$vel_max}}</b></p>
								<p align="left">Velocidad Máxima</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/rendimiento.jpg"></td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$rendimiento}}</b></p>
								<p align="left">Rendimiento</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/velocidades.jpg"></td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$velocidades}}</b></p>
								<p align="left">Velocidades</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td colspan="2"><img src="https://vento.com/mailing/main/potenciamaxima.jpg"></td>
							<td>
								<p align="left" style="font-size:25px;line-height:25px;"><b>{{$potencia}}</b></p>
								<p align="left">Potencia Máxima</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>



    <div id="vermas" style="background-color:#000000;">
        <div id="contenedorvermas">
            <p style="text-align:center;font-size:25px;color:#ffffff;padding-top:30px;">
                <i>CONOCE MÁS</i>
            </p>
            <div class="opcionver">
                <a href="{{$reccomend_1_hrf}}">
                    <center><img src="https://vento.com/mailing/content/{{$date}}/opcion1-{{$date}}.jpg" width="90%"></center>
                </a>
            </div>
            <div class="opcionver">
                <a href="{{$reccomend_2_hrf}}">
                    <center><img src="https://vento.com/mailing/content/{{$date}}/opcion2-{{$date}}.jpg" width="90%"></center>
                </a>
            </div>
            <div class="opcionver">
                <a href="{{$reccomend_3_hrf}}">
                    <center><img src="https://vento.com/mailing/content/{{$date}}/opcion3-{{$date}}.jpg" width="90%"></center>
                </a>
            </div>
        </div>
    </div>

    <div id="footer" style="background-color:#1c1d1d;">
        <div id="footercontent">
            <a href="https://vento.com/">
                <center><img src="https://vento.com/mailing/main/ventologo.png"></center>
            </a>

            <!--<p align="center">
                <a href="https://vento.com/politicas-de-envio/">Políticas de Envío</a> │
                <a href="https://vento.com/aviso-de-privacidad/">Aviso de Privacidad</a> │
                <a href="https://vento.com/terminos-y-condiciones/">Términos y Condiciones</a>
            </p>-->
            <p align="center" style="padding-top:30px;">
                <a href="https://vento.com/vento-mailer/public/unsubscribe/{{$TOKEN}}">Unsubscribe</a> |
                Teléfono: 55 6384-6600
            </p>
            <p align="center">© 2023 Vento Motorcycles U.S.A</p>
        </div>
    </div>
</body>

</html>
