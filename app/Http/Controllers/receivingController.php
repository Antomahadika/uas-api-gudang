<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\receiving;

class receivingController extends Controller
{
    public function index()
    {
        $receiving = receiving::all();
        return response()->json($receiving);
    }

    public function show($id)
    {
        $receiving = receiving::find($id);
        return response()->json($receiving);
    }

    public function store(Request $request)
    {
        $receiving = receiving::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $receiving = receiving::find($id);
        $receiving->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $receiving = receiving::find($id);
        $receiving->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}