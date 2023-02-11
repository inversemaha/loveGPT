<?php

namespace App\Http\Controllers;


use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = Slider::orderBy('created_at', "DESC")->get();

        return view('admin.slider.show')
            ->with('results', $sliders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'url' => 'required',
            'image' => 'required',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/sliders');
            $image->move($destinationPath, $image_name);
            $request->request->add(['featured_image' => '/images/sliders/' . $image_name]);

        }
        try {
            Slider::create($request->except(['_token', 'image']));
            return back()->with('success', "Successfully saved");

        } catch (\Exception $exception) {
            //return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $result = Slider::where('id', $id)->first();
        return view('admin.slider.edit')
            ->with('result', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/sliders');
            $image->move($destinationPath, $image_name);
            $request->request->add(['featured_image' => '/images/sliders/' . $image_name]);

        }
        try {
            Slider::where('id', $request['id'])->update($request->except(['_token', 'image']));
            return back()->with('success', "Successfully Updated");

        } catch (\Exception $exception) {
            //return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            if ($slider->featured_image != null){
                unlink(public_path($slider->featured_image));
            }

            $slider->delete();
            return back()->with('success', "Successfully Deleted");

        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }
}
