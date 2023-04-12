<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kamera;

class KameraController extends Controller
{
    public function index()
    {
        try {
            $kameras = Kamera::all();

            return response()->json([
                'success' => true,
                'data' => $kameras
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function show(Kamera $kamera)
    {
        try {
            return response()->json([
                'success' => true,
                'data' => $kamera
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $kamera = Kamera::create([
                'merk' => $request->merk,
                'model' => $request->model,
                'harga_sewa' => $request->harga_sewa
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Kamera berhasil ditambahkan',
                'data' => $kamera
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, Kamera $kamera)
    {
        try {
            $kamera->update([
                'merk' => $request->merk,
                'model' => $request->model,
                'harga_sewa' => $request->harga_sewa
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Kamera berhasil diupdate',
                'data' => $kamera
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Kamera $kamera)
    {
        try {
            $kamera->delete();

            return response()->json([
                'success' => true,
                'message' => 'Kamera berhasil dihapus'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}

