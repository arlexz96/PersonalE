<!-- resources/views/categories/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Category: {{ $category->name }}</h1>
    <p>Description: {{ $category->description }}</p>
@endsection
