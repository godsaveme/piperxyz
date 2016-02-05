<?php
namespace Salesfly\Salesfly\Entities;
use Illuminate\Database\Eloquent\Model;

class Ticket extends \Eloquent {

    protected $table = 'ticket';

    protected $fillable = [
        'fechaPedido',
        'precioUnit',
        'precioUnitFinal',
        'cantidad',
        'montoFinal',
        'bungalow',
        'notas',
        'estado',
        'detCash_id',
        'concepto_id',
        'fechaAnulado',
        'motivo'
    ];

    public function concepto()
    {
        return $this->belongsTo('Salesfly\Salesfly\Entities\Concepto','concepto_id');
    }


}