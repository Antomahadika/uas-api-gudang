<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suppliers;

class suppliersController extends Controller
{
    public function index()
    {
        $suppliers = suppliers::all();
        return response()->json($suppliers);
    }

    public function show($id)
    {
        $suppliers = suppliers::find($id);
        return response()->json($suppliers);
    }

    public function store(Request $request)
    {
        $suppliers = suppliers::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $suppliers = suppliers::find($id);
        $suppliers->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $suppliers = suppliers::find($id);
        $suppliers->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}