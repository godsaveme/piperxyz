<?php

namespace Salesfly\Salesfly\Managers;

class DetCashManager extends BaseManager{

    public function getRules(){
        $rules = [
            'fechaTransaccion' => 'required',
            'montoCaja' => '',
            'montoMovimientoTarjeta' => '',
            'montoMovimientoEfectivo' => '',
            'montoFinal' => '',
            'estado' => '',
            'observacion' => '',
            'cashMotive_id' => 'required',
            'cash_id' => 'required'           
        ];
        return $rules;
    }
}