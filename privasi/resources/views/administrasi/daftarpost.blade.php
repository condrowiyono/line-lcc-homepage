@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="{{url('/administrasi','baru')}}" class="btn btn-primary"> Buat Baru</a>
            <a href="{{url('/administrasi','kategori')}}" class="btn btn-info"> Kategori</a>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                <div class="panel-body">
                    <div class="table table-responsive">
                    <table class="table" id="contoh">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Kategori</td>
                        <td>Judul</td>
                        <td>Tanggal</td>
                        <td>Edit</td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($datas as $data)
                    <tr>
                        <td>{{$data->post_id}}</td>
                        <td>{{$data->kategori_nama}}</td>
                        <td>{{$data->post_judul}} <br> <span style="color:#bdc3c7">{{$data->post_slug}}</span>  </td>
                        <td>{{$data->post_tanggal}}</td>
                       <td><a href="{{url('/administrasi/edit',$data->post_id)}}" class="btn btn-warning">Edit</a> <a href="{{url('/administrasi/hapus',$data->post_id)}}" onclick="return confirm('Yang bener aja lah?')"onclick="return confirm('Yakin mau hapus data ini sob?')" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    @endforeach
                    </tbody>

                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-script')

@endsection