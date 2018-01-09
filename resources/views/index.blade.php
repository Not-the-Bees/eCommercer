<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    </head>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active carousel-back-green">
                    <div class="carousel-caption">
                        <div class="container">
                            <table border="0">
                                <tr>
                                    <td width="30%" class="hidden-xs">
                                        <img src="images/mampLogoCarouselLeft.png" style="width:100%">
                                    </td>
                                    <td>
                                        <h1>Welcome!</h1>
                                        <h2>MAMP has been installed successfully.</h2>
                                    </td>
                                    <td width="30%" class="hidden-xs">
                                        <img src="images/checkmarkCarouselRight.png" style="width:100%">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="item carousel-back-green">
                    <div class="carousel-caption">
                        <div class="container">
                            <table border="0">
                                <tr>
                                    <td width="30%" class="hidden-xs">
                                        <img src="feed/images/627.png" style="width:100%">
                                    </td>
                                    <td style="padding-top:0px;">
                                        <h1>MAMP.TV</h1><h2>MAMP & MAMP PRO Screencasts</h2><p style="margin-top:10px;"><a class="btn btn-lg btn-primary" href="http://www.mamp.info/en/mamp_windows_beta.html" target="_blank" role="button">Watch MAMP.TV</a></p>									</td>
                                    <td width="30%" class="hidden-xs">
                                        <img src="feed/images/830.png" style="width:100%">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
    </body>
</html>