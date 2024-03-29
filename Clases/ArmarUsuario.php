<?php
class armarUsuario
{
    public function armarImagen($imagen)
    {
      // echo "Estoy en armar imagen";
        // Aca boy a guardar el nombre con el que el usuario subio su archivo en la variable nombre para despues, utilizando la funcion pathinfo poder extraer la extension del archivo.
        $nombre = $_FILES["imagen"]["name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
        // En la variable $archivoOrigen voy a guardar el archivo temporal en donde se encuentra guardada mi imagen en mi servidor.
        $archivoOrigen = $_FILES["imagen"]["tmp_name"];

        // La variable $rutaDestino va a contener toda la ruta hasta la carpeta donde guardaremos la imagen que suba el usuario.
        // La funcion dirname(__FILE__) nos va a devolver la ruta exacta hasta el lugar donde esta el archivo que estamos utilizando en este momento.
        // A esa ruta le agregué la carpeta fotos que va a ser la carpeta donde se guardaran estas imagenes
        $rutaDestino = dirname(__DIR__);
        $rutaDestino = $rutaDestino."/fotos/";

        // Utilizando la funcion uniqid() php va a crearle un nombre unico a mi imagen
        $nombreImg = uniqid();

        // En esta parte voy a guardar la ruta final de mi archivo que va a ser la ruta hastala carpeta fotos y ahi voy a ponerle el nombre creado en el paso anterios y ponerle la extension del archivo que la separe en los primeros pasos.
        $rutaDestino = $rutaDestino.$nombreImg.".".$ext;

        // Voy a subir el archivo que se encuentra en el tmp_name(que se guardo en la variable $archivoOrigen) en la ruta final creada en el paso anterior.
        move_uploaded_file($archivoOrigen, $rutaDestino);

        // La funcion retornara el nombre final de la imagen con su extension.
        return $nombreImg.".".$ext;
    }



    public function armarUser($datos, $imagen)
    {
        $contraHash = password_hash($datos["contrasenia"], PASSWORD_DEFAULT);
        $usuario = new Usuarios($datos["nombre"], $datos["apellido"], $datos["email"], $datos["nombreUser"], $imagen, $contraHash);
        
        return $usuario;
    }
}
