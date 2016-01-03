<?php
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Concepto;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 29/11/15
 * Time: 05:47 PM
 */

class ConceptoRepo extends BaseRepo{
    public function getModel()
    {
        return new \Salesfly\Salesfly\Entities\Concepto();
    }

    public function search($q)
    {
        $conceptos =Concepto::where('nombre','like', $q.'%')
            ->orWhere('precioUnit','like',$q.'%')
            ->orWhere('descripcion','like',$q.'%')
            //->with(['customer','employee'])
            ->paginate(15);
        return $conceptos;
    }

    public function mostrables()
    {
        $mostrables = Concepto::where('mostrable',1)->get();
        return $mostrables;
    }

    public function noMostrables()
    {
        $noMostrables = Concepto::where('mostrable',0)->get();
        return $noMostrables;
    }

}