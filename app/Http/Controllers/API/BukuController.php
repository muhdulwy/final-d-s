<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BukuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = BukuModel::all();

        if($buku->count() < 1){
            return response(
                [
                    "status" => "error",
                    "message" => "Data Buku Kosong"
                ], 400);
        }

        return response()->json($buku, 200);
    }

    
    public function store(Request $request){
        $validator = $this->__validate($request);

        if($validator->fails()){
            return response()->json([
                "status" => "error",
                "message" => "Error Validation",
                "validation" => $validator->errors()
            ], 400);
        }

        BukuModel::create([
            "nama_buku" => $request->nama_buku
        ]);

        return response()->json([
            "status" => "success",
            "message" => "Data Berhasil di Tambah"
        ], 200);
    }

    public function update(Request $request, BukuModel $buku){
        $validator = $this->__validate($request);

        if($validator->fails()){
            return response()->json([
                "status" => "error",
                "message" => "Error Validation",
                "validation" => $validator->errors()
            ], 400);
        }

        $buku->update([
            "nama_buku" => $request->nama_buku
        ]);

        return response()->json([
            "status" => "success",
            "message" => "Data Berhasil di Edit"
        ], 200);
    }

    public function destroy(BukuModel $buku){
        $buku->delete();

        return response()->json([
            "status" => "success",
            "message" => "Data Berhasil di Hapus"
        ], 200);
    }

    private function __validate($request){
        $data = $request->all();
        $rules = [
            'nama_buku' => 'required|max:255',
        ];

        return Validator::make($data, $rules);
    }
}
