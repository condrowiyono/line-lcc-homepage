@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="{{url('/administrasi','daftar')}}" class="btn btn-primary"> Kembali </a>
            <a href="{{url('/administrasi','baru')}}" class="btn btn-primary"> Buat Baru</a>
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

                    </tr>
                    </thead>
                  <tfoot>
                    <tr>
                        <td>#</td>
                        <td>Kategori</td>

                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach ($datas as $data)
                    <tr>
                        <td>{{$data->kategori_id}}</td>
                        <td>{{$data->kategori_nama}}</td>
                        
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