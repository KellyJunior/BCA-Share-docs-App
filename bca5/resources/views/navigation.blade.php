@extends('template')
 @section('navigation')
<div class="container">
    <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html" class="active">HOME</a></li>
            <li><a href="about.html">LOGIN</a></li>
            <li><a href="portfolio.html">REGISTER</a></li>
        </ul>
    </div>
</div>
</div>
@endsection
