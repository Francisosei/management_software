@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 class="text-center">Subscribe to our newsletter!</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('subscribe') }}" method="POST">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="email">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Message" name="message" >
                    </div>
                    }

                    <button type="submit" class="btn btn-default btn-success">Subscribe</button>
                </form>
            </div>
        </div>
    </div>

@endsection

