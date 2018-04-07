<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>RECUPERAÇÃO DE SENHA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #333333;
            font-family: 'RobotoDraft', 'Roboto', sans-serif;
            font-size: 12px;
            height: 200vh;
            margin: 0;
        }

       
        .texto {
            family: 'Times New Roman', Georgia, Serif;
            color: #000;
            padding: 0 25px;
            font-size: 14px;
            letter-spacing: .1rem;
            text-decoration: none;
            line-height:35px;
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
            RECUPERAÇÃO DE SENHA - IGREJA BATISTA EM GLÓRIA
        </div>

        <div class="texto">
            
            <p>
                <strong>Olá {{$usuario_nome}},</strong>
                <br/>
                     Você solicitou a recuperação da sua senha no Sistema de Administração do site da Igreja Batista em Glória.
                     <br/>
                     Para dar prosseguimento ao processo clique no botão abaixo:
                <br/>

            </p>
            <p style="text-align:center">
                <a href="{{$link}}" class="button">  Recuperar Senha</a>
            </p>
        </div>

            <div class="texto">

                <div class="obs">
                	<div class="isa_warning">
                		<strong>Obs.: </strong>
	                	Por favor não responda essa mensagem. Esse é um e-mail automático do sistema <strong>
	                	<a href="www.emgloria.com">EM GLÓRIA</a></strong>
                	</div>
                </div>
            </div>
            <p class="assinatura">
            </p>

    </div>
 </div>
</body>
</html>