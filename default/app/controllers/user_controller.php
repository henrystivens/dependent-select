<?php

/**
 * Controlador para las acciones y vistas con el usuario
 */
class UserController extends AppController
{

    public function index()
    {
        
    }

    public function create()
    {
        //se verifica si se ha enviado via POST los datos
        if (Input::hasPost('user')) {
            //
        }
    }

    public function getComunas()
    {
        //No es necesario el template
        View::template(null);
        //Carga la variable $region_id en la vista
        $this->region_id = Input::post('region_id');
    }

    public function getCiudades()
    {
        //No es necesario el template
        View::template(null);
        //Carga la variable $comuna_id en la vista
        $this->comuna_id = Input::post('comuna_id');
    }
}
