<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira">
    <link
        href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventos Templete</title>

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

        #content {
            background-color: #000000;
        }

        #header {
            width: 100%;
            background-color: #000000;
            display: flex;
            align-items: center;
        }

        #header p {
            color: #ffffff;
            font-size: 25px;
            font-style: italic;
            font-weight: 700;
            text-align: center;
        }

        #header a {
            text-decoration: none;
            color: #ffffff;
        }

        #headerm {
            width: 100%;
            background-color: #000000;
            display: flex;
            align-items: center;
        }

        #headerm p {
            color: #ffffff;
            font-size: 25px;
            font-style: italic;
            font-weight: 700;
            text-align: center;
        }

        #headerm a {
            text-decoration: none;
            color: #ffffff;
        }

        #detalles table p {
            line-height: 35px;
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
            background: rgb(38, 41, 46);
            background: linear-gradient(180deg, rgba(38, 41, 46, 1) 0%, rgba(59, 62, 69, 1) 100%);
        }

        #footercontent {
            padding-top: 40px;
            padding-bottom: 20px;
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

        @media only screen and (min-width:970px) {
            #header {
                display: block;
            }

            #headerm {
                display: none;
            }

            #title img {
                width: 50%;
            }

            .btn {
                display: flex;
                align-items: center;
                background-color: #297a05;
                width: 30%;
                margin-left: auto;
                margin-right: auto;
                border-radius: 15px;
            }

            .btn a {
                color: #ffffff;
                font-size: 30px;
                text-align: center;
            }

            #detalles {
                width: 70%;
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

        }

        @media only screen and (max-width:969px) {
            #header {
                display: none;
            }

            #headerm {
                display: block;
            }

            #title img {
                width: 80%;
            }

            .btn {
                display: flex;
                align-items: center;
                background-color: #297a05;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
                border-radius: 15px;
            }

            .btn a {
                color: #ffffff;
                font-size: 20px;
                text-align: center;
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
        }

        #title a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 500 !important;
            font-style: normal;
        }

    </style>

</head>

<body>


    <!--Header Web-->
    <div id="header">
        <table align="center">
            <tr>
            <td><p><a href="{{$home}}"><img src="https://vento.com/modules/images/ventologo.png"></a></p></td>
            </tr>	
        </table>

        <table align="center" width="100%">
            <tr>
                <td><p>
                    <a href="https://vento.com/modules/email/fb" ><img src="https://vento.com/modules/images/fb.png"></a>
                    <a href="https://vento.com/modules/email/ig"><img src="https://vento.com/modules/images/ig.png"></a>
                    <a href="https://vento.com/modules/email/tw"><img src="https://vento.com/modules/images/tw.png"></a>
                </p></td>
                <td><p><a href="https://vento.com/tienda/">MODELOS</a></p></td>
                <td><p><a href="https://vento.com/agencias/">AGENCIAS</a></p></td>
                <td><p><a href="https://ventorefacciones.com/">REFACCIONES</a></p></td>
                <td><p><a href="https://vento.com/blog/">BLOG</a></p></td>
                <td><p><a href="https://vento.com/tienda/"><img src="https://vento.com/modules/images/shop.png"></a></p></td>
            </tr>
        </table>
    </div>
    <!--Header Web Fin-->

    <div id="headerm">
        <table align="center" width="100%">
            <tr>
                <td><p><a href="{{$home}}"><img src="https://vento.com/modules/images/ventologo.png"></a></p></td>
            </tr>
        </table>
    </div>


    

    <div id="content">
        <a href="{{$content_href}}" target="_blank">
            <center>
                <img src="{{$content_src}}" width="100%">
            </center>
        </a>
    </div>

    <div id="title">
        <center>
            <img src="https://vento.com/modules/images/despiertacaferacer.png">
        </center>
        
        <p>Estrena hoy tu Vento ROCKETMAN CARRERA 250 con $11,000 de descuento en <a href="{{$home}}"><b>www.vento.com</b></a></p>

        <div class="btn" style="margin-top:30px;">
            <p><a href="{{$content_href}}">QUIERO MÁS INFORMACIÓN</a></p>
        </div>
        <div class="btn" style="margin-top:30px;margin-bottom:30px;">
            <p><a href="https://vento.com/modules/email/credit">DESCUBRE VENTOCREDIT</a></p>
        </div>	
    </div>

    <div id="detalles">
        <table>
            <tr>
                <td align="right" width="50">
                    <img src="https://vento.com/modules/images/cilindrada.jpg" style="padding-top:30px;"></td><td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>250 c.c.</b></p>
                    <p align="left" style="margin-top:-45px;margin-left:10px;">Cilindrada</p>
                </td>
                <td rowspan="5">
                    <p style="text-align:center;font-size:30px;"><b>360°</b></p>
                    <a href="https://vento.com/planes-rocketman-carrera-250/">
                        <center>
                            <img src="https://vento.com/modules/images/rcarrera250.gif" width="80%">
                        </center>
                    </a>
                    <p style="text-align:center;font-size:30px;">ROCKETMAN CARRERA 250</p>
                </td>
            </tr>
            <tr>
                <td align="right" width="50">
                    <img src="https://vento.com/modules/images/velocidadmaxima.jpg" style="padding-top:30px;">
                </td>
                <td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>130 km/h</b></p>
                    <p align="left" style="margin-left:10px;margin-top:-45px;">Velocidad Máxima</p>
                </td>
            </tr>
            <tr>
                <td align="right" width="50">
                    <img src="https://vento.com/modules/images/rendimiento.jpg" style="padding-top:30px;">
                </td>
                <td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>30 km/l</b></p>
                    <p align="left" style="margin-left:10px;margin-top:-45px;">Rendimiento</p>
                </td>
            </tr>
            <tr>
                <td align="right" width="50">
                    <img src="https://vento.com/modules/images/velocidades.jpg" style="padding-top:30px;">
                </td>
                <td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>6</b></p>
                    <p align="left" style="margin-left:10px;margin-top:-45px;">Velocidades</p>
                </td>
            </tr>
            <tr>
                <td align="right" width="50">
                    <img src="https://vento.com/modules/images/potenciamaxima.jpg" style="padding-top:30px;">
                </td>
                <td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>18 HP</b></p>
                    <p align="left" style="margin-left:10px;margin-top:-45px;">Potencia Máxima</p>
                </td>
            </tr>
        </table>
    </div><!--Termina detalles-->

    <div id="detallesm">
        <p style="text-align:center;font-size:30px;"><b>360°</b></p>	
        <a href="https://vento.com/planes-rocketman-carrera-250/">
            <center>
                <img src="https://vento.com/modules/images/rcarrera250.gif" width="100%">
            </center>
        </a>
        <table align="center">
            <tr>
                <td width="50">
                    <img src="https://vento.com/modules/images/cilindrada.jpg" style="padding-top:30px;">
                </td>
                <td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>250 c.c.</b></p>
                    <p align="left" style="margin-top:-45px;margin-left:10px;">Cilindrada</p>
                </td>
            </tr>
            <tr>
                <td width="50">
                    <img src="https://vento.com/modules/images/velocidadmaxima.jpg" style="padding-top:30px;">
                </td>
                <td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>130 km/h</b></p>
                    <p align="left" style="margin-left:10px;margin-top:-45px;">Velocidad Máxima</p>
                </td>
            </tr>
            <tr>
                <td width="50">
                    <img src="https://vento.com/modules/images/rendimiento.jpg" style="padding-top:30px;">
                </td>
                <td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>30 km/l</b></p>
                    <p align="left" style="margin-left:10px;margin-top:-45px;">Rendimiento</p>
                </td>
            </tr>
            <tr>
                <td width="50">
                    <img src="https://vento.com/modules/images/velocidades.jpg" style="padding-top:30px;">
                </td>
                <td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>6</b></p>
                    <p align="left" style="margin-left:10px;margin-top:-45px;">Velocidades</p>
                </td>
            </tr>
            <tr>
                <td width="50">
                    <img src="https://vento.com/modules/images/potenciamaxima.jpg" style="padding-top:30px;">
                </td>
                <td colspan="2">
                    <p align="left" style="font-size:35px;margin-left:10px;"><b>18 HP</b></p>
                    <p align="left" style="margin-left:10px;margin-top:-45px;">Potencia M&aacute;xima</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div id="vermas">
        <div id="contenedorvermas">
            <p style="text-align:center;font-size:35px;color:#ffffff;line-height:35px;padding-top:40px;font-style:italic;">
                CONOCE MÁS
            </p>	
            <div class="opcionver">
                <a href="https://vento.com/rocketman-racing-250/">
                    <center>
                        <img src="https://vento.com/modules/images/link1.jpg" width="90%">
                    </center>
                </a>	
            </div>
            <div class="opcionver">
                <a href="https://vento.com/rocketman-sport-250/">
                    <center>
                        <img src="https://vento.com/modules/images/link2.jpg" width="90%">
                    </center>
                </a>	
            </div>
            <div class="opcionver">
                <a href="https://vento.com/screamer-sportivo-250/">
                    <center>
                        <img src="https://vento.com/modules/images/link3.jpg" width="90%">
                    </center>
                </a>
            </div>
        </div>
    </div>

    <div id="footer">
        <div id="footercontent">	
            <a href="{{$home}}">
                <center>
                    <img src="https://vento.com/modules/images/ventologo.png">
                </center>
            </a>
            <p align="center">
                <a href="https://vento.com/politicas-de-envio/">Políticas de Envío</a> │ 
                <a href="https://vento.com/aviso-de-privacidad/">Aviso de Privacidad</a> │ 
                <a href="https://vento.com/terminos-y-condiciones/">Términos y Condiciones</a>
            </p>
            <p align="center">Teléfono: 55 6384-6600</p>
            <p align="center">© 2022 Vento Motorcycles U.S.A</p>
        </div>
    </div>	
</body>
</html>
