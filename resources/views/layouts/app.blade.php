<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!--banner-->        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>
        <!--banner end-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">      
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
        <!-- Apple devices fullscreen -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title>CHURCH MANAGEMENT SYSTEM</title>

        <!-- Bootstrap -->
        <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
        <!--banner-->
        <link rel="stylesheet" href="{{URL::asset('css/demo.css')}}">
        <!--banner end-->
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <!-- Bootstrap responsive -->
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap-responsive.min.css')}}">
        <!-- jQuery UI -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/jquery-ui/smoothness/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/plugins/jquery-ui/smoothness/jquery.ui.theme.css')}}">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
        <!-- Color CSS -->
        <link rel="stylesheet" href="{{URL::asset('css/themes.css')}}">
        <!-- jQuery UI -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/jquery-ui/smoothness/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/plugins/jquery-ui/smoothness/jquery.ui.theme.css')}}">
        <!-- PageGuide -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/pageguide/pageguide.css')}}">
        <!-- Tagsinput -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/tagsinput/jquery.tagsinput.css')}}">
        <!-- chosen -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/chosen/chosen.css')}}">
        <!-- multi select -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/multiselect/multi-select.css')}}">
        <!-- timepicker -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/timepicker/bootstrap-timepicker.min.css')}}">
        <!-- colorpicker -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/colorpicker/colorpicker.css')}}">
        <!-- Datepicker -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/datepicker/datepicker.css')}}">
        <!-- Plupload -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/plupload/jquery.plupload.queue.css')}}">
        <!-- dataTables -->
        <link rel="stylesheet" href="{{URL::asset('css/plugins/datatable/TableTools.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/plugins/chosen/chosen.css')}}">
         <link rel="stylesheet" href="{{URL::asset('css/dataTables.bootstrap.min.css')}}">
         <link rel="stylesheet" href="{{URL::asset('css/jquery.dataTables.min.css')}}">



        <!-- jQuery -->
        <!-- Chosen -->
        <script src="{{URL::asset('js/plugins/chosen/chosen.jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery-1.min.js')}}"></script>
        <!-- jQuery UI -->
        <script src="{{URL::asset('js/plugins/jquery-ui/jquery.ui.core.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/jquery-ui/jquery.ui.widget.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/jquery-ui/jquery.ui.mouse.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/jquery-ui/jquery.ui.resizable.min.js')}}"></script>
        <!-- slimScroll -->
        <script src="{{URL::asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <!-- Bootbox -->
        <script src="{{URL::asset('js/plugins/bootbox/jquery.bootbox.js')}}"></script>
        <script src="{{URL::asset('js/plugins/jquery-ui/jquery.ui.spinner.js')}}"></script>
        <!-- Bootbox -->
        <script src="{{URL::asset('js/plugins/form/jquery.form.min.js')}}"></script>

        <!-- Masked inputs -->
        <script src="{{URL::asset('js/plugins/maskedinput/jquery.maskedinput.min.js')}}"></script>
        <!-- TagsInput -->
        <script src="{{URL::asset('js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
        <!-- Datepicker -->
        <script src="{{URL::asset('js/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
        <!-- Timepicker -->
        <script src="{{URL::asset('js/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
        <!-- Colorpicker -->
        <script src="{{URL::asset('js/plugins/colorpicker/bootstrap-colorpicker.js')}}"></script>
        <!-- Chosen -->
        <script src="{{URL::asset('js/plugins/chosen/chosen.jquery.min.js')}}"></script>
        <!-- MultiSelect -->
        <script src="{{URL::asset('js/plugins/multiselect/jquery.multi-select.js')}}"></script>
        <!-- CKEditor -->
        <script src="{{URL::asset('js/plugins/ckeditor/ckeditor.js')}}"></script>
        <!-- PLUpload -->
        <script src="{{URL::asset('js/plugins/plupload/plupload.full.js')}}"></script>
        <script src="{{URL::asset('js/plugins/plupload/jquery.plupload.queue.js')}}"></script>
        <!-- Custom file upload -->
        <script src="{{URL::asset('js/plugins/fileupload/bootstrap-fileupload.min.js')}}"></script>
        <!-- dataTables -->
        <script src="{{URL::asset('js/plugins/datatable/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/datatable/TableTools.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/datatable/ColReorder.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/datatable/ColVis.min.js')}}"></script>


        <!-- jQuery -->
        <!-- Touch enable for jquery UI -->
        <script src="{{URL::asset('js/plugins/touch-punch/jquery.touch-punch.min.js')}}"></script>
        <!-- slimScroll -->
        <script src="{{URL::asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- vmap -->
        <script src="{{URL::asset('js/plugins/vmap/jquery.vmap.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/vmap/jquery.vmap.world.js')}}"></script>
        <script src="{{URL::asset('js/plugins/vmap/jquery.vmap.sampledata.js')}}"></script>

        <!-- Flot -->
        <script src="{{URL::asset('js/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/flot/jquery.flot.bar.order.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <!-- imagesLoaded -->
        <script src="{{URL::asset('js/plugins/imagesLoaded/jquery.imagesloaded.min.js')}}"></script>
        <!-- PageGuide -->
        <script src="{{URL::asset('js/plugins/pageguide/jquery.pageguide.js')}}"></script>
        <!-- FullCalendar -->
        <script src="{{URL::asset('js/plugins/fullcalendar/fullcalendar.min.js')}}"></script>

<!-- Bootbox -->
	<script src="{{URL::asset('js/plugins/form/jquery.form.min.js')}}"></script>
	<!-- Validation -->
	<script src="{{URL::asset('js/plugins/validation/jquery.validate.min.js')}}"></script>
	<script src="{{URL::asset('js/plugins/validation/additional-methods.min.js')}}"></script>
        <!-- Bootbox -->
	<script src="{{URL::asset('js/plugins/bootbox/jquery.bootbox.js')}}"></script>
	<!-- Form -->
	<script src="{{URL::asset('js/plugins/form/jquery.form.min.js')}}"></script>
	<!-- Wizard -->
	<script src="{{URL::asset('js/plugins/wizard/jquery.form.wizard.min.js')}}"></script>

        <!-- Validation -->
        <script src="{{URL::asset('js/plugins/validation/jquery.validate.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins/validation/additional-methods.min.js')}}"></script>

        <!-- Theme framework -->
        <script src="{{URL::asset('js/eakroko.min.js')}}"></script>
        <!-- Theme scripts -->
        <script src="{{URL::asset('js/application.min.js')}}"></script>
        <!-- Just for demonstration -->
        <script src="{{URL::asset('js/demonstration.min.js')}}"></script>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{URL::asset('img/favicon.ico')}}" />
        <!-- Apple devices Homescreen icon -->
        <link rel="apple-touch-icon-precomposed" href="{{URL::asset('img/apple-touch-icon-precomposed.png')}}" />
         
                         <script src="{{URL::asset('js/jquery-1.11.2.min.js')}}"></script>
                        <script src="{{URL::asset('js/jquery.dataTables.js')}}"></script>
                         <script src="{{URL::asset('js/dataTables.bootstrap.min.js')}}"></script>

        <!-- Styles -->
    </head>



<body>
<div id="navigation">
		<div class="container-fluid">
                    <a href="#" id="brand">MICROSYS</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
			<!--<ul class='main-nav'>
				<li>
					<a href="index.html">
						<i class="icon-home"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-edit"></i>
						<span>Forms</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="forms-basic.html">Basic forms</a>
						</li>
						<li>
							<a href="forms-extended.html">Extended forms</a>
						</li>
						<li>
							<a href="forms-validation.html">Validation</a>
						</li>
						<li>
							<a href="forms-wizard.html">Wizard</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-th-large"></i>
						<span>Components</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="components-messages.html">Messages &amp; Chat</a>
						</li>
						<li>
							<a href="components-gallery.html">Gallery &amp; Thumbs</a>
						</li>
						<li>
							<a href="components-tiles.html">Tiles</a>
						</li>
						<li>
							<a href="components-icons.html">Icons &amp; Buttons</a>
						</li>
						<li>
							<a href="components-elements.html">UI elements</a>
						</li>
						<li>
							<a href="components-typography.html">Typography</a>
						</li>
						<li>
							<a href="components-bootstrap.html">Bootstrap elements</a>
						</li>
						<li>
							<a href="components-grid.html">Grid</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-table"></i>
						<span>Tables</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="tables-basic.html">Basic tables</a>
						</li>
						<li>
							<a href="tables-dynamic.html">Dynamic tables</a>
						</li>
						<li>
							<a href="tables-large.html">Large tables</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-th-large"></i>
						<span>Plugins</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="plugins-charts.html">Charts</a>
						</li>
						<li>
							<a href="plugins-calendar.html">Calendar</a>
						</li>
						<li>
							<a href="plugins-filemanager.html">File manager</a>
						</li>
						<li>
							<a href="plugins-filetrees.html">File trees</a>
						</li>
						<li>
							<a href="plugins-elements.html">Editable elements</a>
						</li>
						<li>
							<a href="plugins-maps.html">Maps</a>
						</li>
					</ul>
				</li>
				<li class='active'>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-th"></i>
						<span>Pages</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="more-error.html">Error pages</a>
						</li>
						<li>
							<a href="more-invoice.html">Invoice</a>
						</li>
						<li>
							<a href="more-userprofile.html">User profile</a>
						</li>
						<li>
							<a href="more-searchresults.html">Search results</a>
						</li>
						<li>
							<a href="more-login.html">Login</a>
						</li>
						<li class='active'>
							<a href="more-blank.html">Blank page</a>
						</li>
					</ul>
				</li>
			</ul>-->
			<div class="user " >
				<ul class="icon-nav">
					
					<!--<li class='dropdown colo'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-tint"></i></a>
						<ul class="dropdown-menu pull-right theme-colors">
							<li class="subtitle">
								Predefined colors
							</li>
							<li>
								<span class='red'></span>
								<span class='orange'></span>
								<span class='green'></span>
								<span class="brown"></span>
								<span class="blue"></span>
								<span class='lime'></span>
								<span class="teal"></span>
								<span class="purple"></span>
								<span class="pink"></span>
								<span class="magenta"></span>
								<span class="grey"></span>
								<span class="darkblue"></span>
								<span class="lightred"></span>
								<span class="lightgrey"></span>
								<span class="satblue"></span>
								<span class="satgreen"></span>
							</li>
						</ul>
					</li>-->
                                        @if(Auth::guest())
                                       
					<li>
						<a href="{{url('/login')}}" class='lock-screen' rel='tooltip' title="Lock screen" data-placement="bottom"><i class="icon-lock"></i></a>
					</li>
				</ul>
                            @else 
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php echo "Welcome"." "; ?>  {{ Auth::user()->name}} <img src="img/demo/user-avatar.jpg" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="{{route('profile',Auth::id())}}">Edit profile</a>
						</li>
						<li>
							<a href="#"></a>
						</li>
						<li>
							<a href="{{url('/logout')}}">Sign out</a>
						</li>
					</ul>
				</div>
                            @endif
                            
			</div>
		</div>
	</div>

<div class="container-fluid" id="content">
		<div id="left">
			<form action="http://www.eakroko.de/flat/search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit"><i class="icon-search"></i></button>
				</div>
			</form>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Collections</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/registered')}}">Registered Members</a>
					</li>
					<li>
						<a href="{{url('/adduser')}}">Add Member</a>
					</li>
					<!--<li>
						<a href="#">Dues</a>
					</li>
					<li>
						<a href="#">Harvest</a>
					</li>
					<li>
						<a href="#">Sundays</a>
					</li>
					<li>
						<a href="#">Revivals</a>
					</li>-->
				</ul>
			</div>
			<!--<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Collections</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('user_form')}}">Register</a>
					</li>
					<li>
						<a href="#">Tithe</a>
					</li>
					<li>
						<a href="#">Dues</a>
					</li>
					<li>
						<a href="#">Harvest</a>
					</li>
					<li>
						<a href="#">Sundays</a>
					</li>
					<li>
						<a href="#">Revivals</a>
					</li>
				</ul>
			</div>-->
			<!--<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Groups</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#">Mens Fellowship</a>
					</li>
					<li>
						<a href="#">Women Fellowship</a>
					</li>
					<li>
						<a href="#">Youth Fellowship</a>
					</li>
					<li>
						<a href="#">Junior Youth</a>
					</li>
					<li>
						<a href="#">Royal Generation</a>
					</li>
				</ul>
			</div>-->
			<!--<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Service</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#">Choir</a>
					</li>
					<li>
						<a href="#">Basic</a>
					</li>
					<li>
						<a href="#">Users</a>
					</li>
					<li>
						<a href="#">Cleaners</a>
					</li>
					<li>
						<a href="#">Bible Readers</a>
					</li>
					<li>
						<a href="#">Sunday Teacher</a>
					</li>
				</ul>
			</div>-->
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Settings</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{route('profile',Auth::id())}}">Edit Profile</a>
					</li>
					<li>
						<a href="{{Auth::id()}}">hjjgjhghjgh</a>
					</li>
					<li>
						<a href="{{url('/logout')}}">Sign out</a>
					</li>
				</ul>
			</div>
		</div>
		
				

        @if(Session::has('flash_message'))
        <div id="alert-message">
            <div class="alert alert-success" >
                <h3 style="margin-left:300px"><span class="glyphicon glyphicon-ok">

                    </span> {!! session('flash_message') !!}</h3>
            </div>
        </div>
        @endif

        @yield('content')

</div>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}} 

     <script type="text/javascript">
            $(document).ready(function() {
            $('#students').DataTable( {
                
            } );
        } );
        
        </script>

</body>
</html>

