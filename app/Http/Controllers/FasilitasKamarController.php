<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKamar;
use App\Models\FasilitasHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fasilitasKamar.index', [
            'fasilitasKamar' => FasilitasKamar::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fasilitasKamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tipe_kamar' => ['required', 'max:255', 'string'],
            'image' => 'image|file|max:1024',
            'fasilitas' => ['required', 'max:255', 'string'],
            'description' => ['required', 'max:255', 'string'],
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images-kamars','public');
        }

        FasilitasKamar::create($validateData);

        return redirect('/fasilitasKamar')->with('message', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasKamar $fasilitasKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitaskamar = FasilitasKamar::firstWhere('id', $id);
        return view('admin.fasilitasKamar.edit', [
            'fasilitaskamar' => $fasilitaskamar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fasilitaskamar = FasilitasKamar::firstWhere('id', $id);
        $rules =[
            'tipe_kamar' => ['required', 'max:255', 'string'],
            'fasilitas' => ['required', 'max:255', 'string'],
            'description' => ['required', 'max:255', 'string'],
        ];
        
        
        if ($request->image) {
            $rules['image'] = ['image','max:2048'];
        }
        
        $validateData = $request->validate($rules);

        if ($request->image) {
            $validateData['image'] = $request->file($rules);
            Storage::delete($fasilitaskamar->image);
        }

        $fasilitaskamar->update($validateData);

        return redirect('/fasilitasKamar')->with('message', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasKamar $fasilitasKamar)
    {
        $fasilitasKamar->delete();

        return redirect('/fasilitasKamar')->with('message', 'Data berhasil dihapus!');
    }

    public function About()
    {
        return view('about', [
            'fasilitasHotel' => FasilitasHotel::latest()->get()
        ]);
    }

    public function Rooms(){
        return view('rooms',['fasilitasKamar' => FasilitasKamar::latest()->get()]);
    }

    public function Details(){
        return view('details',['fasilitasKamar' => FasilitasKamar::latest()->get()]);
    }
}
