<!-- tambah data blog by arikk -->
@extends('partial.master-blog')

@section('judul','Edit-blog')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">Edit Data blog</h3>
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
                            <form action="{{ url('edit-blog')}}/{{ $data->id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="iidd">ID </label>
                                    <input type="number" id="iidd" name="id" class="form-control" value="{{old('id', $data->id)}}" autocomplete="off" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="at">author</label>
                                    <input type="text" id="at" name="author" class="form-control" value="{{old('author', $data->author)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tl">title</label>
                                    <input type="text" id="tl" name="title" class="form-control" value="{{old('title', $data->title)}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="bd">body</label>
                                    <textarea name="body" id="bd" cols="30" rows="2" value="{{old('body')}}" autocomplete="off">{{ $data->body }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="key">keyword</label>
                                    <input type="text" id="key" name="keyword" class="form-control" value="{{old('keyword', $data->keyword)}}" autocomplete="off">
                                </div>

                                <input type="submit" class="btn btn-success" name="submit" value="Simpan Data">
                                <a class="btn btn-primary" href="{{ url('data-blog') }}" role="button">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection