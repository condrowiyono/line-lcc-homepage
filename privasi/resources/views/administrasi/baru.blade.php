@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <form class="form-horizontal" role="form" method="POST" action="{{url('/administrasi','store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Bodi</div>
                <div class="panel-body">
                   <div class="form-group">
                   <div class="col-md-12">
                        <input type="text" class="form-control" name="judul" value="" placeholder="judul" >

                        @if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-12">
                    <textarea class="form-control" style="min-height:400px" name="isi"></textarea>
                    </div>
                    </div>
                </div>
            </div>                
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Properti</div>
                <div class="panel-body">
                    
                        <div class="form-group{{ $errors->has('token') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Pembuat</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pembuat" value="{{ Auth::user()->name }}">

                                @if ($errors->has('pembuat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pembuat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Tanggal</label>

                            <div class="col-md-6">
                                <div class="input-group date">
                                  <input type="text" class="form-control" name="tanggal"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                </div>


                                @if ($errors->has('tanggal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('poto') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Poto</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="poto">

                                @if ($errors->has('poto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('poto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Kategori</label>
                            <div class="col-md-6">
                               
                                <select class="form-control" name="kategori"> 
                                    <option value="1"> 1. private </option>
                                    <option value="2" selected="">2. blog</option>
                                    <option value="3">3. ucc</option>
                                    <option value="4">4. pengajar</option>
                                </select>
                                @if ($errors->has('kategori'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kategori') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-save"></i>Simpan
                    </button>
                </div>
            </div>
        </div>


    </form>
    </div>
</div>
@endsection
@section('page-script')
{!! Html::script('assets/ckeditor/ckeditor.js') !!}
<script>
    CKEDITOR.replace( 'isi' );
    $('.container .input-group.date').datepicker({
            format: 'dd/mm/yyyy',
            todayBtn: 'linked'
        });

</script>

@endsection