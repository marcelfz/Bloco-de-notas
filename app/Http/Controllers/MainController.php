<?php

namespace App\Http\Controllers;

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
        echo "I am creating a new note";
    }

    public function editNote($id){

        try{
            $id = Crypt::decrypt($id);
        }catch(DecryptException $e){
            return redirect()->route('home');
        }

        
        echo "I am editing note with id = $id";
    }

    public function deleteNote($id){

        try{
            $id = Crypt::decrypt($id);
        }catch(DecryptException $e){
            return redirect()->route('home');
        }

        
        echo "I am deleting note with id = $id";
    }


}
