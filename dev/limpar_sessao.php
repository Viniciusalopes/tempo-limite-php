<?php

/* 
 * ---------------------------------------------------------------------------------------
 * Licença   : MIT - Copyright 2020 Viniciusalopes (Vovolinux) <suporte@vovolinux.com.br>
 * Criado em : 11/01/2020
 * Projeto   : tempo-php
 * Finalidade: 
 * ---------------------------------------------------------------------------------------
 */

require_once '../bin/sessao.php';
session_destroy();
clearstatcache();
header('location: ../dados/_sessao.php');
