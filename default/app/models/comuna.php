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

    /**
     * Lista todas las comunas de una región
     * 
     * @param int $region_id
     * @return array
     */
    public function allByRegion(int $region_id)//validación int de PHP7
    {
        return $this->find("region_id = $region_id", 'order: nombre');
    }
}
