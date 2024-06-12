<?php

require_once './models/Marca.php';
require_once 'Controller.php';

class MarcaController extends Controller
{

    public function index()
    {
        $marcas = Marca::all();
        $this->renderView('marca', 'index', ['marcas' => $marcas]);
    }

    public function show($id)
    {
        $marca = Marca::find($id);
        if (is_null($marca)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('marca', 'show', ['marca' => $marca]);
        }
    }

    public function create()
    {
        $this->renderView('marca', 'create');
    }

    public function store()
    {
        $marca = new Marca($this-> getHTTPPost());
        if($marca->is_valid()){
            $marca->save();
            $this->redirectToRoute('marca', 'index');
        } else {
            $this->renderView('marca', 'create', ['marca' => $marca]);
        }

    }

    public function edit($id)
    {
        $marca = Marca::find($id);
        if (is_null($marca)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('marca', 'edit', ['marca' => $marca]);
        }
    }

    public function update($id)
    {
        $marca = Marca::find($id);
        $marca->update_attributes($this-> getHTTPPost());
        if($marca->is_valid()){
            $marca->save();
            $this->redirectToRoute('marca', 'index');
        } else {
            $this->renderView('marca', 'edit', ['marca' => $marca]);
        }
    }

    public function delete($id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        $this->redirectToRoute('marca', 'index');
    }
}