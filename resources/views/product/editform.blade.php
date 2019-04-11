@extends('layouts.master')
@section('content')

	@foreach ($data as $row)

    <!-- Main content -->
    <section class="content">
      <div class="row">
	  <div class="col-md-12">
	 
		</div>
      </div>
	  <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Edit Data Product</a></li>
              <li><a href="#tab_2" data-toggle="tab">Edit Image Product</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
					<div class="box">
	   <form action="<?php echo url('updateProduk/'.$row->idProduk)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form edit data produk</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> SubCategory</span>
					<select name="idSub" class="form-control" required> 
												<option value="">- Select Sub</option>
												@foreach ($sub_cat as $i)
												<option value="{{ $i->idSub }}" {{ $row->idSub == $i->idSub ? 'selected="selected"' : '' }} />{{$i->namaSub}}
											    @endforeach
					</select>
               
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama </span>
                <input title="nama"type="text" name="nama" autocomplete="off" required class="form-control" value="{{$row->nama}}">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Deskripsi </span>
                <input title="deskripsi"type="text" name="deskripsi" autocomplete="off" required class="form-control" value="{{$row->deskripsi}}">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Stok </span>
                <input title="stok"type="number" min="1" name="stok" autocomplete="off" required class="form-control" value="{{$row->stok}}">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga </span>
                <input title="harga"type="text" name="harga" autocomplete="off" required class="form-control" value="{{$row->harga}}">
				</div><br>	
		</div>
		
        <div class="box-footer">
							<div class="col-md-offset-10 col-md-9">
								
									<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
							</div>
		
        </div>
		</form>
		</div>
			 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
			   <div class="row">
				 <div class="col-md-3">
					<div class="box-body">
						<img style="width:300px; height:300px;"src="/image/{{$row->gambar}}">
					</div>
				 </div>
				  <div class="col-md-9">
				  <form action="<?php echo url('updateProdukImg/'.$row->idProduk)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
					 {{ csrf_field() }}
					<div class="box-body">
					<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-tags"></i> Gambar </span>
					<input title="gambar" type="file" name="foto" autocomplete="off" required class="form-control" value="{{$row->gambar}}">
					</div><br>	
					</div>
					<div class="col-md-offset-10 col-md-9">
					<button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
					</div>
					</form>
				  </div>
              </div>
              </div>
              <!-- /.tab-pane -->
             
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

        
      </div>
      
</section>
    @endforeach	
@endsection