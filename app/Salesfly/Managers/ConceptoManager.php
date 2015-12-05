<?php
namespace Salesfly\Salesfly\Managers;

/**
 * Created by PhpStorm.
 * User: javier
 * Date: 29/11/15
 * Time: 05:45 PM
 */
class ConceptoManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'nombre' => 'required',
            'precioUnit' => 'required',
            'descripcion' => '',
            'mostrable' => 'required'

        ];
        return $rules;
    }
}
