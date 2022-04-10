<!-- menambahkan index/home untuk blog -->
@extends('partial.master-blog')

@section('judul','Data-blog')

@section('content')
<div class="content-wrapper">
   <section class="content">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header bg-primary">
                     <h3 class="card-title">Data Blog ILKOM A</h3>
                  </div>
                  <div class="card-body">
                  <a class="btn btn-success mb-3" href="{{ url('add-blog')}}" role="button"><i class="fas fa-add"></i> Tambah Data</a>
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr class="bg-info">
                              <th>No</th>
                              <th>id</th>
                              <th>author</th>
                              <th>title</th>
                              <th>body</th>
                              <th>Keywoard</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($data as $row)
                           <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $row->id }}</td>
                              <td>{{ $row->author }}</td>
                              <td>{{ $row->title }}</td>
                              <td>{{ $row->body }}</td>
                              <td>{{ $row->keyword }}</td>
                              <td><a href="#"> DELETE |</a> <a href="#"> UPDATE </a></td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection