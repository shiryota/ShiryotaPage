<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Contact</title>
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
                        CONTACT
                    @endslot   
                @endcomponent
            </header>
            <div id = "contact"> 
                <form method="POST" action = "/contact">
                    @csrf
                    <div>
                        <label for="name">お名前</label>
                        <input type="text" id="name" name="yourName">
                    </div>
                
                    <div>
                        <label for="email">メールアドレス</label>
                        <input type="email" id="email" name="yourEmail">
                    </div>
        
                    <div>
                        <label for="message">メッセージ</label>
                        <textarea id="message" name="yourMessage"></textarea>
                    </div>
        
                    <input type="submit" class="button" value="送信">
                </form>
            </div>
        </div><!-- /#home -->

        
        
        <footer>
            @include('components.footer')
        </footer>

    </body>
</html>