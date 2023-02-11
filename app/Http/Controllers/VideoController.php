<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{

    public function create()
    {

        $videos = Video::orderBy('created_at', "DESC")->get();
        return view('admin.video.show')
            ->with('results', $videos);

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'video_link' => 'required',

        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
         // $request->all();
        if ($request['video_link'] != null) {
            $request['video_link'] = getYoutubeVideoLink($request['video_link']);
        }

        //unset($request['_token']);
        try {
            Video::create([
                'video_title' => $request['video_title'],
                'video_link' => $request['video_link'],
                'type' => $request['type'],
            ]);
            return back()->with('success', "Successfully saved");

        } catch (\Exception $exception) {
            //return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    public function edit($id)
    {
        $result = Video::where('id', $id)->first();
        $yt_link= "";
        if ($result->video_link != null){
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $result->video_link, $matches);

            $yt_link = "https://www.youtube.com/watch?v=" . $matches[1];
        }



        return view('admin.video.edit')
            ->with('result', $result)
            ->with('yt_link', $yt_link);
    }


    public function update(Request $request, Video $alumniTestimonial)
    {
        $validator = Validator::make($request->all(), [
            'video_link' => 'required'

        ]);
        //return $request->all();

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        if ($request['video_link'] != null) {
            $request['video_link'] = getYoutubeVideoLink($request['video_link']);
        }
        // return $request->all();

        try {
            Video::where('id', $request['id'])->update($request->except('_token'));
            return back()->with('success', "Successfully Updated");

        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            Video::where('id', $id)->delete();
            return back()->with('success', "Successfully Deleted");

        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }
}
