@extends('layouts.master')
@section('content')

	@foreach ($data as $row)

    <!-- Main content -->
    <section class="content">
      <div class="row">
	  <div class="col-md-12">
			 <div class="box">
	   <form action="<?php echo url('updateTrans/'.$row->idTransaksi)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form edit data transaksi</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> ID Produk </span>
                <input title="idProduk"type="text" name="idProduk" autocomplete="off" required class="form-control" value="{{$row->idProduk}}">
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
                <span class="input-group-addon"><i class="fa fa-tags"></i> Alamat </span>
                <input title="alamat"type="text" name="alamat" autocomplete="off" required class="form-control" value="{{$row->alamat}}">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Tanggal </span>
                <input title="tanggal"type="timestamp" name="tanggal" autocomplete="off" required class="form-control" value="{{$row->tanggal}}">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Jumlah </span>
                <input title="jumlah"type="text" name="jumlah" autocomplete="off" required class="form-control" value="{{$row->jumlah}}">
				</div><br>	
		</div>
		</div><div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Total Harga </span>
                <input title="total_harga"type="text" name="total_harga" autocomplete="off" required class="form-control" value="{{$row->total_harga}}">
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