<?php
require_once 'Controller.php';
require_once './models/Conta.php';
require_once './models/Categoria.php';
require_once './models/Metodopagamento.php';
use Carbon\Carbon;
class DespesaController extends Controller
{
    public function index($id)
    {
        $conta = Conta::find($id);
        $this->renderView('despesa', 'index', ['conta' => $conta]);
    }

    public function show($id)
    {
        $despesa = Despesa::find($id);
        $this->renderView('despesa', 'show', ['despesa' => $despesa]);
    }

    public function create($id)
    {
        $conta = Conta::find($id);
        $categorias = Categoria::all();
        $metodopagamentos = Metodopagamento::all();
        $this->renderView('despesa', 'create', ['conta' => $conta,
            'categorias' => $categorias,
            'metodopagamentos' => $metodopagamentos]);
    }

    public function store()
    {
        $despesa = new Despesa($this->getHTTPPost());
        $despesa->data = Carbon::now();
        if ($despesa->is_valid()){
            $despesa->Save();
            $this->redirectToRoute('despesa', 'index', ['id' => $despesa->conta_id]);
        }
        else{
            $this->renderView('despesa', 'create', ['despesa' => $despesa]);
        }
    }

    public function delete($id)
    {
        $despesa = Despesa::find($id);
        $despesa->delete();
        $this->redirectToRoute('despesa', 'index', ['id' => $despesa->conta_id]);
    }

    public function edit($id)
    {
        $despesa = Despesa::find($id);
        $categorias = Categoria::all();
        $metodopagamentos = Metodopagamento::all();
        $this->renderView('despesa', 'edit', ['categorias' => $categorias,
            'metodopagamentos' => $metodopagamentos ,
            'despesa' => $despesa]
        );
    }

    public function update($id)
    {
        $despesa = Despesa::find($id);
        $despesa->update_attributes($this->getHTTPPost());
        if ($despesa->is_valid()){
            $despesa->save();
            $this->redirectToRoute('despesa', 'index', ['id' => $despesa->conta_id]);
        }
        else{
            $categorias = Categoria::all();
            $metodopagamentos = Metodopagamento::all();
            $this->renderView('despesa', 'edit', ['categorias' => $categorias,
                    'metodopagamentos' => $metodopagamentos ,
                    'despesa' => $despesa]
            );
        }
    }
}