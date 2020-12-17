<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>@yield('title')</title>
        <meta name = "description" content="ITで稼ぎたいシリョタのページ">

        <!-- CSS -->
            <link href="{{asset('css/ress.css')}}" rel="stylesheet">
            <link href="{{asset('css/style.css')}}" rel="stylesheet">
            

        <!-- Favicon -->
            <link rel = "icon" type = "image/png" href = "images/favi.png">
    </head>

    <body>
        <div id="home" class="big-bg">
            <header class = "page-header wrapper">
                @component('components.header')
                    @slot('PageTitle')
                        
                    @endslot
                @endcomponent
            </header>
        
            <div class="home-content wrapper">
                <h2 class="page-title">Challenge technology!</h2>
                <h3 class="page-comment"><p>挑戦してみた技術（言語）の一覧。皆様のお力になれれば。</p></h3>
            </div><!-- /.home-content -->
        </div><!-- /#home -->

        本サイトについて
        本サイトはシリョタのポートフォリオサイトです。
        作成したものについては本サイトに載せていきます。

        作成したもの

        @yield('portfolio')
        
        <footer>
            @include('components.footer')
        </footer>

    </body>
</html>