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

        h1, h2 {
            font-family: 'Saira', sans-serif;
            font-style: italic;
            
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

        .data {
            
            width: 100%;
            position: absolute;
            bottom: 0;
        }

    </style>
</head>

<body>


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
    
    <div style="margin-top: 50px;">
        @if(isset($data))
            <center><h1 style="color: {{$data['color']}};">{{$data['title']}}</h1></center>
            <center><h2 style="color: {{$data['color']}};">{{$data['subtitle']}}</h2></center>
        @endif
    </div>

    

    
    
    <div class="data">
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
                <p align="center" style="padding-top:30px;">Teléfono: 55 6384-6600</p>
                <p align="center">© 2022 Vento Motorcycles U.S.A</p>
            </div>
        </div> 
    </div>
    
</body>

</html>