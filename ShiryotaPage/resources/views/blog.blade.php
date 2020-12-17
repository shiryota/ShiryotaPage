<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Shiryota Blog</title>
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
                Blog
                @endslot   
            @endcomponent
            </header>
            <div class = "BlogArticle">
                @foreach ($items as $item)
                    <a href ="{{ url('/blog', $item->url) }}" class="Blogbox">
                        <p>
                            {{$item->title}} <br>
                            {{$item->date}}<br>
                            {{$item->abstract}}<br>
                        </p>
                    </a>
                @endforeach
            </div>
        </div><!-- /#home -->
    </body>
        
        <footer>
            @include('components.footer')
        </footer>

    </body>
</html>