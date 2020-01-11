<!DOCTYPE html>
<!--
---------------------------------------------------------------------------------------
Licença   : MIT - Copyright 2020 Viniciusalopes (Vovolinux) <suporte@vovolinux.com.br>
Criado em : 11/01/2020
Projeto   : tempo-php
Finalidade: 
---------------------------------------------------------------------------------------
-->
<?php
require_once '../bin/sessao.php';
require_once '../obj/Tempo.php';
?>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tempo Limite</title>
    </head>

    <body>
        <?php
        $tempo_limite_em_segundos = 3600; // 1h = 60m * 60s = 3600
        $ultima_consulta = date('Y-m-d H:i:s', strtotime('-1 hours'));

        $Tempo = new Tempo($tempo_limite_em_segundos, $ultima_consulta);
        echo 'Tempo ' . (($Tempo->esgotado()) ? 'esgotado' : 'disponivel');
        ?>
        <pre>
            <?php echo print_r($Tempo->get()) ?>
        </pre>
    </body>
</html>