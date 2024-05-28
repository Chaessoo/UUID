<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use PhpParser\Node\Expr\FuncCall;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return response()->json([
            "data" => $data
        ]);
    }

    public function create(Request $request)
    {
        $data = Barang::create([
            "barang" => $request->barang
        ]);

        return response()->json([
            "message" => "Success ditambah"
        ]);
    }
}
