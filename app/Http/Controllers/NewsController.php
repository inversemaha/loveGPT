<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function create()
    {
        return view('admin.news.create');
    }


    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/news');
            $image->move($destinationPath, $image_name);
            $request->request->add(['featured_image' => '/images/news/' . $image_name]);

        }
        try {
            News::create($request->except(['_token', 'image']));
            return back()->with('success', "Successfully News added");
        } catch (\Exception $exception) {
            return back()->with('failed', getErrorMessage($exception->getMessage()));
        }
    }

    public function show(News $news)
    {
        $results = News::orderBy('created_at', "DESC")->get();
        return view('admin.news.show')->with('results', $results);
    }


    public function edit($id)
    {
        $result = News::where('id', $id)->first();
        return view('admin.news.edit')
            ->with('result', $result);
    }


    public function update(Request $request, News $news)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/news');
            $image->move($destinationPath, $image_name);
            $request->request->add(['featured_image' => '/images/news/' . $image_name]);

        }
        if ($request['is_featured'] == null) {
            $request['is_featured'] = 0;
        }

        try {
            News::where('id', $request['id'])->update($request->except(['_token', 'image']));
            return back()->with('success', "Successfully News Upadted");
        } catch (\Exception $exception) {
            return back()->with('failed', getErrorMessage($exception->getMessage()));
        }
    }

    public function destroy($id)
    {
        try {
            News::where('id', $id)->delete();
            return back()->with('success', "Successfully News Deleted");
        } catch (\Exception $exception) {
            return back()->with('failed', getErrorMessage($exception->getMessage()));
        }
    }
}
