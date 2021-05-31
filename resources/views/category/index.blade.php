@extends('layouts.app')

@section('content')

<h1>this is {{ __('category.title') }}</h1>

@foreach($categories as $category)
{{ $category->category_name }}
@endforeach

<example-component></example-component>

@endsection