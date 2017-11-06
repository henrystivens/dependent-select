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

    public function allByComuna(int $comuna_id)
    {
        return $this->find("comuna_id = $comuna_id", 'order: nombre');
    }
}
