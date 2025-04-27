<?php

namespace App\Http\Controllers;

use App\Note;
use App\Services\Operations;
use App\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MainController extends Controller
{
    public function index(){
        // load users notes
        $id = session('user.id');
        $notes = User::find($id)->notes()->get()->toArray();


        // show home view
        return view('home', ['notes' => $notes]);
    }

    public function newNote(){
        // show new note view 
        return view('new_note');
    }

    public function newNoteSubmit(Request $request){
        //validate request
        $request->validate(
            // rules
           [
            'text_title' => 'required|min:3|max:200',
            'text_note' => 'required|min:3|max:3000',
           ], 
           // error messages
           [
            'text_title.required' => "O título é obrigatório",
            'text_title.min' => "O título deve ter pelo menos :min  caracteres",
            'text_title.max' => "O título deve ter no máximo :max  caracteres",
            'text_note.required' => "A nota é obrigatória",
            'text_note.min' => "A nota deve ter pelo menos :min  caracteres",
            'text_note.max' => "A nota deve ter no máximo :max  caracteres",
           ]
        );

        echo "OK";

        // get user id
        $id = session('user.id');

        // create new note
        $note = new Note();
        $note->user_id = $id;
        $note->title = $request->text_title;
        $note->text = $request->text_note;
        $note->save();

        //redirect to home
        return redirect()->route('home');
    }

    public function editNote($id){

        //$id = $this->decryptId($id);
        $id = Operations::decryptId($id);
        echo "I am editing note with id = $id";
    }

    public function deleteNote($id){
        //$id = $this->decryptId($id);
        $id = Operations::decryptId($id);
        echo "I am deleting note with id = $id";
    }

}
