<?php
namespace Salesfly\Salesfly\Entities;

/**
 * Created by PhpStorm.
 * User: javier
 * Date: 29/11/15
 * Time: 05:43 PM
 */

class Concepto extends \Eloquent {

    protected $table = 'concepto';

    protected $fillable = [
        'nombre',
        'precioUnit',
        'descripcion',
        'mostrable',
    ];
}