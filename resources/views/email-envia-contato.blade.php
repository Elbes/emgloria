<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log de erros Intranet</title>

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
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="content">
                <div class="titulo">
                    EF Consultoria - Contato
                </div>

                <div class="texto">
                    <p>
                        <strong>Você recebeu uma nova mensagem pela página de contato,</strong>
						<br/>
						<br/>
                        <strong>Nome:</strong> {{$nome}}
                        <br />
                        <strong>Email:</strong> {{$email}}
                        <br />
                        <strong>Assunto:</strong> {{$assunto}}
                        <br />
                        <strong>Mensagem:</strong> {{$mensagem}}
                        <br />
                        <p>Veja suas mensagens no site clicando no link</p>
                         <strong>{{$link}}</strong>
						<br/>
                    <p>
                        <strong> Por favor não responda essa mensagem. Este é um email automático.</strong>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
