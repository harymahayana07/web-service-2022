@extends('partial.master')

@section('judul','Edit-Mahasiswa')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">Edit Data Mahasiswa</h3>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                   
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                   
                                </ul>
                            </div>
                            @endif
                            <form action="{{ url('edit-mahasiswa')}}/{{ $data->id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="nims">Nim</label>
                                    <input type="number" id="nims" name="nim" class="form-control" value="{{old('nim', $data->nim)}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nm">Nama</label>
                                    <input type="text" id="nm" name="nama_mahasiswa" class="form-control" value="{{old('nama_mahasiswa', $data->nama_mahasiswa)}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="smt">Semester</label>
                                    <input type="number" id="smt" name="semester" class="form-control" value="{{old('semester', $data->semester)}}">
                                </div>
                                <!-- <div class="form-group mb-3">
                                <label for="ss">TEXT</label>
                                <textarea name="txtisi" id="ss" cols="30" rows="2"></textarea>
                            </div> -->
                                <input type="submit" class="btn btn-success" name="submit" value="Simpan Data">
                           
                                <a class="btn btn-secondary" href="{{ url('data-mahasiswa') }}" role="button">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection