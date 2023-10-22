<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inventori;

class InventoriController extends Controller
{
    public function create (Request $request) {
        try {
            $Inventori = $request -> validate ([
                'nama' => ['required'],
                'harga' => ['required'],
                'stok' => ['required'],
            ]);

            Inventori::create($Inventori);

            return response() -> json ([
                'data' => $Inventori,
                'message' => 'Data Inventori Berhasil Dibuat'
            ], 201);
        } catch (\Exception $e) {
            return response() -> json ([
                'data' => $Inventori,
                'message' => $e -> getMessage(),
            ], 400);
        }
    }

    public function read () {
        return response () -> json ([
            'data' => Inventori::all(),
        ], 200);
    }

    public function update (Inventori $Inventori, Request $request) {
        try {
            $request -> validate ([
                'stok' => ['numeric'],
                'harga' => ['numeric']
            ]);

            if(!$request['nama'] and !$request['harga'] and !$request['stok']) {
                return response () -> json ([
                    'message' => 'Data Perubahan Tidak Ditemukan'
                ], 400);
            }

            if ($request['nama']) {
                $Inventori -> nama = $request['nama'];
            }
            if ($request['harga']) {
                $Inventori -> harga = $request['harga'];
            }
            if ($request['stok']) {
                $Inventori -> stok = $request['stok'];
            }
            $Inventori -> save();

            return response () -> json ([
                'data' => $Inventori,
                'message' => 'Data Inventori Berhasil Diubah'
            ], 200);
        } catch (\Exception $e) {
            return response () -> json ([
                'data' => $Inventori,
                'message' => $e -> getMessage(),
            ], 400);
        }
    }

    public function delete (Inventori $Inventori) {
        try {
            $Inventori -> delete();
            
            return response () -> json ([
                'message' => 'Data Inventori Berhasil Dihapus'
            ], 200);
        } catch (\Exception $e) {
            return response () -> json ([
                'message' => $e -> getMessage()
            ], 400);
        }
    }
}
