<?php

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $this->renderView('categoria','index', ['categorias' => $categorias]);
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        $this->renderView('categoria', 'show', ['categoria' => $categoria]);
    }

    public function create()
    {
        $this->redirectToRoute('categoria', 'create');
    }
}