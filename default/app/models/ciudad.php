<?php

/**
 * Clase para manejar las ciudades, tabla 'ciudad'
 * 
 * PHP version 7.1
 * 
 * @category    App
 * @package     Models
 * @author      Henry Stivens Adarme Muñoz <henry.stivens@gmail.com>
 * @copyright   2017
 */
class Ciudad extends ActiveRecord
{

    /**
     * Lista todas las ciudades de una comuna
     * 
     * @param int $region_id
     * @return array
     */
    public function allByComuna(int $comuna_id)//validación int de PHP7
    {
        return $this->find("comuna_id = $comuna_id", 'order: nombre');
    }
}
