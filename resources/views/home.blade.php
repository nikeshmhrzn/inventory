@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<br>


@section('contents')
<div class="jumbotron">
        <!-- <h5>helo this is jumbotron division.<h5> -->
        <h3><a href ="{{url('products/index')}}">product</a></h3>


</div>

@endsection
