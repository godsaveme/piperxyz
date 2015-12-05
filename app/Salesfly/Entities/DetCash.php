<?php
namespace Salesfly\Salesfly\Entities;

class DetCash extends \Eloquent {

	protected $table = 'detCash';
    
    protected $fillable = ['fechaTransaccion',
    						'montoCaja',
    						'montoMovimientoTarjeta',
                            'montoMovimientoEfectivo',
    						'montoFinal',
    						'estado',
    						'observacion',
    						'cashMotive_id',
    						'cash_id'];
    public function cashMotive(){
        return $this->belongsTo('Salesfly\Salesfly\Entities\CashMotive','cashMotive_id');
    }
	public function ticket()
	{
		return $this->hasOne('Salesfly\Salesfly\Entities\Ticket','detCash_id');
	}
	public function concepto()
	{
		return $this->belongsToMany('Salesfly\Salesfly\Entities\Concepto', 'ticket', 'detCash_id', 'concepto_id');
	}
}