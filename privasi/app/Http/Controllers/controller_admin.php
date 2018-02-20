<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\model_post;
use App\model_kategori;
use Share;
use Carbon\Carbon;
use DB;
use Auth;

class controller_admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if  (Auth::guest()) {
            return view('errors.404'); 
        }
        else {
            $datas = DB::table('line_post')->join('line_kategori','line_post.kategori','=','line_kategori.kategori_id')->orderBy('post_id', 'DESC')->get();
            return view('administrasi.daftarpost')->with('datas', $datas);
        }
    }
    
    public function kategori()
    {
        if  (Auth::guest()) {
            return view('errors.404'); 
        }
        else {
            $datas = model_kategori::all();
            return view('administrasi.kategori')->with('datas', $datas);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrasi.baru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pembuat' => 'required|max:255',
            'tanggal' => 'required',
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',]);

        if(isset($request['poto']) )
        {
            $file       = $request->file('poto');
            $fileName   = $file->getClientOriginalName();
            $request->file('poto')->move("images/blog/", $fileName);
        } 
        else
        {
            $fileName   = '';
        }

        $pisah = explode('/',$request['tanggal']);
        $urutan = array($pisah[2],$pisah[1],$pisah[0]);
        $ubahtgl = implode('-',$urutan);
        
        $tambah = new model_post();
        $tambah->post_pembuat = $request['pembuat'];
        $tambah->post_tanggal =  $ubahtgl;
        $tambah->post_judul = $request['judul'];
        $tambah->post_slug = str_slug($request['judul']);
        $tambah->kategori = $request['kategori'];
        $tambah->post_isi = $request['isi'];
        $tambah->post_poto = $fileName;
        $tambah->save();
    
        $ke = url('/administrasi','daftar') ;
        return redirect()->to($ke);
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
        $datas = model_post::where('post_id','=', $id)->first();
        return view('administrasi.edit')->with('datas', $datas);
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
        $this->validate($request, [
            'pembuat' => 'required|max:255',
            'tanggal' => 'required',
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',]);

        $tambah = model_post::where('post_id','=', $id)->first();
        if(isset($request['poto']) )
        {
            $file       = $request->file('poto');
            $fileName   = $file->getClientOriginalName();
            $request->file('poto')->move("images/blog/", $fileName);
            $tambah->post_poto = $fileName;
        } 
        else
        {
            
        }

        //tanggal 
        $pisah = explode('/',$request['tanggal']);
        $urutan = array($pisah[2],$pisah[1],$pisah[0]);
        $ubahtgl = implode('-',$urutan);

        $tambah->post_pembuat = $request['pembuat'];
        $tambah->post_tanggal = $ubahtgl;
        $tambah->post_judul = $request['judul'];
        $tambah->post_slug = str_slug($request['judul']);
        $tambah->kategori = $request['kategori'];
        $tambah->post_isi = $request['isi'];
        
        $tambah->update();
    
        $ke = url('/administrasi','daftar') ;
        return redirect()->to($ke);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = model_post::find($id);
        if ($hapus['post_poto']=='') {} else {
            unlink('images/blog/'. $hapus['post_poto']);
        }
        $hapus->delete();
        $ke = url('/administrasi','daftar') ;
        return redirect()->to($ke);
    }
}
