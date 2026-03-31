<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::orderBy('id', 'desc')->get();
        return view('documents.index', compact('documents'));
    }

    public function create()
    {
        return view('documents.create');
    }

    public function store(StoreDocumentRequest $request)
    {
        Document::create($request->validated());
        return redirect()->route('documents.index')->with('success', 'Documento criado com sucesso.');
    }

    public function show(Document $document)
    {
        return view('documents.show', compact('document'));
    }

    public function edit(Document $document)
    {
        return view('documents.edit', compact('document'));
    }

    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $document->update($request->validated());
        return redirect()->route('documents.index')->with('success', 'Documento atualizado com sucesso.');
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('documents.index')->with('success', 'Documento removido.');
    }
}