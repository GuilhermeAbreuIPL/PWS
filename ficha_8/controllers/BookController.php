<?php
require_once 'Controller.php';
class BookController extends Controller
{
    public function __construct()
    {
        $this->authenticationFilter();
    }
    public function index()
    {
        $books = Book::all();
        //mostrar a vista index passando os dados por parâmetro

        $this->renderView('book', 'index', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::find($id);
        if (is_null($book)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('book', 'show', ['book' => $book]);
        }
    }

    public function create()
    {
        $this->renderView('book', 'create');
    }

    public function store()
    {
        $book = new Book($this-> getHTTPPost());
        if($book->is_valid()){
            $book->save();
            //redirecionar para o index
            $this->redirectToRoute('book', 'index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('book', 'create', ['book' => $book]);
        }
    }

    public function edit($id)
    {
        $book = Book::find($id);
        if (is_null($book)) {
            //TODO redirect to standard error page

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('book', 'edit', ['book' => $book]);
        }
    }

    public function update($id)
    {
        $book = Book::find($id);
        $book->update_attributes($this-> getHTTPPost());
        if($book->is_valid()){
            $book->save();
            //redirecionar para o index
            $this->redirectToRoute('book', 'index');
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('book', 'edit', ['book' => $book]);
        }
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        //redirecionar para o index
        $this->redirectToRoute('book', 'index');
    }



}