@extends('layouts.master')
@section('content')

    <section class="content-header">
      <h1>
        REVIEWS
        
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
              <h3 class="box-title">Data Reviews</h3>
              <hr>
              <a href="{{url('tambahReview')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Add data </button></a>
            
            </div
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th> ID</th>
                <th> Nama </th> 
                <th> Email </th> 
                <th> Review </th> 
                <th> Status </th> 
                <th> Tanggal </th> 
                <th> Opsi  </th></tr>
                </tr>
                <?php $no=1 ?>
    
                </thead>
                <tbody>
                @foreach($review as $Areview)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$Areview->nama}}</td>
                <td>{{$Areview->email}}</td>
                <td>{{$Areview->review}}</td>
                <td>{{$Areview->status}}</td>
                <td>{{$Areview->tanggal}}</td>
                <td><a href="editReview/{{$Areview->idReview}}">
                      <i class="fa fa-edit"></i> Edit</a> 
                |   <a href="hapusReview/{{$Areview->idReview}}" onClick="return confirm('Are you sure you want to delete?')">
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