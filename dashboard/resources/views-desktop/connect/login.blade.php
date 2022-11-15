<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="routeName" content="{{ Route::currentRouteName() }}">

	<link rel="icon" href="{{ url('/favicon.ico') }}" type="image/x-icon">
	<title>{{ __('lg.connect.login') }} - No te quedes sin carrete</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="{{ url('/static/css/connect.css') }}">
	<script type="text/javascript" src="{{ url('/static/js/app.js?v='.time())}}"></script>
	<script type="text/javascript" src="{{ url('/static/js/connect.js?v='.time())}}"></script>

</head>
<body>
	@include ('components.loader_action')
	<div class="page">
		<div class="box shadow">
			<div class="logo">
				<img src="{{ url('/static/images/logo.png')}}" alt="{{ config('cms.app_name')}}">
			</div>
			<h2 class="title">{{__('lg.connect.login')}}</h2>
			<div class="form mtop16">
				{!! Form::open(['url'=>'/', 'id'=> 'form_connect_login']) !!}
				<label for="email">{{__('lg.connect.email')}}:</label>
				<div class="group">
					<i class="bi bi-envelope-open"></i>
					{!! Form::email('email', null, ['class'=>'imput']) !!}
				</div>
				<label for="password" class="mtop16">{{__('lg.connect.password')}}:</label>
				<div class="group">
					<i class="bi bi-fingerprint"></i>
					{!! Form::password('password', null, ['class'=>'imput']) !!}
				</div>
				{!! Form::submit(__('lg.connect.connect'), ['class'=>'btn transition mtop16']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>


</body>
</html>