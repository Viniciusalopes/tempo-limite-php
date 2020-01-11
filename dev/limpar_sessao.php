<?php

/* 
 * ---------------------------------------------------------------------------------------
 * Licença   : MIT - Copyright 2020 Viniciusalopes (Vovolinux) <suporte@vovolinux.com.br>
 * Criado em : 11/01/2020
 * Projeto   : tempo-limite-php
 * Finalidade: Limpar variáveis de sessão
 * ---------------------------------------------------------------------------------------
 */

require_once '../bin/sessao.php';
session_destroy();
clearstatcache();
header('location: ../dev/_sessao.php');
