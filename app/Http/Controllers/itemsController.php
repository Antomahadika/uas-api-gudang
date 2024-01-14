<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;

class itemsController extends Controller
{
    public function index()
    {
        $items = items::all();
        return response()->json($items);
    }

    public function show($id)
    {
        $items = items::find($id);
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $items = items::create($request->all());
        return response()->json("Data Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $items = items::find($id);
        $items->update($request->all());
        return response()->json("Data Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $items = items::find($id);
        $items->delete();
        return response()->json("Data Berhasil Dihapus");
    }
}