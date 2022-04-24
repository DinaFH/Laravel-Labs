<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    
    public function index(){
        //select * from posts;
        $posts= Post::all(); // returns object have objects all of App\Model
       // dd($posts);
       //select * from posts where title='first blog';
       $filteredPosts=Post::where('title','first blog')->get();
     //  dd($filteredPosts);
        return view('posts.index',[
           
            'posts' => $posts,
        ]);
    }
    public function create(){
        $users=User::all();
        return view('posts.create',['users'=>$users,
    ]);
    }
    public function store(){
       
        //get the request data
        $data = request()->all(); //== $_POST

        //store the request data into the db
        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
            // 'test' => 'some value',
            // 'test2' => 'another value',
            // 'id' => 300,
        ]);

        //redirection to /posts
       // return to_route('posts.index');
      
        return redirect()->route('posts.index')->with('success', "post created");;
    }
    public function show($postId){
        //select from posts where id='postId';
        /*$post=Post::where('id',$postId)->first();
        we used first() instead of get() in order not to loop on collection object, it returns model object instead .*/
        $post=Post::find($postId);

      
        return view('posts.show', [
            'post' => $post,
        ]);
    }
        public function edit($postId)
    {
        $posts = [
            ['id' => 1, 'title' => 'Laravel', 'post_creator' => 'Ahmed', 'created_at' => '2022-04-16 10:37:00'],
            ['id' => 2, 'title' => 'PHP', 'post_creator' => 'Mohamed', 'created_at' => '2022-04-16 10:37:00'],
            ['id' => 3, 'title' => 'Javascript', 'post_creator' => 'Ali', 'created_at' => '2022-04-16 10:37:00'],
        ];

        return view('posts.edit',['post'=> $posts[$postId-1]]);
    }

    public function update($postId)
    {
        return 'Your data has been updated successfully';
    }
    
}

?>