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
require_once '../bll/sessao.php';
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Sessão</title>
    </head>
    <body>
        <style type="text/css">
            a{
                margin-right: 2em;
            }

            .red {
                color: red;
            }

            .black {
                color: black;
            }

            .bold {
                font-weight: bold;
            }

            .uppercase {
                text-transform: uppercase !important;
            }


        </style>
        <pre>
            <?php
            if (count($_SESSION) > 0) {
                $itens = [
                    (object) ['item' => 'top', 'link' => "<a classe href=\"#top\">top</a>"],
                    (object) ['item' => 'limpar_sessao', 'link' => "<a classe href=\"../dados/limpar_sessao.php\">limpar sessão</a>"]
                ];

                foreach ($_SESSION as $key => $value) {
                    $itens [] = (object) [
                                'item' => $key,
                                'link' => "<a classe href=\"#$key\" >$key</a>"
                    ];
                }

                foreach ($_SESSION as $key => $value) {
                    $var = "<div id=\"$key\">"; # identifica a var
                    # Monta o menu
                    $menu = "<div id=\"menu\"><hr>";
                    foreach ($itens as $item) {
                        $link = ($item->item == $key) ?
                                str_replace('classe', "class=\"red bold uppercase\"", $item->link) : # Seleciona o item atual do menu
                                str_replace('classe', '', $item->link);                       # Remove a flag da classe
                        $menu .= $link;
                    }
                    $menu .= '<hr></div>';

                    echo $var . $menu . "<p class=\"black bold uppercase\">$key</p>"; # imprime o inicio da var e o menu
                    print_r($value);   # imprime o valor da variável
                    echo "</div>";     # fecha a div
                }
            } else {
                echo "Nenhuma variável na sessão.";
            }
            ?>
        </pre>
    </body>
</html>

<?php

