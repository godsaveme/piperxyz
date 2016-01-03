<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\ConceptoRepo;
use Salesfly\Salesfly\Managers\ConceptoManager;

use JasperPHP\JasperPHP as JasperPHP;

class ConceptosController extends Controller {

    protected $conceptoRepo;

    public function __construct(ConceptoRepo $conceptoRepo)
    {
        $this->conceptoRepo = $conceptoRepo;
    }

    public function index()
    {
        return View('conceptos.index');
    }

    public function all()
    {
        //$brands = $this->brandRepo->paginate(15);
        //return response()->json($brands);
        //var_dump($brands);
        $conceptos = $this->conceptoRepo->all();
        return response()->json($conceptos);
    }

    public function conceptosmostrables()
    {
        $conceptosMostrables = $this->conceptoRepo->mostrables();
        return response()->json($conceptosMostrables);
    }
    public function conceptosNoMostrables()
    {
        $conceptosNoMostrables = $this->conceptoRepo->noMostrables();
        return response()->json($conceptosNoMostrables);
    }

    public function paginatep(){
        $conceptos = $this->conceptoRepo->paginate(15);
        return response()->json($conceptos);
    }


    public function form_create()
    {
        return View('conceptos.form_create');
    }

    public function form_edit()
    {
        return View('conceptos.form_edit');
    }

    public function create(Request $request)
    {
        //var_dump($request->all()); die();
        $concepto = $this->conceptoRepo->getModel();

        if($request->input('concepto') == 'otro') {

            $request->merge(array('nombre' => $request->input('nuevoConcepto')));
            $request->merge(array('precioUnit' => 5));
            $request->merge(array('descripcion' => ''));
            $request->merge(array('mostrable' => 0));
            $manager = new ConceptoManager($concepto,$request->only('nombre','precioUnit','descripcion','mostrable'));

            $manager->save();
            return response()->json(['estado'=>true, 'data' => $concepto]);
        }else{
            //var_dump($request->all()); die();
            $manager = new ConceptoManager($concepto,$request->all());
            $manager->save();
            return response()->json(['estado'=>true]);

        }

    }

    /*public function createN(Request $request)
    {
        $concepto = $this->conceptoRepo->getModel();
        //var_dump($request->all());
        //die();
        $manager = new ConceptoManager($concepto,$request->all());
        //print_r($manager); die();
        $manager->save();
        //Event::fire('update.store',$store->all());

        return response()->json(['estado'=>true]);
    }*/

    public function find($id)
    {
        $concepto = $this->conceptoRepo->find($id);
        return response()->json($concepto);
    }

    public function edit(Request $request)
    {
        $concepto = $this->conceptoRepo->find($request->id);
        //var_dump($brand);
        //die(); 
        $manager = new ConceptoManager($concepto,$request->all());
        $manager->save();

        //Event::fire('update.brand',$brand->all());
        return response()->json(['estado'=>true]);
    }

    public function destroy(Request $request)
    {
        $concepto= $this->conceptoRepo->find($request->id);
        $concepto->delete();
        //Event::fire('update.brand',$brand->all());
        return response()->json(['estado'=>true]);
    }

    public function search($q)
    {
        //$q = Input::get('q');
        $conceptos = $this->conceptoRepo->search($q);

        return response()->json($conceptos);
    }
    public function validaBrandname($text){

        $conceptos = $this->conceptoRepo->validarNoRepit($text);

        return response()->json($conceptos);
    }
    public function generateReporteConceptos(Request $request)
    {

        //return $ff;
        //var_dump(substr($request->input('fechaInicio'),0,10)); die();

        $database = \Config::get('database.connections.mysql');
        $time=time();
        $output = public_path() . '/report/'.$time.'_reportConceptos';

        $fechaInic = substr($request->input('fechaInicio'),0,10);
        $fechaFin = substr($request->input('fechaFin'),0,10);
        $conceptos = $request->input('conceptos');
        //var_dump($fechaFin); die();

        $ext = "pdf";

        //var_dump($fechaFin);
        //var_dump($fechaInic);
        //var_dump($conceptos);
        //die();


        $salida = \JasperPHP::process(
            public_path() . '/report/rptCon.jasper',
            $output,
            array($ext),
            //array(),
            //while($i<=3){};
            ['fechaInic' => $fechaInic,
                'fechaFin' => $fechaFin,
                'conceptos' => $conceptos],//Parametros

            $database,
            false,
            false
        )->execute();

        //return $salida;

        return '/report/'.$time.'_reportConceptos.'.$ext;

        /*$output = \JasperPHP::list_parameters(
            public_path() . '/report/rptConceptos.jasper'
        )->execute();

        foreach($output as $parameter_description)
            var_dump( $parameter_description);*/

    }
}