<?php
require_once './model/tipoMotoModel.php';
require_once './view/tipoMotoView.php';

class TipoMotoController
{

    private $view;
    private $model;
    private $authHelper;

    function getTiposMotos()
    {
        $tiposMotos = $this->model->listTipoMoto();
        $this->view->showTipoMotos($tiposMotos, "No se puede borrar");
    }

    function __construct()
    {
        $this->view = new TipoMotoView();
        $this->model = new TipoMotoModel();
        $this->authHelper = new AuthHelper();
    }


    function insertTipoMoto()
    {
        $this->authHelper->checkLoggedIn(true);
       if(!empty($_REQUEST['terreno'])){
        $this->model->postTipoMoto( $_POST['terreno']);
        header("Location: ". TIPOS);
        } else{
            $this->view->showError("Necesita ingresar un terreno para insertar");
        }
    }

    function editarTipoMoto($params = null)
    {
        $this->authHelper->checkLoggedIn(true);
        $id = $params[':ID'];
        $terreno = $_POST['terreno'];
        if(!empty($id) && !empty($terreno)){
        $this->model->editTipoMoto($id, $terreno);
        header("Location: ". TIPOS);
        }else{
            $this->view->showError("Necesita ingresar un terreno para editar");
        }
    }

    function eliminarTipoMoto($params = null)
    {
        $this->authHelper->checkLoggedIn(true);
        $id = $params[':ID'];
        try {
            $this->model->DeleteTipoMotoPorID($id);
        } catch(Exception $e){
            echo $e;
        }
        header("Location: ". TIPOS);
    }

      function goToEditTipo($params = null)
    {
        $id = $params[':ID'];
        $this->authHelper->checkLoggedIn(true);
        $this->view->showFormularioEditTipo($id);
    }
}
