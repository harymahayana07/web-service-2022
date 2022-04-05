   @extends('partial.master')

   @section('judul','Data-mahasiswa')

   @section('content')
             <h1>Data dosen dari view mahasiswa</h1>
<table class="table table-hover table-bordered">
   <thead class="bg-primary">
      <tr>
         <th>No</th>
         <th>Nim</th>
         <th>Nama</th>
         <th>Semester</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($data as $row)
      <tr>
         <td>{{ $loop->iteration }}</td>
         <td>{{ $row->nim }}</td>
         <td>{{ $row->nama_mahasiswa }}</td>
         <td>{{ $row->semester }}</td>
         <td><a href="#">Tambah |</a> <a href="#">Hapus |</a> <a href="#">Edit</a></td>
      </tr>
      @endforeach
   </tbody>
</table>


   @endsection