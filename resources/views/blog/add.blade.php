<!-- tambah data blog by arikk -->
@extends('partial.master-blog')

@section('judul','tambah-blog')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">Tambah Data blog</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('blog.getData') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <!-- <label for="iidd">ID HIDDEN</label> -->
                                    <input type="hidden" id="iidd" name="id" class="form-control" required autocomplete="off" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="at">author</label>
                                    <input type="text" id="at" name="author" class="form-control" required autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tl">title</label>
                                    <input type="text" id="tl" name="title" class="form-control" required autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="bd">body</label>
                                    <textarea name="body" id="bd" cols="30" rows="2"></textarea required autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="key">keyword</label>
                                    <input type="text" id="key" name="keyword" class="form-control" required autocomplete="off">
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