<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Danone Project! | </title>

	<!-- Bootstrap -->
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->

    <link href="{{ asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="{{route('home')}}" class="site_title"><i class="fa  fa-github-alt"></i><b><span class="btn btn-sm text-white">Danone Project</span></b></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="{{ asset('assets/images/pp.jpg') }}" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>{{ Auth::user()->name }}</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{route('home')}}">Dashboard</a></li>
										<li><a href="/sorry">Dashboard2</a></li>
										<li><a href="/sorry">Dashboard3</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/sorry">General Form</a></li>
										<li><a href="/sorry">Advanced Components</a></li>
										<li><a href="/sorry">Form Validation</a></li>
										<li><a href="/sorry">Form Wizard</a></li>
										<li><a href="/sorry">Form Upload</a></li>
										<li><a href="/sorry">Form Buttons</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/sorry">General Elements</a></li>
										<li><a href="/sorry">Media Gallery</a></li>
										<li><a href="/sorry">Typography</a></li>
										<li><a href="/sorry">Icons</a></li>
										<li><a href="/sorry">Glyphicons</a></li>
										<li><a href="/sorry">Widgets</a></li>
										<li><a href="/sorry">Invoice</a></li>
										<li><a href="/sorry">Inbox</a></li>
										<li><a href="/sorry">Calendar</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{route('category.index')}}">Category Table</a></li>
										<li><a href="{{route('product.index')}}">Product Table</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/sorry">Chart JS</a></li>
										<li><a href="/sorry">Chart JS2</a></li>
										<li><a href="/sorry">Moris JS</a></li>
										<li><a href="/sorry">ECharts</a></li>
										<li><a href="/sorry">Other Charts</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/sorry">Fixed Sidebar</a></li>
										<li><a href="/sorry">Fixed Footer</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="menu_section">
							<h3>Live On</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/sorry">E-commerce</a></li>
										<li><a href="/sorry">Projects</a></li>
										<li><a href="/sorry">Project Detail</a></li>
										<li><a href="/sorry">Contacts</a></li>
										<li><a href="/sorry">Profile</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="/sorry">403 Error</a></li>
										<li><a href="/sorry">404 Error</a></li>
										<li><a href="/sorry">500 Error</a></li>
										<li><a href="/sorry">Plain Page</a></li>
										<li><a href="{{route('logout')}}">Login Page</a></li>
										<li><a href="/sorry">Pricing Tables</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="#level1_1">Level One</a>
										<li><a>Level One<span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu">
												<li class="sub_menu"><a href="level2.html">Level Two</a>
												</li>
												<li><a href="/sorry">Level Two</a>
												</li>
												<li><a href="/sorry">Level Two</a>
												</li>
											</ul>
										</li>
										<li><a href="/sorry">Level One</a>
										</li>
									</ul>
								</li>
								<li><a href="/sorry"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="{{ asset('assets/images/pp.jpg') }}" alt="">{{ Auth::user()->name }}
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Settings</span>
									</a>
									<a class="dropdown-item" href="javascript:;">Help</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                        @csrf
                                        <button class="dropdown-item"><i class="fa fa-sign-out pull-right"></i>Log Out</button>
                                    </form>
								</div>
							</li>

							<li role="presentation" class="nav-item dropdown open">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
								</a>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="{{ asset('assets/images/pp.jpg') }}" alt="Profile Image" /></span>
											<span>
												<span>{{ Auth::user()->name }}</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="{{ asset('assets/images/pp.jpg') }}" alt="Profile Image" /></span>
											<span>
												<span>{{ Auth::user()->name }}</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="{{ asset('assets/images/pp.jpg') }}" alt="Profile Image" /></span>
											<span>
												<span>{{ Auth::user()->name }}</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="{{ asset('assets/images/pp.jpg') }}" alt="Profile Image" /></span>
											<span>
												<span>{{ Auth::user()->name }}</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<div class="text-center">
											<a class="dropdown-item">
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

            <!-- Page Content -->
            <div class="right_col" role="main">
                <div class="">
                <div class="page-title">
                    <div class="title_left">
                    <h3><small></small></h3>
                    </div>

                    <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for..." name="search" id="search">
                        <span class="input-group-btn">

                            <button class="btn btn-secondary" type="submit">Go!</button>
                            </form>
                        </span>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tabel Product<small>Danone Project!</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                    </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                                </ul>
                                <div class="clearfix"></div>
                        </div>
                            <a href="{{route('product.create')}}" class="btn btn-info ">
                                <i class="fa fa-plus"> Add A New Product</i>
                            </a> <br><br>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                    <table id="datatable-fixed-header" class="table table-hover table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>No : </th>
                            <th>Image : </th>
                            <th>Code : </th>
                            <th>Name : </th>
                            <th>Netto : </th>
                            <th>Stock : </th>
                            <th>Price : </th>
                            <th>Expired : </th>
                            <th>Action : </th>
                        </tr>
                        </thead>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($data_product as $key => $product)
                        <tbody>
                        <tr>
                            <td>{{$data_product->firstItem() + $key}}</td>
                            <td>
                                <img src="{{asset ('storage/Product/'. $product->image) }}" class="img-fluid" width="100" height="100" alt="" />
                            </td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->netto}}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->expired}}</td>
                            <td>
                                <a href="{{route ('product.edit', $product->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>

                                <form action="{{route ('product.destroy', $product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                            Showing
                            {{$data_product->firstItem()}}
                            to
                            {{$data_product->lastItem()}}
                            of
                            ?
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                <ul class="pagination">
                                    {{ $data_product->links() }}
                                    {{-- <li class="paginate_button previous disabled" id="datatable_previous">
                                        <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a>
                                    </li>
                                <li class="paginate_button active">
                                    <a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a>
                                </li>
                                <li class="paginate_button next" id="datatable_next">
                                    <a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a>
                                </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
                </div>
            </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    </body>
</html>
