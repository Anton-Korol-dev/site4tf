<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Transformers: {{ $header_title }}</title>
    </head>
    <body>
        <header>
            <img src="/images/Logo/Logo_TfEW.png" alt="Лого Игры" width="261" height="110">
        </header>

        <h1 class="title">Transformers: {{ $title }}</h1>

        <div class="content">
            @yield('contents')
        </div>

        <footer class="container-fluid" role="content_info">
            <a href="http://facebook.com/TFEARTHWARS/"><img class="social-card" src="/images/Social/Social_Facebook.png"></a>
            <a href="https://twitter.com/TransformersWar"><img class="social-card" src="/images/Social/Social_Twitter.png"></a>
            <a href="https://www.youtube.com/channel/UCO-b9b0-yJxFucqH7ADKGmg"><img class="social-card" src="/images/Social/Social_Youtube.png"></a>
            <a href="https://www.instagram.com/transformersearthwars/"><img class="social-card" src="/images/Social/Social_Instagram.png"></a>
            <p>
                <a href="http://www.spaceapegames.com/terms-conditions/">Terms & Conditions</a> | <a href="http://www.spaceapegames.com/privacy-policy/">Privacy Policy</a>
            </p>

            <p>
                <a href="https://itunes.apple.com/app/transformers-earth-wars/id1058526204"><img class="download-now" src="/images/Social/Button_AppStore.png"></a>
                <a href="https://play.google.com/store/apps/details?id=com.backflipstudios.transformersearthwars"><img class="download-now" src="/images/Social/Button_GooglePlay.png"></a>
            </p>

            <a href="http://www.spaceapegames.com/"><img class="spaceape-logo" src="/images/Logo/Logo_SpaceApe.png"/></a>
            <div>&copy; 2017 Space Ape Games. All Rights Reserved.</div>
        </footer>
    </body>
</html>