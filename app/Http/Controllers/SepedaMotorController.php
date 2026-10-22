<?php

namespace App\Http\Controllers;

use App\Models\SepedaMotor;
use Illuminate\Http\Request;

class SepedaMotorController extends Controller
{
    // READ: Menampilkan seluruh data sepeda motor
    public function index()
    {
        $motor = SepedaMotor::orderBy('nama_produk', 'asc')->get();

        $totalMotor = SepedaMotor::count();

        $totalStok = SepedaMotor::sum('jumlah_produk');

        $totalNilai = SepedaMotor::selectRaw(
            'SUM(harga_produk * jumlah_produk) as total'
        )->value('total') ?? 0;

        return view('motor.index', compact(
            'motor',
            'totalMotor',
            'totalStok',
            'totalNilai'
        ));
    }

    // CREATE: Menampilkan halaman tambah produk
    public function create()
    {
        return view('motor.create');
    }

    // STORE: Menyimpan produk ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'spesifikasi' => 'required|string',
            'harga_produk' => 'required|integer|min:0',
            'jumlah_produk' => 'required|integer|min:0',
        ]);

        SepedaMotor::create($validated);

        return redirect()
            ->route('motor.index')
            ->with('success', 'Data sepeda motor berhasil ditambahkan!');
    }

    // SHOW: Detail produk (belum digunakan)
    public function show(string $id)
    {
        return redirect()->route('motor.index');
    }

    // EDIT: Menampilkan halaman edit
    public function edit(string $id)
    {
        $motor = SepedaMotor::findOrFail($id);

        return view('motor.edit', compact('motor'));
    }

    // UPDATE: Memperbarui data produk
    public function update(Request $request, string $id)
    {
        $motor = SepedaMotor::findOrFail($id);

        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'spesifikasi' => 'required|string',
            'harga_produk' => 'required|integer|min:0',
            'jumlah_produk' => 'required|integer|min:0',
        ]);

        $motor->update($validated);

        return redirect()
            ->route('motor.index')
            ->with('success', 'Data sepeda motor berhasil diperbarui!');
    }

    // DELETE: Menghapus produk
    public function destroy(string $id)
    {
        $motor = SepedaMotor::findOrFail($id);

        $motor->delete();

        return redirect()
            ->route('motor.index')
            ->with('success', 'Data sepeda motor berhasil dihapus!');
    }
}