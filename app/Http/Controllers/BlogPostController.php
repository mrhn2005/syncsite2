<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=BlogPost::orderBy('id','desc')->get();
        return view('admin.blog.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        
        if($file=$request->file('photo')){
            $name=time().$file ->getClientOriginalName();
            $file->move('photos/blog',$name);
            
            $input['photo']=$name;
        }
        
        $post=BlogPost::create($input);
        return redirect()->route('blog.index')->with(['success'=>'
         محصول با موفقیت اضافه شد.
        ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=BlogPost::find($id);
        return view('admin.blog.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        $post=BlogPost::find($id);
        if($file = $request->file('photo')){
            $name = time() . $file->getClientOriginalName();
            $file->move('photos/blog',$name);
            if(isset($post->photo)){
                if(file_exists(public_path() .'/photos/blog/'. $post->photo)){
                unlink(public_path() .'/photos/blog/'. $post->photo);
                }
            }
            $input['photo']=$name;
        }
        $post->update($input);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=BlogPost::find($id);
        if(isset($post->photo)){
                if(file_exists(public_path() .'/photos/blog/'. $post->photo)){
                unlink(public_path() .'/photos/blog/'. $post->photo);
                }
            }
        $post->delete();
         return redirect()->route('blog.index');
        
    }
}
