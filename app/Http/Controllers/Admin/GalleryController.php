<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Requests;
use App;


class GalleryController extends Controller
{
    protected function creating(Request $requests)
    {

        $imageName=App::make('ProcessImage')->execute($requests['image'],'img/gallery/',500,700);

        Gallery::create([
                'title' => $requests['title'],
                'pic_location'=>$imageName,
                'note'=>$requests['note']
            ]
        );


        return redirect('/administrator/gallery')->withSuccess("Image Upload created Successfully");
    }

    protected function deleted(Gallery $id){
        $id->delete();
        return redirect('/administrator/gallery')
            ->withSuccess('Size has been deleted.');
    }

    public function edit(Gallery $gallery) {

        return view('admin.sections.galleryEdit',['featMenu'=>true,'gallery'=>$gallery,'new'=>true]);
    }

    public function update(Request $requests,Gallery $gallery) {
        if($requests['image']!=null){
            $imageName=App::make('ProcessImage')->execute($requests['image'],'img/gallery/',500,700);

            $gallery->title=$requests['title'];
            $gallery->pic_location=$imageName;
            $gallery->note=$requests['note'];

        }else{
            $gallery->title=$requests['title'];
            $gallery->note=$requests['note'];
        }

        $gallery->save();

        return redirect('/administrator/gallery')
            ->withSuccess('Gallery has been updated.');
    }
}
