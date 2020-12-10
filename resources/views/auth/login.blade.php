<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Boa Vida</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="welcome">
            <div class="pinkbox">
                <div class="signup nodisplay">
                </div>
                <div class="signin">
                    <h1 class="title"><span>Iniciar sesion</h1>
                    <hr grey width="75%" />
                    <form class="more-padding" autocomplete="off">
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <div class="checkbox">
                            <input type="checkbox" id="remember" /><label for="remember">Guardar</label>
                        </div>
                        <button class="button submit">Ingresar</button>
                    </form>
                </div>
            </div>
            <div class="rightbox">
                <img class="flower" src="https://i.ibb.co/sg1Wt1v/31389384-217395775700141-2074199862273900544-o.jpg" alt="" />
            </div>
        </div>
    </div>
    <!-- partial -->

</body>

</html>
