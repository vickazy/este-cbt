
@extends('layouts.dashboard')

@section('title')
Tambah Mata Pelajaran
@endsection

@section('content')
<h3 class="text-center" style="color: #343C47; font-weight: bold;">TAMBAH DATA MATA PELAJARAN
<br><small style="color: #343C47;">(Isikan kolom berikut dengan benar)</small></h3><br>
<form id="productForm" method="post" class="form-horizontal" action="{{ action('Admin\SubjectController@store') }}">
    {!! csrf_field() !!}
    @include('common.errors')
    <div class="form-group">
        <label class="col-xs-4 control-label">Kode Mata Pelajaran</label>
        <div class="col-xs-6">
            <input type="text" class="form-control" name="code" placeholder="Masukkan Kode Mata Pelajaran" value="{{ old('code') }}" required />
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-xs-4 control-label">Nama Mata Pelajaran</label>
        <div class="col-xs-6">
            <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Mata Pelajaran" value="{{ old('name') }}" required />
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-4 col-xs-offset-4">
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">BUAT</button>
        </div>
    </div>

</form>
@endsection