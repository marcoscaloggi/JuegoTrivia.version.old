<?php

class Usuarios
{
  private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $nombre_usuario;
    private $foto_perfil;
    private $pass;
    private $experiencia;
    private $level;
    private $tipo;

    public function __construct($nombre, $apellido, $email, $nombre_usuario, $foto_perfil, $pass)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->pass = $pass;
        $this->nombre_usuario = $nombre_usuario;
        $this->foto_perfil = $foto_perfil;
        $this->experiencia = 0;
        $this->level = 1;
        $this->tipo = 'jugador';
    }
    public function setId($id)
    {
        $this->id= $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setNombre($nombre)
    {
        $this->nombre= $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setApellido($apellido)
    {
        $this->nombre= $nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setEmail($email)
    {
        $this->nombre= $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPass($pass)
    {
        $this->nombre= $pass;
    }
    public function getPass()
    {
        return $this->pass;
    }
    public function setNombre_usuario($nombre_usuario)
    {
        $this->nombre= $nombre_usuario;
    }
    public function getNombre_usuario()
    {
        return $this->nombre_usuario;
    }
    public function setFoto_perfil($foto_perfil)
    {
        $this->nombre= $foto_perfil;
    }
    public function getFoto_perfil()
    {
        return $this->foto_perfil;
    }
    public function setExperiencia($experiencia)
    {
        $this->nombre= $experiencia;
    }
    public function getExperiencia()
    {
        return $this->experiencia;
    }
    public function setLevel($level)
    {
        $this->nombre= $level;
    }
    public function getLevel()
    {
        return $this->level;
    }
    public function setTipo($tipo)
    {
        $this->tipo= $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
}
