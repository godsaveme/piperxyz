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
}