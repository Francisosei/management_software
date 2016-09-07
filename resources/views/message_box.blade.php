@extends('layouts.app')


@section('content')
    @foreach($Subscribe as $message)
    {{$message->email}}
    {{$message->message}}

   @endforeach
    @stop