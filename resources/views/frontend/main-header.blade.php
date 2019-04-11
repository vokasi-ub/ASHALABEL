
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
		
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
							ASHALABEL FASHION
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="#1">Home</a>
							</li>

							<li>
								<a href="#2">Shop</a>
							</li>
							
							<li>
								<a href="#3">About</a>
							</li>
						</ul>
					</div>	
					
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						    @if (Route::has('login'))

						  @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
						&nbsp &nbsp &nbsp
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
						 @endif
					</div>

				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>


			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">

			<ul class="main-menu-m">
				<li>
					<a href="#1">Home</a>
				</li>

				<li>
					<a href="#2">Shop</a>
				</li>
				<li>
					<a href="#3">About</a>
				</li>

				
			</ul>
		</div>

	

