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
    private $codigo;
    private $cpf;
    Private $email;
    Private $endereco;
    private $numero;
    private $bairro;
    private $municipio;
    private $uf;
    private $cep;

    public $tabClientes;


    function __construct()
    {

        $this->tabClientes = array(
            array('codigo' => 1, 'nome' => 'Alexandre', 'idade' => '65', 'sexo' => 'M', 'CPF' => '44075510972', 'endereco'=> 'Rua das Flores', 'numero' => 123,'bairro' => 'Centro', 'municipio' => 'Florianópolis', 'uf'=> 'SC', 'CEP' => '88020-240', 'email' => 'sergiomatosmartins@gmail.com'),
            array('codigo' => 2, 'nome' => 'Maria', 'idade' => '65', 'sexo' => 'F', 'CPF' => '44075510972', 'endereco'=> 'Rua das Flores', 'numero' => 123,'bairro' => 'Centro', 'municipio' => 'Florianópolis', 'uf'=> 'SC', 'CEP' => '88020-240', 'email' => 'sergiomatosmartins@gmail.com'),
            array('codigo' => 3, 'nome' => 'Joaquim', 'idade' => '65', 'sexo' => 'M', 'CPF' => '44075510972', 'endereco'=> 'Rua das Flores', 'numero' => 123,'bairro' => 'Centro', 'municipio' => 'Florianópolis', 'uf'=> 'SC', 'CEP' => '88020-240', 'email' => 'sergiomatosmartins@gmail.com'),
            array('codigo' => 4, 'nome' => 'Carlos', 'idade' => '65', 'sexo' => 'M','CPF' => '44075510972', 'endereco'=> 'Rua das Flores', 'numero' => 123,'bairro' => 'Centro', 'municipio' => 'Florianópolis', 'uf'=> 'SC', 'CEP' => '88020-240', 'email' => 'sergiomatosmartins@gmail.com'),
            array('codigo' => 5, 'nome' => 'Zenaide', 'idade' => '65', 'sexo' => 'F', 'CPF' => '44075510972', 'endereco'=> 'Rua das Flores', 'numero' => 123,'bairro' => 'Centro', 'municipio' => 'Florianópolis', 'uf'=> 'SC', 'CEP' => '88020-240', 'email' => 'sergiomatosmartins@gmail.com'),
            array('codigo' => 6, 'nome' => 'Carla', 'idade' => '65', 'sexo' => 'F', 'CPF' => '44075510972', 'endereco'=> 'Rua das Flores', 'numero' => 123,'bairro' => 'Centro', 'municipio' => 'Florianópolis', 'uf'=> 'SC', 'CEP' => '88020-240', 'email' => 'sergiomatosmartins@gmail.com')

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

    function pegaIndice($codigo)
    {
        
        if($codigo) {
            return $indice = array_search($codigo, array_column($this->tabClientes, 'codigo'));
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

    function getEndereco($linha)
    {
        return $this->tabClientes[$linha]['endereco'];
    }

    function getNumero($linha)
    {
        return $this->tabClientes[$linha]['numero'];
    }

    function getBairro($linha)
    {
        return $this->tabClientes[$linha]['bairro'];
    }

    function getMunicipio($linha)
    {
        return $this->tabClientes[$linha]['municipio'];
    }

    function getUF($linha)
    {
        return $this->tabClientes[$linha]['uf'];
    }

    function getCEP($linha)
    {
        return $this->tabClientes[$linha]['CEP'];
    }

    function getEmail($linha)
    {
        return $this->tabClientes[$linha]['email'];
    }

}
