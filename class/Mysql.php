<?php

/**
 * @data 21/09/2012
 *
 * @author Renant Bernabé
 */
class Mysql
{
    //Variaveis de conexão
    private $_host = 'localhost';
    private $_user = 'usuario';
    private $_pass = 'senha';
    private $_db = 'nome_do_db';

    //Cria a conecção com o servidor mysql
    public function conecta()
    {
        mysql_connect($this->_host, $this->_user, $this->_pass);
        mysql_select_db($this->_db);
        mysql_set_charset('utf8');
    }

    //Destroi a conecção com o servidor mysql
    public function desconecta()
    {
        return mysql_close();
    }

    // ----- Get's & Set's -----
    public function setHost($host)
    {
        $this->_host = $host;
    }

    public function getHost()
    {
        return $this->_host;
    }

    public function setUser($user)
    {
        $this->_user = $user;
    }

    public function getUser()
    {
        return $this->_user;
    }

    public function setPass($pass)
    {
        $this->_pass = $pass;
    }

    public function getPass()
    {
        return $this->_pass;
    }

    public function setDb($db)
    {
        $this->_db = $db;
    }

    public function getDb()
    {
        return $this->_db;
    }
}
