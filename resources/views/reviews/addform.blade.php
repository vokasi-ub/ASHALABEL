@extends('layouts.master')
@section('content')

  
    <!-- Main content -->
    <section class="content">
      <div class="row">
	  <div class="col-md-12">
			 <div class="box">
	   <form action="{{url('tambahdataReview')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                <span class="input-group-addon"><i class="fa fa-tags"></i> Nama </span>
                <input title="nama"type="text" name="nama" autocomplete="off" required class="form-control">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Email </span>
                <input title="email"type="text" name="email" autocomplete="off" required class="form-control">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Review </span>
                <input title="review"type="text" name="review" autocomplete="off" required class="form-control">
				</div><br>	
		</div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Status</span>
                <input title="status"type="text" name="status" autocomplete="off" required class="form-control">
				</div><br>	
		</div>
		</div><div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Tanggal </span>
                <input title="tanggal"type="date" name="tanggal" autocomplete="off" required class="form-control">
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