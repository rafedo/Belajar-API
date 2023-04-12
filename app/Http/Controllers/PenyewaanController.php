<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyewaan;
use Illuminate\Database\QueryException;

class PenyewaanController extends Controller
{
    public function index()
    {
        try {
            $penyewaan = Penyewaan::all();
            return response()->json(['success' => true, 'data' => $penyewaan]);
        } catch (QueryException $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {
            $penyewaan = new Penyewaan;
            $penyewaan->tgl_sewa = $request->tgl_sewa;
            $penyewaan->tgl_kembali = $request->tgl_kembali;
            $penyewaan->kamera_id = $request->kamera_id;
            $penyewaan->pelanggan_id = $request->pelanggan_id;
            $penyewaan->save();
            return response()->json(['success' => true, 'data' => $penyewaan]);
        } catch (QueryException $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        try {
            $penyewaan = Penyewaan::findOrFail($id);
            return response()->json(['success' => true, 'data' => $penyewaan]);
        } catch (QueryException $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $penyewaan = Penyewaan::findOrFail($id);
            $penyewaan->tgl_sewa = $request->tgl_sewa;
            $penyewaan->tgl_kembali = $request->tgl_kembali;
            $penyewaan->kamera_id = $request->kamera_id;
            $penyewaan->pelanggan_id = $request->pelanggan_id;
            $penyewaan->save();
            return response()->json(['success' => true, 'data' => $penyewaan]);
        } catch (QueryException $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $penyewaan = Penyewaan::findOrFail($id);
            $penyewaan->delete();
            return response()->json(['success' => true, 'message' => 'Penyewaan berhasil dihapus']);
        } catch (QueryException $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}

