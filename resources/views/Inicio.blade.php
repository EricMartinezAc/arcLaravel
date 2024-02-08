<!DOCTYPE html>
<html lang="es">

<head>
    <title>IMControllers - INDEX</title>
    <meta charset="UTF-8">
    <meta name="title" content="imcontrollersweb">
    <meta name="description" content="prototipo001web">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href={{ asset('assets/fwork/internal/css_index/estilo_index.css') }} rel="stylesheet">
    <link rel="shortcut icon" href= {{ asset("assets/fwork/internal/Img/logo/arclogo.ico")}} />
</head>

<body>
    <div class="login-content">
        <div class="login-wrap">
            <img src={{ asset("assets/fwork/internal/Img/logo/arclogo.png") }} alt="log" srcset="">
            <br>
            <div class="tabs">
                <div class="tab_">
                    <input id="tab1" onclick="setVisibleform_auth_index()" type="radio" name="tab"  checked>
                    <label for="tab1">Sign In</label>
                </div>
                
                <div  class="tab_">
                    <input id="tab2" onclick="setVisibleform_rec_user()" type="radio" name="tab">
                    <label for="tab2">Recover User</label>
                </div>
            </div>
            <div class="login-form">
                <form id="auth_index" class="form_" method="POST" action="Controllers/Queries/AuthUsuario.php">
                   @include('_partials.signin')
				</form>
                <form id="rec_user"  class="form_" method="POST" action="Controllers/SQL/RecuperarUsuario.php" >
                    @include('_partials.recup')
				</form>
			</div>
			<div class="foot-lnk">
				@include('_partials.footer')
			</div>
		</div>  
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src={{ asset("assets/fwork/internal/js_index/config.js")}}></script>
	</body>
</html>