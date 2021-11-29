<?php
class ComentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8', 'root', '');
    }

    function getComentarios($id){
        $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE idMoto=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getComentariosGenerales(){
        $sentencia = $this->db->prepare("SELECT comentarios.*, usuarios.usuario FROM comentarios INNER JOIN usuarios ON usuarios.id = comentarios.usuario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getComentario($id){
        $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE id=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function deleteComentario($id){
        $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id=?");
        $sentencia->execute(array($id));
    }

    function postComentario($comentario, $puntuacion,$idUsuario, $id_moto){
        $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario, puntuacion,usuario, idMoto) VALUES(?,?,?,?)");
        $sentencia->execute(array($comentario, $puntuacion,$idUsuario, $id_moto));
        return $this->db->lastInsertId();
    }

    function getNombre($id){
        $sentencia = $this->db->prepare("SELECT usuario FROM usuarios WHERE id=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}
?>