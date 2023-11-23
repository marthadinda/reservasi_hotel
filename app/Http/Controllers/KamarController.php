<?php

namespace App\Http\Controllers;
use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $data = Kamar::select('id','nama_kamar','foto_kamar','jum_kamar','harga_kamar', 'deskripsi_kamar')
                ->when($search, function($query, $search) {
                    return $query->where('nama_kamar','like', "%{$search}%")
                            ->orWhere('harga_kamar','like',"%{$search}%");
                })
                ->paginate(50);
       return view('kamar.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kamar'=>'required|min:3',
            'foto'=>'required|image|mimes:png,jpg,jpeg',
            'jumlah'=>'required',
            'harga'=>'required',
            'deskripsi'=>'nullable|min:10',
        ]);

        $ext = $request->foto->getClientOriginalExtension();
        $filename = rand(9,999).'_'.time().'.'.$ext;
        $request->foto->move('images/kamar', $filename);

        Kamar::create([
            'nama_kamar' => $request->nama_kamar,
            'foto_kamar' => $filename,
            'jum_kamar' => $request->jumlah,
            'harga_kamar' => $request->harga,
            'deskripsi_kamar' => $request->deskripsi
        ]);

        return redirect()->route('kamar.index')->with('status', 'store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
