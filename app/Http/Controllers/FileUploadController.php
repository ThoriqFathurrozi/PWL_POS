<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        // dump($request->berkas);
        // dump($request->file('file'));
        // return "Pemerosesan file upload disini";

        // if ($request->hasFile('berkas')) {
        //     echo "path(): " . $request->berkas->path() . "<br>";
        //     echo "extension(): " . $request->berkas->extension() . "<br>";
        //     echo "getClientOriginalExtension(): " . $request->berkas->getClientOriginalExtension() . "<br>";
        //     echo "getMimeType(): " . $request->berkas->getMimeType() . "<br>";
        //     echo "getClientOriginalName(): " . $request->berkas->getClientOriginalName() . "<br>";
        //     echo "getSize(): " . $request->berkas->getSize() . "<br>";
        // } else {
        //     return "Tidak ada berkas yang diupload";
        // }

        $request->validate([
            'berkas' => 'required|file|image|max:500',
        ]);
        $extFile = $request->berkas->getClientOriginalName();
        $namaFile = 'web-' . time() . "." . $extFile;
        $path = $request->berkas->storeAs('public', $namaFile);

        $pathBaru = asset('storage/public/' . $namaFile);
        echo "Proses upload berhasil, data disimpan pada: $path <br>";
        return "Tampilkan link: <a href='$pathBaru'>$pathBaru</a>";

        // $path = $request->berkas->store('uploads');
        // $path = $request->berkas->storeAs('uploads', 'berkas');
        // return "Proses upload berhasil, file berada di: $path";
        // echo $request->berkas->getClientOriginalName() . "lolos validasi";
    }
}
