<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Wreszcie skumałem')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h1>Content section</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe fuga tempora hic impedit veritatis temporibus pariatur atque delectus ipsum vel nisi explicabo, ipsa, dolorum commodi distinctio soluta iure obcaecati dolores.</p>
@endsection