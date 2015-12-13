<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 03/12/15
 * Time: 02:14 PM
 */
namespace Salesfly\Salesfly\Repositories;
use Salesfly\Salesfly\Entities\Ticket;

class TicketRepo extends BaseRepo
{

    public function getModel()
    {
        return new Ticket;
    }

    public function searchTickets($q)
    {
        /*$detCashs =Ticket::with('cashMotive','ticket','concepto')
            //->join('concepto','concepto.id','=','ticket.concepto_id')
            ->where('cash_id','=', $q)
            ->where('cashMotive_id','=','1')
            ->orWhere('cash_id','=', $q)
            ->where('cashMotive_id','=','14')
            //->orWhere('cashMotive_id','=','14')
            ->paginate(15);
        return $detCashs;
        */
    }
}