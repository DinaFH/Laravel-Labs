@extends('layouts.app')
@section('title')Index @endsection
@section('content')
     
        <div class="mb-5 d-flex justify-content-center">
        <x-link-button type="success" to="{{route('posts.create')}}"  text="Create Post" />
    </div>
        
        <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)   
            
              <tr>
                <!-- laravel implements magic methods to access object as an array-->
                <td>{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->post_creator }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
           
               <x-link-button to="{{route('posts.show', ['post'=>$post])}}"  text="" type="primary" />
                <x-link-button to="{{route('posts.edit', ['post'=>$post])}}" text="" type="success" />
                <x-link-button to="#" text="" type="danger" />
                </td>
              </tr> 
              @endforeach
            </tbody>
          </table>
          @endsection
