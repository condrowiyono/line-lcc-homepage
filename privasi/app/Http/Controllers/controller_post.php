<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\model_post;
use Share;
use Carbon\Carbon;
use DB;

class controller_post extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('line_post')->join('line_kategori','line_post.kategori','=','line_kategori.kategori_id')->where('kategori', '=', '2')
        ->orderBy('post_id', 'DESC')->paginate(6);
        return view('kategori')->with('datas', $datas);
    }

    public function pengajar()
    {
        $datas = DB::table('line_post')->join('line_kategori','line_post.kategori','=','line_kategori.kategori_id')->where('kategori', '=', '4')
        ->orderBy('post_id', 'DESC')->paginate(6);
        return view('kategori')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (model_post::where('post_slug', $id)->count()==0) {
            return view('errors.404');
        };

        $datas = model_post::where('post_slug', $id)->first();

        //urursan tanggal
        $tanggalpost = new Carbon($datas['post_tanggal']);
        $datas['post_tanggal'] = $tanggalpost->format('j F Y h:i:s A'); 
        
        //urusan sharing
        $alamat = url('/',$datas['post_slug']);
        $datas['twitter'] = Share::load($alamat, $datas['post_judul'])->twitter();
        $datas['line'] = Share::load($alamat, $datas['post_judul'])->line();
        $datas['fb'] = Share::load($alamat)->facebook();
        $datas['wa'] = Share::load($alamat)->whatsapp();

        return view('post')->with('datas', $datas);
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
