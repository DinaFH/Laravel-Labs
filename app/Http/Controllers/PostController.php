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
      /*new*/
        $userId =$post->user_id;
       $user= User::where('id', '=', $userId )->first();
       /**/ 
        
        return view('posts.show', [
            'post' => $post,'user'=>$user /*added user */
        ]);
    }
        public function edit($postId)
    {
        /*edit new*/
        $post = Post::find($postId); 

        $users=User::all();  
 
        return view('posts.edit',['post'=> $post,'users'=> $users]);
        /**/
      //  return view('posts.edit',['post'=> $posts[$postId-1]]);

        
    }

    public function update($postId)
    { /*new*/
        $data = request()->all();

        Post::where('id', $postId)->update([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'user_id'=>$data['post_creator'],
        ]);

        return redirect()->route('posts.index');
        /* */
    }

   /* public function destroy($postId)
    {
        $post= Post::find($postId)->delete();

        return redirect()->route('posts.index');
    }
    */
    
}

?>