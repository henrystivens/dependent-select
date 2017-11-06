<?php

/**
 * Clase para manejar las comunas, tabla 'comuna'
 * 
 * PHP version 7.1
 * 
 * @category    App
 * @package     Models
 * @author      Henry Stivens Adarme Muñoz <henry.stivens@gmail.com>
 * @copyright   2017
 */
class Comuna extends ActiveRecord
{

    public function buscar(int $region_id)
    {
        return $this->find("region_id = $region_id", 'order: nombre');
    }
}
