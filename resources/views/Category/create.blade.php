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
	<link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- NProgress -->
	<link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
	<!-- iCheck -->
	<link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="{{ asset('assets/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
	<!-- Select2 -->
	<link href="{{ asset('assets/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
	<!-- Switchery -->
	<link href="{{ asset('assets/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
	<!-- starrr -->
	<link href="{{ asset('assets/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

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

			<!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 align='center'>Form Input Category</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" id="" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Image: <span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="file" name="image" onchange="readURL(this)" class="">
                                            <img id="blah" width="90" height="100" src="" alt="" class="img-fluid">
                                                @if ($errors->has('image'))
                                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Name : <span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" name="name" class="form-control">
                                            <span class="fa fa-question form-control-feedback right" aria-hidden="true"></span>
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Scientific Name : </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" name="scientific">
                                            <span class="fa fa-github form-control-feedback right" aria-hidden="true"></span>
                                                @if ($errors->has('scientific'))
                                                    <span class="text-danger">{{ $errors->first('scientific') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Category : </label>
                                        <div class="col-md-6 col-sm-6 ">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="category" value="Flora" class="flat"> Flora
                                            </label>
                                            <label class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="category" value="Fauna" class="flat"> Fauna
                                            </label>
                                        </div>
                                        @if ($errors->has('category'))
                                            <span class="text-danger">{{ $errors->first('category') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Since Time : </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <div class="btn-group" data-toggle="button">
                                                <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="since" value="Azoikum" class="flat"> Azoikum
                                                </label>
                                                <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="since" value="Paleozoikum" class="flat"> Paleozoikum
                                                </label>
                                                <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="since" value="Mesozoikum" class="flat"> Mesozoikum
                                                </label>
                                                <label for="" class="" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="since" value="Neozoikum" class="flat"> Neozoikum
                                                </label>
                                            </div>
                                            <!--<select class="form-control" name="since">
                                                <option value=""></option>
                                                <option value="Azoikum">Azoikum</option>
                                                <option value="Paleozoikum">Paleozoikum</option>
                                                <option value="Mesozoikum">Mesozoikum</option>
                                                <option value="Neozoikum">Neozoikum</option>
                                            </select>-->
                                            @if ($errors->has('since'))
                                                <span class="text-danger">{{ $errors->first('since') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Genus : </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" name="species">
                                            <span class="glyphicon glyphicon-tree-deciduous form-control-feedback right" aria-hidden="true"></span>
                                                @if ($errors->has('species'))
                                                    <span class="text-danger">{{ $errors->first('species') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="" class="col-form-label col-md-3 col-sm-3 label-align">Type : </label>
                                        <div class="col-md-6 col-sm-6" >
                                            <select name="type" id="" class="form-control">
                                                <option value=""></option>
                                                <option value="FLORA">FLORA</option>
                                                <option value="Herbivora">Herbivora</option>
                                                <option value="Karnivora">Karnivora</option>
                                                <option value="Omnivora">Omnivora</option>

                                                <!--<input type="checkbox" value="Flora" class="flat">If Flora Check List This Button! <br/>
                                                <input type="checkbox" value="Herbovora" class="flat">Herbivora <br/>
                                                <input type="checkbox" value="Kanivora" class="flat">Karnivora <br/>
                                                <input type="checkbox" value="Omnivora" class="flat">Omnivora <br/>-->
                                            </select>
                                            <span class="fa fa-leaf form-control-feedback right" aria-hidden="true"></span>
                                            @if ($errors->has('type'))
                                                <span class="text-danger">{{ $errors->first('type') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button class="btn btn-dark" type="button" text="white">
                                                <a href="{{route ('category.index')}}" text="white">Cancel & Back</a>
                                            </button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
	<!-- bootstrap-progressbar -->
	<script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
	<!-- iCheck -->
	<script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="{{ asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
	<script src="{{ asset('assets/vendors/google-code-prettify/src/prettify.js') }}"></script>
	<!-- jQuery Tags Input -->
	<script src="{{ asset('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
	<!-- Switchery -->
	<script src="{{ asset('assets/vendors/switchery/dist/switchery.min.js') }}"></script>
	<!-- Select2 -->
	<script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
	<!-- Parsley -->
	<script src="{{ asset('assets/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
	<!-- Autosize -->
	<script src="{{ asset('assets/vendors/autosize/dist/autosize.min.js') }}"></script>
	<!-- jQuery autocomplete -->
	<script src="{{ asset('assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
	<!-- starrr -->
	<script src="{{ asset('assets/vendors/starrr/dist/starrr.js') }}"></script>
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
