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
			
            <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" onclick="printDiv('printableArea')">
												Cetak
			</button>
            <!-- /.box-header -->
            <div class="box-body" id="printableArea">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th> ID</th>
				<th> Nama Produk </th>
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
                <td>{{$Atrans->produk->nama}}</td>
                <td>{{$Atrans->nama}}</td>
                <td>{{$Atrans->alamat}}</td>
                <td>{{$Atrans->tanggal}}</td>
                <td>{{$Atrans->jumlah}}</td>
                <td>Rp.{{number_format($Atrans->total_harga,0)}}</td>
                <td>
                  <a href="hapusTrans/{{$Atrans->id}}" onClick="return confirm('Are you sure you want to delete?')">
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

<script type="text/javascript">
			function printDiv(divName) {
			 var printContents = document.getElementById(divName).innerHTML;
			 var originalContents = document.body.innerHTML;

			 document.body.innerHTML = printContents;

			 window.print();

			 document.body.innerHTML = originalContents;
		}
	</script>
          <!-- /.box -->
@endsection