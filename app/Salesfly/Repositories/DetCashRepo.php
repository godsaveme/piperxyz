<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\DetCash;

class DetCashRepo extends BaseRepo{
    
    public function getModel()
    {
        
        return new DetCash;
    }

    public function search($q)
    {
        $detCashs =DetCash::with('cashMotive')
                    ->where('cash_id','=', $q)
                    ->paginate(15);
        return $detCashs;
    }

    public function searchTE($q)
    {
        $detCashs =DetCash::with('cashMotive','ticket','concepto')
            ->where('cash_id','=', $q)
            ->paginate(15);
        return $detCashs;
    }

    public function searchSale($q)
    {
        $detCashs =DetCash::with('cashMotive')
                        ->where('cash_id','=', $q)
                        ->where('cashMotive_id','=','1')
                        ->orWhere('cash_id','=', $q)
                        ->where('cashMotive_id','=','14')
                        //->orWhere('cashMotive_id','=','14')
                    ->paginate(15);
        return $detCashs; 
    }
    public function searchSaleTE($q)
    {
        $detCashs =DetCash::with('cashMotive','ticket','concepto')
            //->join('concepto','concepto.id','=','ticket.concepto_id')
            ->where('cash_id','=', $q)
            ->where('cashMotive_id','=','1')
            //->orWhere('cash_id','=', $q)
            //->where('cashMotive_id','=','14')
            //->orWhere('cashMotive_id','=','14')
            ->paginate(15);
        return $detCashs;
    }
    public function searchOrderSale($q)
    {
        $detCashs =DetCash::with('cashMotive')
                        ->where('cash_id','=', $q)
                        ->where('cashMotive_id','=','15')
                        ->orWhere('cash_id','=', $q)
                        ->where('cashMotive_id','=','16')
                        //->orWhere('cashMotive_id','=','14')
                    ->paginate(15);
        return $detCashs;
    }
    public function searchSeparateSale($q)
    {
        $detCashs =DetCash::with('cashMotive')
                        ->where('cash_id','=', $q)
                        ->where('cashMotive_id','=','19')
                        ->orWhere('cash_id','=', $q)
                        ->where('cashMotive_id','=','20')
                        //->orWhere('cashMotive_id','=','14')
                    ->paginate(15);
        return $detCashs;
    }
     
    public function paginate($count){
        $detCashs = DetCash::with('cashMotive');
        return $detCashs->paginate($count);
    } 
   public function compCajaActiva($id){
        $detCashs = DetCash::join('cashes','cashes.id','=','detCash.cash_id')
                          ->where('detCash.id','=',$id)
                          ->select('cashes.estado')
        ->first();
        return $detCashs;
    }


}