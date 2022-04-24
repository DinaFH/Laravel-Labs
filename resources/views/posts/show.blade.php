@extends('layouts.app')

@section('title')Show @endsection

@section('content')

    <pre>
    </pre>

<div class="card w-75">
<div class="card-header">
    Post info
  </div>
  <div class="card-body">
    <h5 class="card-title"><b>Title:- </b>{{ $post['title'] }}</h5>
</pr>
    <h6><b>Description:- </b></h6>
    <p class="card-text">With supporting text below as a natural lead-in bto additional content</p>
  </div>
</div>
<pre> 
</pre>

<div class="card w-75">
<div class="card-header">
    Post Creator info
  </div>
  <div class="card-body"> 
    <p class="card-text"></p>
    <p class="card-text"><b>Name:</b>{{ $post['post_creator'] }}</p>
    <p class="card-text"><b>Email:</b>{{ $post['post_creator'] }}@gmail.com</p>
    <p class="card-text"><b>Created at:</b>{{ $post['created_at'] }}</p>
  </div>
</div>

@endsection 