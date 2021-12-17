
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="site/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="site/style.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">
</head>
<body class="form-v4">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    iStudy
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>iStudy</h2>
				<p class="text-1">Bem vindo, professor!</p>
				<p class="text-2">Cadastre sua disciplina, tópicos tratados e insira arquivos para seus alunos</p>
                <p class="text-2">OBS: Você deve cadastrar 3 tópicos para a sua disciplina</p>
			</div>
			<form class="form-detail" action="#" method="post" id="myform">
                @csrf
				<h2>Cadastro de disciplina</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">Nome da Disciplina</label>
						<input type="text" name="disciplina" id="disciplina" class="input-text">
					</div>
				</div>
				<div class="form-row">
					<label for="your_email">Tópico 1</label>
					<input type="text" name="top1" id="top1" class="input-text">
				</div>
                <div class="form-row">
					<label for="your_email">Tópico 2</label>
					<input type="text" name="top2" id="top2" class="input-text">
				</div>
                <div class="form-row">
					<label for="your_email">Tópico 3</label>
					<input type="text" name="top3" id="top3" class="input-text">
				</div>
				<div class="form-group">
					<div class="form-row">
						<label for="password">Faça o upload de algum arquivo ou video-aula</label>
						<input type="file" id="myFile" name="filename">
                    </div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Cadastrar">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	messages: {
		  		disciplina: {
		  			required: "Por favor, insira o nome da Disciplina"
		  		},
		  		top1: {
		  			required: "Por favor, insira o Tópico 1"
		  		},
		  		top2: {
		  			required: "Por favor, insira o Tópico 2"
		  		},
		  		top3: {
	  				required: "Por favor, insira o tópico 3"
		  		},
		  	}
		});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
