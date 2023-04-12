<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        try {
            $pelanggans = Pelanggan::all();

            return response()->json([
                'success' => true,
                'data' => $pelanggans
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function show(Pelanggan $pelanggan)
    {
        try {
            return response()->json([
                'success' => true,
                'data' => $pelanggan
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
            $pelanggan = Pelanggan::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pelanggan berhasil ditambahkan',
                'data' => $pelanggan
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        try {
            $pelanggan->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Pelanggan berhasil diupdate',
                'data' => $pelanggan
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Pelanggan $pelanggan)
    {
        try {
            $pelanggan->delete();

            return response()->json([
                'success' => true,
                'message' => 'Pelanggan berhasil dihapus'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
