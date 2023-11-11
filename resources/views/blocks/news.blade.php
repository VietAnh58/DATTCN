@extends('layouts.client')
@section('header')
    @include('blocks.frontend.header')
@endsection 
@section('content')
    @include('blocks.frontend.news.index')
@endsection

@section('footer')
    @include('blocks.frontend.footer')
@endsection