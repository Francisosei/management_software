
	<div class="container-fluid" id="content">
		<div id="left">
			
			  @if( Auth::user()->role=='admin')
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>COMPANY</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/company')}}">Registered Companies</a>
					</li>
					<li>
						<a href="{{url('/companys/create')}}">Add Company</a>
					</li>
					
				</ul>
			</div>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>STUDENT</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/student')}}">Registered Student</a>
					</li>
					<li>
						<a href="{{url('/pages/create')}}">Add Student</a>
					</li>
					
				</ul>
			</div>
                    <div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>POST</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/available')}}">Available Post</a>
					</li>
					<li>
						<a href="{{url('/create_post')}}">Add Post</a>
					</li>
					
				</ul>
			</div>
			@endif
                        @if(Auth::user()->role=='Company')
                        <div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>STUDENT</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/student')}}">Registered Student</a>
					</li>
					<li>
						<a href="{{url('/application')}}">Applied Jobs</a>
					</li>
					
				</ul>
			</div>
                        <div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>POST</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/jobsApplied')}}">Available Post</a>
					</li>
					<li>
						<a href="{{url('/create_post')}}">Add Post</a>
					</li>
					
				</ul>
			</div>
                        @endif
			  @if( Auth::user()->role=='Student')
                          <div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>STUDENT</span></a>
				</div>
				<ul class="subnav-menu">
					
					<li>
                                            <a href="{{url('/pages/create')}}"><strong>Add Student<strong></a>
					</li>
                                        <li>
                                            <a href="{{url('/record')}}"><strong>Update Records<strong></a>
					</li>
					
				</ul>
			</div>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>POST</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
                                            <a href="{{url('/available')}}"><strong>Available Post</strong></a>
					</li>
					<li>
						<a href="{{url('/create_post')}}">Add Post</a>
					</li>
					
				</ul>
			</div>


			  @endif
                          
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Manage Account</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="{{url('/profile')}}">Profile</a>
					</li>
					
					<li>
						<a href="{{url('/logout')}}">Logout</a>
					</li>
				</ul>
			</div>
		</div>