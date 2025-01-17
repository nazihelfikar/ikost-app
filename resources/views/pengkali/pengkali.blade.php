@extends('layouts.app')
@section('title', $title)
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Kali normalisasi dengan Bobot</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Tabel Hasil Kali</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Harga Sewa</th>
                    <th>Luas Kamar</th>
                    <th>Fasilitas</th>
                    <th>Lokasi</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($pengkali as $item)
                  <tr>
                    
                    <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->Harga_sewa}}</td>
                        <td>{{$item->Luas_Kamar}}</td>
                        <td>{{$item->fasilitas}}</td>
                        <td>{{$item->lokasi}}</td>
                      
                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('sweetalert::alert')
  @endsection