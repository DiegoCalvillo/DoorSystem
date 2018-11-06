<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DoorSystem</title>

    <!-- Bootstrap Core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    {!! Html::style('css/bootstrap.min.css') !!}

    <!-- Logo de MDY icono de pagina -->
    <link rel="icon" type="text/css" href="MDY_Logo.png" sizes="32x32">

</head>

<body>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">DoorSystem</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'login/store', 'method' => 'POST']) !!}
                        @include('alerts.errors')
                        @include('alerts.request')
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nombre de Usuario" name="name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Iniciar sesión</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery 
    <script src="js/jquery.js"></script>-->
    {!!Html::script('js/jquery.js')!!}

    <!-- Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script> -->
    {!!Html::script('js/bootstrap.min.js')!!}


</body>

</html>
