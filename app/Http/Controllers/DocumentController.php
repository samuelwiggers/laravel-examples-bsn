<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index() {
        $documents = Document::all();
        
        return view('documents.index', [
            'documents' => $documents,
            'title' => 'Documentos do Usuário'
        ]);
    }

    // public function show(Document $document) {
    //     return view('documents.show', [
    //         'document' => $document,
    //         'tile' => 'Documento de número - ' . $document->number
    //     ]);
    // }
}
