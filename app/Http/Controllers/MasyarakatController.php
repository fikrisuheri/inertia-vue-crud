<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakats = Masyarakat::all();

        return inertia('Masyarakat/Index',compact('masyarakats'));
    }

    public function create()
    {
        return inertia('Masyarakat/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'profesi' => 'required|string|max:255',
        ]);
        Masyarakat::create($request->all());
        return redirect('/masyarakat')->with('message','Sukses Tambah Data');
    }
}
