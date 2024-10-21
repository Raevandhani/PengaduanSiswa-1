<?php

namespace App\Http\Controllers; 

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class GuruController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();

        return view('guru.index', compact('siswas'));
    }

    public function delete()
    {
        
    }

    public function edit(string $id): View
    {
        $status = Siswa::findOrFail($id);

        return view('guru.edit', compact('status'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {

        $request->validate([
            'status' => 'required'
        ]);

        $status = Siswa::findOrFail($id);
        
        $status->update([
            'status' => $request->status,
        ]);

        //redirect to index
        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Diubah!']);

    }
}
