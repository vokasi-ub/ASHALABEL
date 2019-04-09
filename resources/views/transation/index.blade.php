@extends('layouts.master')
@section('content')

    <section class="content-header">
      <h1>
        TRANSAKSI
        
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
              <h3 class="box-title">Data Transaksi</h3>
              <hr>
              <a href="{{url('tambahTrans')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Add data </button></a>
            
            </div
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th> ID</th>
				<th> ID Produk </th>
                <th> Nama </th> 
                <th> Alamat </th> 
                <th> Tanggal </th> 
                <th> Jumlah </th> 
                <th> Total Harga </th> 
                <th> Opsi  </th></tr>
                </tr>
                <?php $no=1 ?>
    
                </thead>
                <tbody>
                @foreach($transaksi as $Atrans)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$Atrans->idProduk}}</td>
                <td>{{$Atrans->nama}}</td>
                <td>{{$Atrans->alamat}}</td>
                <td>{{$Atrans->tanggal}}</td>
                <td>{{$Atrans->jumlah}}</td>
                <td>{{$Atrans->total_harga}}</td>
                <td><a href="editTrans/{{$Atrans->idTransaksi}}">
                      <i class="fa fa-edit"></i> Edit</a> 
                |   <a href="hapusTrans/{{$Atrans->idTransaksi}}" onClick="return confirm('Are you sure you want to delete?')">
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