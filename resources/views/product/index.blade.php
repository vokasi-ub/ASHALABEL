@extends('layouts.master')
@section('content')

    <section class="content-header">
      <h1>
        PRODUK
        
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
              <h3 class="box-title">Data Produk</h3>
              <hr>
			  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-plus"></i> Add data </button>
            
            </div>
			
			<div class="modal modal-default fade" id="modal-danger">
				  <div class="modal-dialog">
					<div class="modal-content">
					<form action="{{url('tambahdataProduk')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama Produk </span>
                <input title="nama"type="text" name="nama" autocomplete="off" required class="form-control">
				</div><br>	
				
				<select name="idSub" id='idSub' class="form-control"> 
												<option value="">- Select Sub Kategori</option>
												@foreach ($product as $Asub)
												<option value="{{$Asub->idSub}}" />{{$Asub->namaSub}}
											    @endforeach
				</select>
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Deskripsi </span>
                <input title="deskripsi"type="text" name="deskripsi" autocomplete="off" required class="form-control">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Stok </span>
                <input title="stok"type="number" name="stok" autocomplete="off" required class="form-control">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga </span>
                <input title="harga"type="text" name="harga" autocomplete="off" required class="form-control">
				</div><br>	
		</div>
		</div><div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Gambar </span>
                <input title="gambar"type="file" name="foto" autocomplete="off" required class="form-control">
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
				<th> Nama Sub </th>
                <th> Nama Produk</th> 
                <th> Deskripsi </th> 
                <th> Stok </th> 
                <th> Harga </th> 
                <th> Gambar </th> 
                <th> Opsi  </th></tr>
                </tr>
                <?php $no=1 ?>
    
                </thead>
                <tbody>
                @foreach($product as $Aproduk)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$Aproduk->sub_cat->namaSub}}</td>
                <td>{{$Aproduk->nama}}</td>
                <td>{{$Aproduk->deskripsi}}</td>
                <td>{{$Aproduk->stok}}</td>
                <td>{{$Aproduk->harga}}</td>
                <td><img style="width:150px;height:120px;"src="/image/{{$Aproduk->gambar}}"></td>
                <td><a href="editProduk/{{$Aproduk->idProduk}}">
                      <i class="fa fa-edit"></i> Edit</a> 
                |   <a href="hapusProduk/{{$Aproduk->idProduk}}" onClick="return confirm('Are you sure you want to delete?')">
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