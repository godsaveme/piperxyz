<?php

namespace Salesfly\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Salesfly\Salesfly\Repositories\ConceptoRepo;
use Salesfly\Salesfly\Managers\ConceptoManager;

class ConceptosController extends Controller {

    protected $conceptoRepo;

    public function __construct(ConceptoRepo $conceptoRepo)
    {
        $this->conceptoRepo = $conceptoRepo;
    }

    public function index()
    {
        return View('brands.index');
    }

    public function all()
    {
        $brands = $this->brandRepo->paginate(15);
        return response()->json($brands);
        //var_dump($brands);
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
        $brands = $this->brandRepo->paginate(15);
        return response()->json($brands);
    }


    public function form_create()
    {
        return View('brands.form_create');
    }

    public function form_edit()
    {
        return View('brands.form_edit');
    }

    public function create(Request $request)
    {
        $concepto = $this->conceptoRepo->getModel();

        $request->merge(array('nombre' => $request->input('nuevoConcepto') ));
        $request->merge(array('precioUnit' => 5 ));
        $request->merge(array('descripcion' => '' ));
        $request->merge(array('mostrable' => 0 ));

        $manager = new ConceptoManager($concepto,$request->only('nombre','precioUnit','descripcion','mostrable'));

        $manager->save();

        return response()->json(['estado'=>true, 'data' => $concepto]);
    }

    public function find($id)
    {
        $brand = $this->brandRepo->find($id);
        return response()->json($brand);
    }

    public function edit(Request $request)
    {
        $brand = $this->brandRepo->find($request->id);
        //var_dump($brand);
        //die(); 
        $manager = new BrandManager($brand,$request->all());
        $manager->save();

        //Event::fire('update.brand',$brand->all());
        return response()->json(['estado'=>true, 'nombre'=>$brand->nombre]);
    }

    public function destroy(Request $request)
    {
        $brand= $this->brandRepo->find($request->id);
        $brand->delete();
        //Event::fire('update.brand',$brand->all());
        return response()->json(['estado'=>true, 'nombre'=>$brand->nombre]);
    }

    public function search($q)
    {
        //$q = Input::get('q');
        $brands = $this->brandRepo->search($q);

        return response()->json($brands);
    }
    public function validaBrandname($text){

        $brands = $this->brandRepo->validarNoRepit($text);

        return response()->json($brands);
    }
}