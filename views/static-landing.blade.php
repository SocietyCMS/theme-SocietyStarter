@extends('layouts.master')

@section('title')
    SocietyCMS
@stop

@section('description')
    The only CMS designed for you and your society.
@stop

@section('content')

    <div class="row">

        <div class="col-md-8 site-main">
            <img src="https://raw.githubusercontent.com/SocietyCMS/Artwork/master/SocietyCMS-sign.png" class="img-fluid" alt="SocietyCMS Logo" style="width: 100%;">
        </div>

        <div class="col-md-3 col-md-offset-1 site-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                {!! Menu::get('social')->asOl(['class' => 'list-unstyled']) !!}
            </div>
        </div>

    </div>

@endsection
