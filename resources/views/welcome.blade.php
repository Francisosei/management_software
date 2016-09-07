@extends('layouts.partials.effects')
@section('content')

<body class='login'>
	<div class="wrapper">
		<h1><a href="index.html"><img src="img/logo-big.png" alt="" class='retina-ready' width="59" height="49">MICROSYS</a></h1>
		<div class="login-body">
			<h2>SIGN IN</h2>
                        <form role="form"  action="{{url('/login')}}" method='POST'>
                            {{ csrf_field() }}
				<div class="email">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<input type="text" name='email' placeholder="Email address" class='input-block-level'>
                                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
				</div>
                                </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<div class="password">
                                    
					<input type="password" name="password" placeholder="Password" class='input-block-level'>
                                         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				</div>
                            </div>
				<div class="submit">
					<input type="submit" value="Sign me in" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget">
				<a href="#"><span>Forgot password?</span></a>
			</div>
		</div>
	</div>
</body>
@stop