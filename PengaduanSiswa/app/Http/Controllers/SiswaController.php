<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();

        return view('siswa.index', compact('siswas'));
    }

    public function show()
    {
        $siswas = Siswa::all();

        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelapor'=> 'required|string',
            'terlapor'=> 'required|string',
            'kelas'=> 'required|string',
            'laporan'=> 'required|string',
            'foto'=> 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $foto = $request->file('foto');
        $foto->store('bukti_foto', 'public', $foto->hashname());

        Siswa::create([
            'pelapor'=> $request->pelapor,
            'terlapor'=> $request->terlapor,
            'kelas'=> $request->kelas,
            'laporan'=> $request->laporan,
            'foto'=> $foto->hashname(),
            'status'=> 'sedang dalam tinjuan',
        ]);


        return redirect('siswa/index')->with('Mantap', 'Laporan sudah diterima guru');
    }

}
