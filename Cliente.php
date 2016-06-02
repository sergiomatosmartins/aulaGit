<?php

/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 30/05/2016
 * Time: 08:28
 */
// definicao da classe Cliente

require_once "Pessoa.php";

class Cliente extends Pessoa
{
    public $codigo;
    public $cpf;
    public $tabClientes;


    function __construct()
    {

        $this->tabClientes = array(
            array('codigo' => 1, 'nome' => 'Alexandre', 'idade' => '65', 'sexo' => 'M', 'CPF' => '44075510972'),
            array('codigo' => 2, 'nome' => 'Maria', 'idade' => '65', 'sexo' => 'F', 'CPF' => '44075510972'),
            array('codigo' => 3, 'nome' => 'Joaquim', 'idade' => '65', 'sexo' => 'M', 'CPF' => '44075510972'),
            array('codigo' => 4, 'nome' => 'Carlos', 'idade' => '65', 'sexo' => 'M','CPF' => '44075510972'),
            array('codigo' => 5, 'nome' => 'Zenaide', 'idade' => '65', 'sexo' => 'F', 'CPF' => '44075510972'),
            array('codigo' => 6, 'nome' => 'Carla', 'idade' => '65', 'sexo' => 'F', 'CPF' => '44075510972')

        );

        

    }
    
    function ordenaTabClientes($ordem)
    {
        //sort($tabClientes);
        if($ordem == "D") {
            rsort($this->tabClientes);
        }else {
            sort($this->tabClientes);
        }
    }
    
    function getTabClientes()
    {
        return $this->tabClientes;
    }

    function getCodigo($linha)
    {
       return $this->tabClientes[$linha]['codigo'];
    }

    function getNome($linha)
    {
        return $this->tabClientes[$linha]['nome'];
    }

    function getIdade($linha)
    {
        return $this->tabClientes[$linha]['idade'];
    }

    function getSexo($linha)
    {
        return $this->tabClientes[$linha]['sexo'];
    }

    function getCPF($linha)
    {
        return $this->tabClientes[$linha]['CPF'];
    }



}
