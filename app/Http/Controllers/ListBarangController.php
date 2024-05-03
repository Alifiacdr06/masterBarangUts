<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';

        $barangs = Barang::all();
        return view('listbarang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Order';
        // RAW SQL Query
        $satuans = Satuan::all();
        return view('listbarang.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'hargabarang' => 'required|numeric',
            'deskripsibarang' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = new Barang();
        $barang->kodebarang = $request->kodebarang;
        $barang->namabarang = $request->namabarang;
        $barang->hargabarang = $request->hargabarang;
        $barang->deskripsibarang = $request->deskripsibarang;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('listbarang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';
        // RAW SQL Query
        $barang = Barang::find($id);
        return view('listbarang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Order';
        // RAW SQL Query
        $satuans = Satuan::all();
        $barang = Barang::find($id);
        return view('listbarang.edit', compact('pageTitle', 'barang', 'satuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'hargabarang' => 'required|numeric',
            'deskripsibarang' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = Barang::find($id);
        $barang->kodebarang = $request->kodebarang;
        $barang->namabarang = $request->namabarang;
        $barang->hargabarang = $request->hargabarang;
        $barang->deskripsibarang = $request->deskripsibarang;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('listbarang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::find($id)->delete();
        return redirect()->route('listbarang.index');
    }
}
