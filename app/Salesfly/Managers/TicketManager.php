<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 03/12/15
 * Time: 02:39 PM
 */
namespace Salesfly\Salesfly\Managers;
class TicketManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'fechaPedido'=>'required',
            'precioUnit'=>'required',
            'precioUnitFinal'=>'required',
            'cantidad'=>'required',
            'montoFinal'=>'required',
            'notas'=>'',
            'estado'=>'required',
            'detCash_id' => 'required',
            'concepto_id'=>'required',
            'fechaAnulado'=>'',
            'motivo' => ''
        ];
        return $rules;
    }
}
