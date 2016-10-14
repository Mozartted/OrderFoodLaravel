<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests;
use App;

class BlogController extends Controller
{
    protected function creating(Request $requests)
    {

        $imageName=App::make('ProcessImage')->execute($requests['image'],'img/post/',500,700);

        Post::create([
                'title' => $requests['title'],
                'content' => $requests['content'],
                'image'=>$imageName,
            ]
        );


        return redirect('/administrator/blog')->withSuccess("size created Successfully");
    }

    protected function deleted(Post $id){
        $id->delete();
        return redirect('/administrator/blog')
            ->withSuccess('Size has been deleted.');
    }

    public function edit(Post $post) {

        return view('admin.sections.blogEdit',['featMenu'=>true,'post'=>$post,'new'=>true]);
    }

    public function update(Request $requests,Post $post) {
        if($requests['image']!=null){
            $imageName=App::make('ProcessImage')->execute($requests['image'],'img/post/',500,700);

            $post->title=$requests['title'];
            $post->image=$imageName;
            $post->content=$requests['content'];

        }else{
            $post->title=$requests['title'];
            $post->content=$requests['content'];
        }

        $post->save();

        return redirect('/administrator/blog')
            ->withSuccess('Post has been updated.');
    }
}
