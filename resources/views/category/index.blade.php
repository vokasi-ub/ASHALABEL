@extends('layouts.master')
@section('content')

    <section class="content-header">
      <h1>
        KATEGORI
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">      
           <!-- /.box-body -->
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kategori Produk</h3>
              <hr>
              <a href="{{url('tambahdata')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Add data </button></a>
            
            </div
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th> ID</th>
                <th> Nama Kategori</th> 
                <th> Opsi  </th></tr>
                </tr>
                <?php $no=1 ?>
    
                </thead>
                <tbody>
                @foreach($kategori as $Akategori)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$Akategori->namaKategori}}</td>
                <td><a href="editKategori/{{$Akategori->idKategori}}">
                      <i class="fa fa-edit"></i> Edit</a> 
                |   <a href="hapusKategori/{{$Akategori->idKategori}}" onClick="return confirm('Are you sure you want to delete?')">
                      <i class="fa fa-trash-o"></i> Hapus</a>
                  </td>
                    </tr>
                @endforeach
               
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          
          </div>
</section>
          <!-- /.box -->
@endsection