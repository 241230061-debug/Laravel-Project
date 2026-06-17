<?php

namespace App\Http\Controllers;

use App\Models\DocumentationFile;
use Illuminate\Http\Request;

class DocumentationFileController extends Controller
{
    public function index()
    {
        $files = DocumentationFile::latest()->get();
        return view('documentation_files', compact('files'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'attachment' => 'required|file|mimes:png, jpg,jpeg,pdf,doc,docx,xls,xlsx,ppt,pptx|max:5120',
        ]);

        $file = $request->file('attachment');
        $extension = $file->getClientOriginalExtension();
        $folder = in_array($extension, ['png', 'jpg', 'jpeg']) ? 'images' : 'documents';
        $path = $file->store($folder, 'public');

        $file = $request->file('attachment');
        $extension = $file->getClientOriginalExtension();
        $folder = in_array($extension, ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx']) ? 'documents' : 'images';
        $path = $file->store($folder, 'public');

        DocumentationFile::create([
            'title' => $request->title,
            'file_path' => $path,
            'file_type' => $extension,
        ]);
        
        return redirect()->back()->with('success', 'File berhasil diunggah');
    }
}
