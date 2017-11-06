<?php

/**
 * Clase para manejar las regiones, tabla 'region'
 * 
 * PHP version 7.1
 * 
 * @category    App
 * @package     Models
 * @author      Henry Stivens Adarme Muñoz <henry.stivens@gmail.com>
 * @copyright   2017
 */
class Region extends ActiveRecord
{
    /**
     * Lista todas las regiones
     * @return array
     */
    public function all()
    {
        return $this->find('order: nombre');
    }
}
