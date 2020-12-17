<h1><a href = "{{ url('/') }}"><img class = "logo" src = "../images/PageTitle.svg" alt = "シリョタページホーム"></a></h1>
<div class = "PageTitle">
    {{$PageTitle}}
</div>
<nav>
    <ul class ="main-nav">
        <li><a href = "{{ url('/profile') }}">Profile</a></li>
        <li><a href = "{{ url('/blog') }}">Blog</a></li>
        <li><a href = "{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>
