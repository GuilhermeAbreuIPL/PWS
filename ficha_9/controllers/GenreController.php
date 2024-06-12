<?php

class GenreController extends Controller
{
    public function index(){
        $genre = Genre::all();
        $this->renderView('genre', 'index', ['genres' => $genre]);
    }

    public function show($id)
    {
        $genre = Genre::find($id);
        if (is_null($genre)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('genre', 'show', ['genre' => $genre]);
        }
    }

    public function create()
    {
        $this->renderView('genre', 'create');
    }

    public function store()
    {
        $genre = new Genre($this-> getHTTPPost());
        if($genre->is_valid()){
            $genre->save();
            $this->redirectToRoute('genre','index');
        } else {
            $this->renderView('genre', 'create', ['genre'=>$genre]);
        }
    }


    public function delete($id)
    {
        $book = Book::find_by_genre_id($id);


        if (is_null($book)){
            $genre = Genre::find($id);
            $genre->delete();
            //redirecionar para o index do chapter
            $this->redirectToRoute('genre', 'index');
        }
        else{
            $genre = Genre::all();
            $error="O genero que tentou eliminar tem livros associados!";
            $this->renderView('genre', 'index', ['error' => $error, 'genres' => $genre]);
        }
    }

    public function edit($id)
    {
        $genre = Genre::find($id);
        if (is_null($genre)) {
            //TODO redirect to standard error page

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('genre', 'edit', ['genre' => $genre]);
        }
    }

    public function update($id)
    {
        $genre = Genre::find($id);
        $genre->update_attributes($this-> getHTTPPost());
        if($genre->is_valid()){
            $genre->save();
            //redirecionar para o index
            $this->redirectToRoute('genre', 'index');
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('genre', 'edit', ['genre' => $genre]);
        }
    }
}