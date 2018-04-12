@extends('main')

@section('title', 'Homepage')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-4">laravel blog</h1>
            <p class="lead">This website is powered by laravel</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">popular post</a>
          </div>
        </div>
      </div><!--end row -->

      <div class="row">
        <div class="col-md-8">
          <div class="post">
            <h3>Title</h3>
            <p>To make the jumbotron full width, and without rounded corners, add the .jumbotron-fluid modifier class and add a .container or .container-fluid within.</p>
          <a href="#" class="btn btn-primary">read more</a>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.
        </div>
      </div>

@endsection
