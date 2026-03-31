<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocumentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $documentId = $this->route('document') ? $this->route('document')->id : null;

        return [
            'type' => 'required|string|max:255',
            'number' => 'required|string|max:255|unique:documents,number,' . $documentId
        ];
    }
}
