<?php
require_once 'Controller.php';
class ChapterController extends Controller
{

    public function index($id){
        $book = Book::find($id);
        $this->renderView('chapter', 'index', ['book' =>
            $book]);
    }

    public function show($id)
    {
        $chapter = Chapter::find($id);
        if (is_null($chapter)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('chapter', 'show', ['chapter' => $chapter]);
        }
    }

    public function create($id)
    {
        $book = Book::find($id);
        $this->renderView('chapter', 'create',['book' => $book , 'id' =>
            $id]);
    }

    public function store()
    {
        $chapter = new Chapter($this-> getHTTPPost());
        if($chapter->is_valid()){
            $chapter->save();
            $this->redirectToRoute('chapter','index',['id'=>$chapter->book_id]);
        } else {
            $this->renderView('chapter', 'create', ['chapter'=>$chapter]);
        }
    }


    public function delete($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();
        //redirecionar para o index do chapter
        $this->redirectToRoute('chapter', 'index', ['id' => $chapter->book_id]);

    }

    public function edit($id)
    {
        $chapter = Chapter::find($id);
        if (is_null($chapter)) {
            //TODO redirect to standard error page

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('chapter', 'edit', ['chapter' => $chapter]);
        }
    }

    public function update($id)
    {
        $chapter = Chapter::find($id);
        $chapter->update_attributes($this-> getHTTPPost());
        if($chapter->is_valid()){
            $chapter->save();
            //redirecionar para o index
            $this->redirectToRoute('chapter', 'index', ['book_id' => $id]);
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('chapter', 'edit', ['chapter' => $chapter]);
        }
    }
}