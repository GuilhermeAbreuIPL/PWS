<?php
require_once 'Controller.php';

class ContaController extends Controller
{
    public function index()
    {
        $contas = Conta::all();
        $this->renderView('conta', 'index', ['contas' => $contas]);
    }

    public function show($id)
    {
        $conta = Conta::find($id); // Note the lowercase 'f' in 'find'
        if (is_null($contas)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('conta', 'show', ['conta' => $conta]);
        }
    }

    public function edit($id)
    {
        $conta = Conta::find($id);
        if (is_null($conta)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('conta', 'edit', ['conta' => $conta]);
        }
    }

    public function update($id)
    {
        $conta = Conta::find($id);
        $conta->update_attributes($this->getHTTPPost());
        if ($conta->is_valid()) {
            $conta->save();
            // Redirect to index
            $this->redirectToRoute('conta', 'index');
        } else {
            // Show edit view passing the model as parameter
            $this->renderView('conta', 'edit', ['conta' => $conta]);
        }
    }

    public function create()
    {
        $this->renderView('conta','create');
    }

    public function store()
    {
        $conta = new Conta($this->getHTTPPost());
        if ($conta->is_valid()){
            $conta->save();
            $this->redirectToRoute('conta','index');
        }
        else{
            $this->renderView('conta', 'create', ['conta' => $conta]);
        }

    }

    public function delete($id)
    {
        $conta = Conta::find($id);
        $conta->delete();
        $this->redirectToRoute('conta', 'index');
    }
}
