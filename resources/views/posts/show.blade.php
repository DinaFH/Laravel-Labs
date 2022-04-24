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
    <p class="card-text">{{ $post['description'] }}</p>
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
    <p class="card-text"><b>Name:</b> {{ $user['name'] }}</p>
    <p class="card-text"><b>Email:</b> {{ $user['email'] }}</p>
    <p class="card-text"><b>Created at:</b>{{ $post['created_at'] }}</p>
  </div>
  <form>
    <div class="mb-3">
      <input type="text" class="form-control" placeholder="Your Comment">
    </div>

    <button type="submit" class="btn btn-primary">Send</button>
  </form>
  

</div>

@endsection 