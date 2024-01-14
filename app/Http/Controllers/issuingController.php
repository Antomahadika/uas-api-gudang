<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\issuing;

class issuingController extends Controller
{
    public function index()
    {
        $issuing = issuing::all();
        return response()->json($issuing);
    }

    public function show($id)
    {
        $issuing = issuing::find($id);
        return response()->json($issuing);
    }

    public function store(Request $request)
    {
        $issuing = issuing::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $issuing = issuing::find($id);
        $issuing->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $issuing = issuing::find($id);
        $issuing->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}