<?php

// chamando os arquivos necessários do DOMPdf
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib-master/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib-master/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';

// definindo os namespaces
Dompdf\Autoloader::register();

use Dompdf\Dompdf;

// inicializando o objeto Dompdf
$dompdf = new Dompdf();

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Fortaleza');

// coloque nessa variável o código HTML que você quer que seja inserido no PDF
$codigo_html = '
<html>

<head>
    <style>
        body {
            width: 100%;
            margin: auto;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .logo {
            width: 200px;
            height: 200px;
        }

        .topo {
            font-weight: bold;
        }

        .comprovante {
            margin: 100px;
            font-weight: bold;
        }

        .assinatura {
            font-weight: bold;
            margin-top: 10%;

        }

        footer {
            font-weight: bold;
            width: 100%;
            position: relative;
            bottom: -30%;
        }

        .linha1 {
            color: black;
            background-color: black;
            height: 3px;
            width: 40%;
        }

        .linha2 {
            color: black;
            background-color: black;
            height: 3px;
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="topo">
        <img src="../pdf/fvs.jpg" class="logo">
        <p>FACULDADE VALE DO SALGADO</p>
        <p>CLÍNICA ESCOLA</p>
        <p>SETOR ADMINISTRATIVO</p>
    </div>

    <div class="corpo">
        <p class="comprovante">COMPROVANTE DE CADASTRAMENTO</p>
        <p class="texto">O(A) PACIENTE <b>' . $nomePaciente . '</b> ESTÁ CADASTRADO(A) NO SETOR DE <b>PSICOLOGIA/PSICOTERAPIA
                INDIVIDUAL</b> DA CLÍNICA ESCOLA FVS
            PARA AVALIAÇÃO FUTURA.</p>



        <p><b>ICÓ/CE, ' . strftime('%d de %B de %Y', strtotime('today')) . ' - </b></p>
    </div>

    <div class="assinatura">
        <p>__________________________________________</p>
        <p>RESPONSÁVEL PELO SETOR DE ATENDIMENTO</p>
    </div>

    <footer>
        <p>Rua Josefa Nogueira Monteiro S/N - Centro - Icó/CE</p>
        <p>CEP 63.430-000 - (88) 3561-2760</p>

        <p>www.fvs.edu.br</p>

        <hr class="linha1">
        <hr class="linha2">
    </footer>
</body>

</html>';

// carregamos o código HTML no nosso arquivo PDF
$dompdf->loadHtml($codigo_html);

// (Opcional) Defina o tamanho (A4, A3, A2, etc) e a oritenação do papel, que pode ser 'portrait' (em pé) ou 'landscape' (deitado)
$dompdf->setPaper('A4', 'portrait');

// Renderizar o documento
$dompdf->render();

// pega o código fonte do novo arquivo PDF gerado
$output = $dompdf->output();

// defina aqui o nome do arquivo que você quer que seja salvo
file_put_contents("../pdf/comprovantes_cadastro/" . $cpfPaciente . ".pdf", $output);

// redirecionamos o usuário para o download do arquivo
//die("<script>location.href='comprovantes_cadastro/'".$idPaciente."'';</script>");
