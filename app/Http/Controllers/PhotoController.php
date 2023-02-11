<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Photos;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create()
    {
        return view('admin.gallery.create');
    }


    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $image_name);
            $request->request->add(['featured_image' => '/images/photos/' . $image_name]);

        }
        try {
            Photos::create($request->except(['_token', 'image']));
            return back()->with('success', "Successfully Photos added");
        } catch (\Exception $exception) {
            return back()->with('failed', getErrorMessage($exception->getMessage()));
        }
    }

    public function show(News $news)
    {
        $results = Photos::orderBy('created_at', "DESC")->get();
        return view('admin.gallery.show')->with('results', $results);
    }


    public function edit($id)
    {
        $result = Photos::where('id', $id)->first();
        return view('admin.gallery.edit')
            ->with('result', $result);
    }


    public function update(Request $request, Photos $news)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/photos');
            $image->move($destinationPath, $image_name);
            $request->request->add(['featured_image' => '/images/photos/' . $image_name]);

        }

        try {
            Photos::where('id', $request['id'])->update($request->except(['_token', 'image']));
            return back()->with('success', "Successfully Photos Updated");
        } catch (\Exception $exception) {
            return back()->with('failed', getErrorMessage($exception->getMessage()));
        }
    }

    public function destroy($id)
    {
        try {
            Photos::where('id', $id)->delete();
            return back()->with('success', "Successfully Photos Deleted");
        } catch (\Exception $exception) {
            return back()->with('failed', getErrorMessage($exception->getMessage()));
        }
    }
}
