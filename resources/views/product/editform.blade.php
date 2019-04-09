@extends('layouts.master')
@section('content')

	@foreach ($data as $row)

    <!-- Main content -->
    <section class="content">
      <div class="row">
	  <div class="col-md-12">
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
                <span class="input-group-addon"><i class="fa fa-tags"></i> ID Sub </span>
                <input title="idSub"type="text" name="idSub" autocomplete="off" required class="form-control" value="{{$row->idSub}}">
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
                <input title="stok"type="text" name="stok" autocomplete="off" required class="form-control" value="{{$row->stok}}">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga </span>
                <input title="harga"type="text" name="harga" autocomplete="off" required class="form-control" value="{{$row->harga}}">
				</div><br>	
		</div>
		</div><div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Gambar </span>
                <input title="gambar"type="text" name="gambar" autocomplete="off" required class="form-control" value="{{$row->gambar}}">
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
      </div>
</section>
    @endforeach	
@endsection