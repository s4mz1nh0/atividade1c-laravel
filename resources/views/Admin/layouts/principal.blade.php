<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>DownGames</title>
</head>
<body>
    
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo">DownGames</a>
                <ul class="right">
                    <li>
                        <a href="#">Downloads</a>
                    </li>
                    <li>
                        <a href="#">Sobre</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('conteudo-principal')
    </div>
   
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>