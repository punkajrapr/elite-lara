<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elite Base</title>
    @section('top-style')
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->

	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    @show
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Elite Base</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
				</ul>
			</div>
		</div>
	</nav>
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked">
                <?php $moderRouts=\App\Myclasses\Arrays::moderRouts();
                $curRoute = \Route::currentRouteName();
                ?>
                    @foreach($moderRouts as $name =>$value)
                        @if($name==$curRoute)
                            <li role="presentation" class="active"><a href="{{route($name)}}">{{$value}}</a></li>
                        @else
                            <li role="presentation"><a href="{{route($name)}}">{{$value}}</a></li>
                        @endif

                    @endforeach
            </ul>
        </div>
        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
	<!-- Scripts -->
    @section('scripts')
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
    <script>
        $('#region_search').keypress(function()
        {
            string = $('#region_search').val();
            if(string.length > 1 && string.length < 3)
            {
                data = 'string='+string;
                token = $("#_token").attr('data');
                data += '&_token='+token;
                $.ajax({
                    'type':'POST',
                    'url':'/getregionletter',
                    'data':data,
                    'success':function(data){
                        $('#regions').append(data);

                    },
                    'error':function(msg){
                        $('#result').append(msg)}
                });
            }
        });
    </script>
    @show
</body>
</html>
