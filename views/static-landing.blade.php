@extends('layouts.master')

@section('title')
    SocietyCMS
@stop

@section('description')
    The only CMS designed for you and your society.
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <img src="https://raw.githubusercontent.com/SocietyCMS/Artwork/master/SocietyCMS-sign.png" class="center-block"
                 alt="SocietyCMS Logo">
        </div>
        <div class="col-md-12">
            <h2>Newest Blog Posts</h2>
            @block('blog::recentDetailed')
        </div>

    </div>

@endsection
