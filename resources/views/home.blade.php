@extends('user/app')


@section('bg-img',asset('user/img/home-bg.jpg'))

@section('title','Welcome')
@section('sub-title','Thanks to Logged-in')

@section('main-content')

<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto1">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success text-success">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
      </div>
    </div>
  </div>
</article>

@endsection
