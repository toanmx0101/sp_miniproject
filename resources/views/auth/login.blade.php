@extends('layouts.home')
@section('title')
    Login
@stop
@section('content')
<div class="breadcrumbs bordercolor">
	<div class="breadcrumbs_inner">
		<a href="/" title="return to Home">Home</a>
		<span class="navigation-pipe">></span>
		<span class="navigation_page">Login</span>
	</div>	
</div>
<h1>Log in</h1>
<div class="">
    <div >
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="" name="email" value="{{ old('email') }}" style="width: 212px;height: 30px;border: 1px solid #f1f1f1;background: #f1f1f1;font: normal 12px Arial;">

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
                            <input id="password" type="password" class="" name="password" style="width: 212px;height: 30px;border: 1px solid #f1f1f1;background: #f1f1f1;font: normal 12px Arial;">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="" style="height: 27px !important;display: inline-block;padding: 0 10px;background: #2e2e2e;border: none;font: 12px Arial !important;color: #fff !important;text-decoration: none !important;text-align: center;cursor: pointer;">
                                <i class="fa fa-btn fa-sign-in"></i> Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
