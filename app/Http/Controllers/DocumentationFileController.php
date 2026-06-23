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
        // 1. Validasi Input (Spasi pada mimes dipisahkan dengan koma tanpa spasi)
        $request->validate([
            'title' => 'required|string|max:100',
            'attachment' => 'required|file|mimes:png,jpg,jpeg,pdf,doc,docx,xls,xlsx,ppt,pptx|max:5120',
        ]);

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $extension = strtolower($file->getClientOriginalExtension());

            // 2. Tentukan folder berdasarkan ekstensi file (Cukup satu kali proses)
            if (in_array($extension, ['png', 'jpg', 'jpeg'])) {
                $folder = 'images';
            } else {
                $folder = 'documents';
            }

            // 3. Simpan file fisik ke storage/app/public/{folder}
            $path = $file->store($folder, 'public');

            // 4. Simpan informasi file ke database
            DocumentationFile::create([
                'title' => $request->title,
                'file_path' => $path,
                'file_type' => $extension, // Pastikan kolom 'file_type' sudah ada di database & fillable di Model
            ]);
            
            return redirect()->back()->with('success', 'File berhasil diunggah');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah file.');
    }
}