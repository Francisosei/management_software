@extends('layouts.app')

@section('content')

    <div class="container" xmlns="http://www.w3.org/1999/html">


 <form action="{{ url('create') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

    <div class="form-group">
    <label for = "subject" >Subject:</label>
    <input type="text" name="subject" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for = "subject" >Sender Name:</label>
        <input type="text" name="subject_name" id="sender_name" class="form-control">
    </div>

    <div class="form-group">
        <label for = "subject" >Sender Number:</label>
        <input type="text" name="sender_number" id="sender_number" class="form-control">
    </div>

    <div class="form-group">
        <label for = "subject" >Sender Email:</label>
        <input type="text" name="sender_email" id="sender_email" class="form-control">
    </div>

    <div class="form-group">
        <label for = "subject" >Recipient Name:</label>
        <input type="text" name="recipient_name" id="recipient_name" class="form-control">
    </div>

    <div class="form-group">
        <label for = "subject" >Recipient Email:</label>
        <input type="text" name="recipient_email" id="recipient_email" class="form-control">
    </div>


    <div class="form-group">
        <label for = "subject" >Content:</label>
        <input type="textarea" name="content" id="content" class="form-control">
    </div>

    <input type="submit" value="send" class="btn btn-block btn-lg btn-primary">
</form>

    </div>


    @endsection