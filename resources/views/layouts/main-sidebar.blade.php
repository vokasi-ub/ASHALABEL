<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/tema/dist/img/user0.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		
		<li class="active">
          <a href="{{url('dashboard')}}">
            <i class="fa fa-home"></i> <span>HOME</span>
           
          </a>
          
        </li>  
		
        <li class="active">
          <a href="{{url('category')}}">
            <i class="fa fa-server"></i> <span>Kategori</span>
           
          </a>
          
        </li>   

			 <li class="active">
          <a href="{{url('sub_cat')}}">
            <i class="fa fa-dashboard"></i> <span>Sub Kategori</span>

          </a>
          
        </li> 
		
		<li class="active">
          <a href="{{url('product')}}">
            <i class="fa fa-cube"></i> <span>Produk</span>
            
          </a>
          
        </li>
		
		<li class="active">
          <a href="{{url('transation')}}">
            <i class="fa fa-newspaper-o"></i> <span>Rekap Transaksi</span>
            
          </a>
        </li>
		
		<li class="active">
          <a href="{{url('reviews')}}">
            <i class="fa fa-pencil-square-o"></i> <span>Review</span>
            
          </a>
        </li>
              </ul>
    </section>
    