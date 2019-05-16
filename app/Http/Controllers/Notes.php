<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Illuminate\Support\Facades\Auth;

class Notes extends Controller
{
    public function create(Request $req){
        $note = new Note;
        $note->user = Auth::id();
        $note->title = $req->title;
        $note->category = $req->category;
        $note->description = $req->description;
        $note->save();
        return redirect('view');
    }

    public function edit(Request $req){
        $note = Note::find($req->id);
        $note->title = $req->title;
        $note->description = $req->description;
        $note->save();
        return redirect('view');
        
    }
}
