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
              <button class="btn btn-primary" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-plus"></i> Add data </button>
            </div>
			
				<div class="modal modal-default fade" id="modal-danger">
				  <div class="modal-dialog">
					<div class="modal-content">
					<form action="{{url('tambahkategori')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Add Data</h4>
					  </div>
					  <div class="modal-body">
						   {{ csrf_field() }}
							<div class="box-header with-border">
							  <h3 class="box-title"><i class="fa fa-tags"></i> Form add data kategori</h3>
							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
										title="Collapse">
								  <i class="fa fa-minus"></i></button>
							  </div>
							</div>
							<div class="box-body">
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-tags"></i> Nama Kategori </span>
									<input title="Nama Kategori"type="text" name="namaKategori" autocomplete="off" required class="form-control">
									</div><br>	
							</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger">Save changes</button>
					  </div>
					  </form>
					</div>
					<!-- /.modal-content -->
				  </div>
				  <!-- /.modal-dialog -->
				</div>
			
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