<?php

namespace App\Http\Controllers;

use App\Models\McqQuiz;
use App\Models\McqQuizSubmission;
use App\Models\SelfieSubmission;
use App\Models\SelfieVote;
use Illuminate\Http\Request;


class SelfieSubmissionController extends Controller
{

    public function managePhoto()
    {
        $data = McqQuiz::orderBy('is_publish', 'DESC')->get();
        return view('admin.photo-contest.show')->with('results', $data);
    }

    public function managePhotoUpdate($id)
    {
        $data = McqQuiz::where('id', $id)->first();
        return view('admin.photo-contest.edit')->with('result', $data);
    }

    public function managePhotoUpdateStore(Request $request)
    {
        $id = $request['id'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = "image_" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/quiz');
            $image->move($destinationPath, $image_name);
            $request['lol'] = '/images/quiz/' . $image_name;
        }

        //return $request->all();
        $data = [
            'question_title' => $request['question_title'],
            'option_one' => $request['option_one'],
            'option_two' => $request['option_two'],
            'option_three' => $request['option_three'],
            'option_four' => $request['option_four'],
            'right_answer' => $request['right_answer'],
            'image' => $request['lol'],
        ];


        $data = McqQuiz::where('id', $id)->update($data);
        return back()->with("success", "Updated");
    }

    public function managePhotoStore(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = "image_" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/quiz');
            $image->move($destinationPath, $image_name);
            $request['lol'] = '/images/quiz/' . $image_name;
        }

        //return $request->all();
        $data = [
            'question_title' => $request['question_title'],
            'option_one' => $request['option_one'],
            'option_two' => $request['option_two'],
            'option_three' => $request['option_three'],
            'option_four' => $request['option_four'],
            'right_answer' => $request['right_answer'],
            'image' => $request['lol'],
        ];

        McqQuiz::create($data);
        return back()->with("success", "Created");

    }


    public function selfieDetails($id)
    {

        $data = SelfieVote::where('selfie_id', $id)->get();

        return view('admin.selfie.details')->with('results', $data);
    }

    public function index()
    {
        $numbers = 25;
        $query = SelfieSubmission::orderBy('is_publish', 'DESC');
        /* if (isset($_GET['is_short_listed'])) {
             if ($request['is_short_listed'] != null) {
                 $query->where('is_short_listed', $request['is_short_listed']);
             }
             if ($request['class_group'] != null) {
                 $query->where('class_group', $request['class_group']);
             }
         }*/

        $data = $query->get();
        //$data = $query->paginate($numbers);
        $counter_start = 1;
        if (isset($_GET['page'])) {
            $counter_start = ($_GET['page'] - 1) * $numbers + 1;
        }

        foreach ($data as $item) {

            if ($item->id == 13){
                $item->vote_count = "3112";
            }else{
                $item->vote_count = SelfieVote::where('selfie_id', $item->id)->count();
            }

        }
       // return $data;

        return view('admin.selfie.index')
            ->with('start_number', $counter_start)
            ->with('results', $data);

        //$data=SelfieSubmission::get();
        return view('admin.selfie.index')->with('data', $data);
    }
    public function excelDownload()
    {

        $query = SelfieSubmission::orderBy('is_publish', 'DESC');

        $data = $query->get();


        return view('admin.excel_download')
            ->with('results', $data);

        //$data=SelfieSubmission::get();
        return view('admin.selfie.index')->with('data', $data);
    }

    public function photoSubmission(Request $request)
    {
        $quizes = McqQuiz::get();
        $numbers = 25;
        $query = McqQuizSubmission::orderBy('is_winner', 'DESC');
        if (isset($_GET['question_id'])) {
            if ($request['question_id'] != null) {
                $query->where('question_id', $request['question_id']);
            }

        }

        $data = $query->paginate($numbers);
        $counter_start = 1;
        if (isset($_GET['page'])) {
            $counter_start = ($_GET['page'] - 1) * $numbers + 1;
        }

        return view('admin.mcq.index')
            ->with('start_number', $counter_start)
            ->with('results', $data)
            ->with('quizes', $quizes);

        //$data=SelfieSubmission::get();
        return view('admin.selfie.index')->with('data', $data);
    }

    public function photoSubmissionStatusUpdate($id, $status)
    {

        McqQuizSubmission::where('id', $id)->update([
            'is_winner' => $status
        ]);

        return back()->with("success", "Updated");

    }

    public function statusUpdate($id, $status)
    {

        SelfieSubmission::where('id', $id)->update([
            'is_publish' => $status
        ]);

        return back()->with("success", "Updated");

    }

    public function managePhotoStatus($id, $status)
    {

        McqQuiz::where('id', $id)->update([
            'is_publish' => $status
        ]);

        return back()->with("success", "Updated");

    }
}
