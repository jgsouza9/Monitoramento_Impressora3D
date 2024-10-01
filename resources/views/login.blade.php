<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>Hawkin - Entrar</title>

    @vite('resources/css/loginPage.css')
</head>
<body>
    <div class ="containerOut">
        <form action="{{ route('ip.login') }}" method="post">
            @csrf
            <div class="containerIn">
                <div class="logo">
                    hawkin
                </div>
                <div class="input-container">
                    <input type="text" name="ip_address" placeholder="Digite seu IP">
                </div>
                <button class="button" id="btnEnviar" type="submit">Entrar</button>
                @if($errors->any())
                    @include('accessDenied')
                @endif
            </div>
        </form>
    </div>
</body>
</html>