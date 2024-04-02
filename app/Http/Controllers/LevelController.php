<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level (level_kode, level_nama, created_at) values (?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'insert data baru berhasil';

        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Update data berhasil. Jumlah data yang diUpdate: ' . $row . ' baris';

        //     $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        //     return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }

    public function tambah()
    {
        return view('forms.m_level');
    }

    public function tambah_simpan(Request $request): RedirectResponse
    {
        request()->validate([
            'level_kode' => 'required|max:3',
            'level_nama' => 'required',
        ]);

        LevelModel::create([
            'level_kode' => request()->kodeLevel,
            'level_nama' => request()->KodeNama,
        ]);

        return redirect('/level');
    }
}
