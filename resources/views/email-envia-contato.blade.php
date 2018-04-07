<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CONTATO SITE - IBG</title>

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
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="content">
                <div class="titulo">
                   IGREJA BATISTA EM GLÓRIA
                </div>

                <div class="texto">
                    <p>
                        <strong>Você recebeu uma nova mensagem pela página de contato,</strong>
						<br/>
						<br/>
                        <strong>Nome:</strong> {{$nome}}
                        <br />
                        <strong>Telefone:</strong> {{$telefone}}
                        <br />
                        <strong>Email:</strong> {{$email}}
                        <br />
                        <strong>Mensagem:</strong> {{$mensagem}}
                        <br />
                        <p>Mensagem enviado pelo site:</p>
                         <strong>{{$link}}</strong>
						<br/>
                    <p>
                        <strong> “O amor é paciente e bondoso. O amor não é ciumento, nem orgulhoso, nem vaidoso. O amor tudo sofre, tudo crê, tudo espera, tudo suporta.” -  1 Coríntios 13:4-8</strong>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
