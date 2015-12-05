<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\CashRepo;
use Salesfly\Salesfly\Managers\CashManager;

class CashesController extends Controller
{
    protected $cashRepo;

    public function __construct(CashRepo $cashRepo)
    {
        $this->cashRepo = $cashRepo;
    }

    public function all()
    {
        $cashes = $this->cashRepo->paginate(15);
        return response()->json($cashes);
        //var_dump($materials);
    }

    public function paginatep(){
        $cashes = $this->cashRepo->paginate(15);
        return response()->json($cashes);
    }

    public function find($id)
    {
        $cash = $this->cashRepo->find($id);

        $cash->montoBruto = $this->cashRepo->calculateMontoBruto($id);
        return response()->json($cash);
    }

    public function search($q)
    {
        $cashes = $this->cashRepo->search($q);

        return response()->json($cashes);
    }

    public function index()
    {
        return View('cashes.index');
    }

    public function form_create()
    {
        return View('cashes.form_create');
    }
    public function form_edit()
    {
        return View('cashes.form_edit');
    }
    public function create(Request $request)
    {
        $cash = $this->cashRepo->getModel();

        $manager = new CashManager($cash,$request->all());
        $manager->save();

        return response()->json(['estado'=>true, 'nombre'=>$cash->fechaInicio]);
    }
    public function edit(Request $request)
    {
        //var_dump($request->all()); die();
        $cash = $this->cashRepo->find($request->id);

        $cantidadTickets = \DB::table('ticket')
                            ->join('detCash','ticket.detCash_id','=','detCash.id')
                            ->where('cash_id',$request->id)
                            ->count('ticket.id');

        //var_dump($cantidadTickets); die();

        $cantidadPersonas = \DB::table('ticket')
            ->join('detCash','ticket.detCash_id','=','detCash.id')
            ->where('cash_id',$request->id)
            ->sum('ticket.cantidad');

        //var_dump($cantidadPersonas); die();

        $montoMovimientoEfectivo = \DB::table('detCash')
            ->where('cash_id',$request->id)
            ->sum('montoMovimientoEfectivo');

        $montoBruto = $montoMovimientoEfectivo + $cash->montoInicial; //aqui sumo los ingresos y egresos

        if($montoBruto == $request->montoBruto){
            $manager = new CashManager($cash,$request->all());
            $manager->save();
            return response()->json(['estado'=>true, 'nombre'=>$cash->nombre]);
        }else{
            return response()->json(['estado'=>false, 'msje'=>'Monto Bruto no coincide con el calculado en este instante.']);
        }

    }

    public function printCash($cash_id){
        $oCash = Cash::find($cash_id);



        $this->generateResumePaper($oCash);
        //var_dump($openCash->cashHeader->msje); die();
        return response()->json(['estado'=>true, 'nombre'=>$oCash->nombre]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function generateResumePaper($oCash){
        $txt = '<?php require_once(dirname(__FILE__) . "/escpos-php-master/Escpos.php");
							//$logo = new EscposImage("images/productos/tostao.jpg");
							$printer = new Escpos();
							/* Print top logo */
                            $printer -> setJustification(Escpos::JUSTIFY_CENTER);
                            //$printer -> graphics($logo);
							$printer -> selectPrintMode(Escpos::MODE_DOUBLE_WIDTH);
							$printer -> text("'.$openCash->cashHeader->msje.'");
							$printer -> feed();
							$printer -> selectPrintMode();
							$printer -> setJustification(Escpos::JUSTIFY_LEFT);
							$printer -> feed();
							$printer -> text("Ticket N°: '.$oTicket->id.'");
							$printer -> feed();
							$printer -> text("Fecha y Hora: '.$oTicket->fechaPedido.'\n");
							$printer -> text("------------------------------------------\n");
							$printer -> text("Concepto: ");
                            $printer -> text("'.$oTicket->concepto->nombre.'");
                            $printer -> feed();
                            $printer -> text("Precio Unit. S/.: ");
                            $printer -> text("'.$oTicket->precioUnitFinal.'");
                            $printer -> feed();
                            $printer -> text("Cantidad: ");
                            $printer -> text("'.$oTicket->cantidad.'");
                            $printer -> feed();
                            $printer -> text("TOTAL S/.: ");
                            $printer -> text("'.number_format($oTicket->montoFinal,2).'");
                            $printer -> feed();


							$printer -> text("------------------------------------------\n");';



        //$txt .= '$printer -> text("------------------------------------------------\n");';
        //$txt .= '$printer -> text("Boleta[] Factura[] / Consumo[] Detall.[]\n");';
        $txt .= '$printer -> text("Nombres/Rzon Soc.:________________________\n");';
        $txt .= '$printer -> text("Direcc.:__________________________________\n");';
        $txt .= '$printer -> text("DNI/RUC.:_________________________________\n");';
        $txt .= '$printer -> feed();';
        $txt .= '$printer -> text("Fecha de Impr.: '.date("d-m-Y").' '.date("H:i:s").'\n");';
        $txt .= '$printer -> text("<<No válido como documento contable>>\n");';
        $txt .= '$printer -> feed();';
        $txt .= '$printer -> cut();';
        $txt .= '$printer -> close();';

        $myfile = fopen("../resources/ticket.php", "w") or die("Unable to open file!");
        fwrite($myfile, $txt);
        fclose($myfile);
        $cmd = 'php '.base_path("/resources/").'ticket.php  > '.base_path("resources/").'ticket.txt';
        //$cmd = 'lpr -P Photosmart-Plus-B209a-m /var/www/html/4Rest/public/newfile.php';
        shell_exec($cmd);//exec('sudo -u myuser ls /');

        $cmd2 = 'lpr -P '.$openCash->cashHeader->printerName.' -o raw '.base_path("resources/").'ticket.txt';
        shell_exec($cmd2);

        return response()->json('true');
    }


}
