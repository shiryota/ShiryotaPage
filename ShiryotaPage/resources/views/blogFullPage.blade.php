<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>{{$item->title}}</title>
        <meta name = "description" content="ITで稼ぎたいシリョタのページ">

        <!-- CSS -->
            <link href="{{asset('css/ress.css')}}" rel="stylesheet">
            <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!-- Favicon -->
            <link rel = "icon" type = "image/png" href = "../images/favi.png">
    </head>

    <body>
        <div id="home" class="big-bg">
            <header class = "page-header wrapper">
                @component('components.header')
                @slot('PageTitle')
                Blog
                @endslot   
            @endcomponent
            </header>
        
            <div class="Blogbox">
                <p>{{$item->title}}<br>
                    {{$item->date}}<br>
                    {{$item->body}}<br>
                </p>
            </div>
        </div><!-- /#home -->

        <footer>
            @include('components.footer')
        </footer>

    </body>
</html>