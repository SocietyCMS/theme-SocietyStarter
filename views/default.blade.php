@extends('layouts.master')

@section('title')
    {{ $content->title }}
@stop
@section('meta')
    <meta name="title" content="{{ $content->meta_title}}" />
    <meta name="description" content="{{ $content->meta_description }}" />
@stop

@section('content')
    <p class="text-justify"> {!! $content->body !!} </p>
@stop
