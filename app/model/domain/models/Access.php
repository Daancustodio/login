<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\model\domain\models;

/**
 * Description of Access
 *
 * @author Daniel
 */
class Access {

    private $id = null;
    private $tipo = null;
    private $data = null;
    private $user = null;
    
    function __construct($tipo, $data, $user) {
        $this->tipo = $tipo;
        $this->data = $data;
        $this->user = $user;
    }
    
    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getData() {
        return $this->data;
    }

    function getUser() {
        return $this->user;
    }



}
