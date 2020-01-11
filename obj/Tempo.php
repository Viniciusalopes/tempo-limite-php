<?php

/*
 * ---------------------------------------------------------------------------------------
 * Licença   : MIT - Copyright 2020 Viniciusalopes (Vovolinux) <suporte@vovolinux.com.br>
 * Criado em : 11/01/2020
 * Projeto   : tempo-php
 * Finalidade: Calcular tempo transcorrido
 * ---------------------------------------------------------------------------------------
 */

class Tempo {

    private $agora;
    private $tempo_limite;
    private $ultima_consulta;
    private $tempo_transcorrido;

    function __construct($tempo_limite_em_segundos, $ultima_consulta) {
        $this->setAgora();
        $this->tempo_limite = $tempo_limite_em_segundos;
        $this->ultima_consulta = $ultima_consulta;
        $this->setTempo_transcorrido();
    }

    /**
     * Data e hora atual
     * @return date('Y-m-d H:i:s'); 
     */
    function getAgora() {
        return $this->agora;
    }

    private function setAgora() {
        date_default_timezone_set('America/Sao_Paulo');
        $this->agora = date('Y-m-d H:i:s');
    }

    private function setTempo_transcorrido() {
        $this->tempo_transcorrido = (strtotime($this->agora) - strtotime($this->ultima_consulta));
    }

    function esgotado() {

        return ($this->tempo_transcorrido >= $this->tempo_limite) ? TRUE : FALSE;
    }

    function get() {
        return (object) [
                    'tempo_limite' => $this->tempo_limite,
                    'agora' => $this->agora,
                    'ultima_consulta' => $this->ultima_consulta,
                    'tempo_transcorrido' => $this->tempo_transcorrido,
                    'tempo_esgotado' => $this->esgotado()
        ];
    }

}
