<?php
require_once './models/Carro.php';
require_once 'Controller.php';

class CarroController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $this->renderView('carro', 'index', ['user' => $user]);
    }

    public function show($id)
    {
        $carro = Carro::find($id);
        if (is_null($carro)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('carro', 'show', ['carro' => $carro]);
        }
    }

    public function create($id)
    {
        $user = User::find($id);
        $marcas = Marca::all();
        $this->renderView('carro', 'create', ['user' => $user, 'marca' => $marcas]);
    }

    public function store()
    {
        $carro = new Carro($this-> getHTTPPost());
        if($carro->is_valid()){
            $carro->save();
            $this->redirectToRoute('carro', 'index', ['id' => $carro->user_id]);
        } else {
            $this->renderView('carro', 'create', ['carro' => $carro]);
        }

    }

    public function edit($id)
    {
        $carro = Carro::find($id);
        $marcas = Marca::all();
        if (is_null($carro)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('carro', 'edit', ['carro' => $carro , 'marca' => $marcas]);
        }
    }

    public function update($id)
    {
        $carro = Carro::find($id);
        $carro->update_attributes($this-> getHTTPPost());
        if($carro->is_valid()){
            $carro->save();
            $this->redirectToRoute('carro', 'index', ['id' => $carro->user_id]);
        } else {
            $marcas = Marca::all();
            $this->renderView('carro', 'edit', ['carro' => $carro, 'marca' => $marcas]);
        }

    }

    public function delete($id)
    {
        $carro= Carro::find($id);
        $carro->delete();
        $this->redirectToRoute('carro', 'index', ['id' => $carro->user_id ]);
    }

}