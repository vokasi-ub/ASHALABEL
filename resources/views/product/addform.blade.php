@extends('layouts.master')
@section('content')

  
    <!-- Main content -->
    <section class="content">
      <div class="row">
	  <div class="col-md-12">
			 <div class="box">
	   <form action="{{url('tambahdataProduk')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Form add data produk</h3>
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
												@foreach ($sub_kategori as $Asub)
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
          <!-- /.box -->
@endsection