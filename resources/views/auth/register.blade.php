@extends('layouts.partials.effects')

@section('content')
<div id="main">
    <div class="row-fluid">
        <div class="span8">
            <div class="box box-bordered box-color">
                <div class="box-title">
                    <h3><i class="icon-th-list"></i> BECOME A MEMBER</h3>
                </div>
                <div class="box-content nopadding">
                    <form action="{{ url('/register') }}" method="POST" class='form-horizontal form-bordered'>
                        {{ csrf_field() }}

                        <div class="control-group">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="textfield" class="control-label">username</label>
                                <div class="controls">

                                    <input type="text" name="name" id="textfield" placeholder="Text input" class="input-xlarge" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                <label for="textfield" class="control-label">Date of Birth</label>
                                <div class="controls">

                                    <input type="text" name="birthdate" placeholder="YEAR-MONTH-DAY" class="input-xlarge" value="{{ old('birthdate') }}">
                                    @if ($errors->has('birthdate'))
                                    <span class="help-block">

                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label class="control-label">Select Gender</label>
                                <div class="controls">
                                    <label class='radio'>
                                        <input type="radio" name="gender" value="MALE"> MALE
                                        @if ($errors->has('gender'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                        @endif
                                    </label>
                                    <label class='radio'>
                                        <input type="radio" name="gender" value="FEMALE"> FEMALE
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="textfield" class="control-label">Email</label>

                                <div class="controls">

                                    <input type="email" name="email" id="textfield" placeholder="Email" class="input-xlarge" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <div class="controls">
                                    <input type="password" name="password" id="password" placeholder="Password input" class="input-xlarge" value="{{old('password')}}">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <div class="controls">
                                    <input type="password" name="password_confirmation" id="password" placeholder="Password input" class="input-xlarge" value="{{old('password')}}">
                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!--<div class="control-group">
                            <label class="control-label">Checkboxes<small>More information here</small></label>
                            <div class="controls">
                                <label class='checkbox'>
                                    <input type="checkbox" name="checkbox"> Lorem ipsum eiusmod
                                </label>
                                <label class='checkbox'>
                                    <input type="checkbox" name="checkbox"> ipsum eiusmod
                                </label>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label for="textarea" class="control-label">Textarea</label>
                            <div class="controls">
                                <textarea name="textarea" id="textarea" rows="5" class="input-block-level">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
                            </div>
                        </div>-->
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">CLICK TO SAVE</button

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--<div class="login-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Register
                        </button>
                    </div>
                </div>
            </form>
        </div>-->


</div>



@endsection
