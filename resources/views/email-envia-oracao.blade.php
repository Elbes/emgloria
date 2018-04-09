<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PEDIDO DE ORAÇÃO SITE - IBG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #333333;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .titulo {
                color: #636b6f;
                padding: 0 25px;
                font-size: 22px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .texto {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                letter-spacing: .1rem;
                text-decoration: none;
				line-height:30px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .button{
                font-family: Avenir,Helvetica,sans-serif;
                box-sizing: border-box;
                border-radius: 3px;
                color: #fff;
                display: inline-block;
                text-decoration: none;
                background-color: #3097d1;
                border-top: 10px solid #3097d1;
                border-right: 18px solid #3097d1;
                border-bottom: 10px solid #3097d1;
                border-left: 18px solid #3097d1;
                cursor:pointer;
        }
        .assinatura{
            padding-top: 15px;
            font-size:14px;
        }
        .isa_warning {
            margin: 10px 0px;
            padding:12px;

        }
        .isa_warning {
            color: #9F6000;
            background-color: #FEEFB3;
        }
        .obs{
            font-size:14px;
        }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="content">
                <div class="titulo">
                PEDIDO DE ORAÇÃO FEITO PELO SITE
                </div>

                <div class="texto">
                    <p>
                        <strong>Nome:</strong> {{$nome_solicitante}}
                        <br />
                        <strong>Telefone:</strong> {{$telefone_solicitante}}
                        <br />
                        <strong>Email:</strong> {{$email_solicitante}}
                        <br />
                        <strong>Pedido:</strong> {{$oracao_pedido}}
                        <br />
                        <p>Mensagem enviado pelo site: <strong>{{$link}}</strong></p>
                         
						<br/>
						
						<p class="obs">
                    		 <div class="isa_warning"> “O amor é paciente e bondoso. O amor não é ciumento, nem orgulhoso, nem vaidoso. O amor tudo sofre, tudo crê, tudo espera, tudo suporta.” -  1 Coríntios 13:4-8</div>
                		</p>
       
                </div>
            </div>
        </div>
    </body>
</html>
