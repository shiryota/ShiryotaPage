<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Profile</title>
        <meta name = "description" content="ITで稼ぎたいシリョタのページ">
        <!-- CSS -->
            <link href="{{asset('css/ress.css')}}" rel="stylesheet">
            <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!-- Favicon -->
            <link rel = "icon" type = "image/png" href = "images/favi.png">
    </head>

    <body>
        
        <div id="profile" class="big-bg">
            <header class = "page-header wrapper">
                @component('components.header')
                    @slot('PageTitle')
                    Profile
                    @endslot   
                @endcomponent
            </header>
            
            <section id="profileSet">
                <div class = "wrapper">
                    <div class="profileBox">
                        <p>@yield('myProfile')</p>
                    </div>
                    <div class="twitter">
                        <a class="twitter-timeline" data-lang="ja" data-width="500" data-height="800" data-theme="dark" href="https://twitter.com/Shiryota95?ref_src=twsrc%5Etfw">
                            Tweets by Shiryota95
                        </a> 
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </section>
        </div><!-- /#home -->
        
        <footer>
            @include('components.footer')
        </footer>

    </body>
</html>