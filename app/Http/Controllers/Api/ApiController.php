<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AlumniTestimonial;
use App\Models\AppliedCourse;
use App\Models\Course;
use App\Models\Institute;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function tourOne()
    {
        $response = [];
        $data = Institute::where('membership_type',1)->where('is_active', true)->inRandomOrder()->get();

        $response['list'] = $data;

        foreach ($data as $item) {

            $item->logo = URL::to('/') . $item->logo;
            $item->banner = URL::to('/') . $item->banner;
            $item->featured_image = URL::to('/') . $item->featured_image;
            $item->title_banner = URL::to('/') . $item->title_banner;

            $item->about=strip_tags($item->about);
            $item->about=preg_replace('/\s+/', ' ', $item->about);

            $item->contact=strip_tags($item->contact);
            $item->contact=preg_replace('/\s+/', ' ', $item->contact);

            $courses = Course::leftJoin('institutes', 'institutes.id', '=', 'courses.institute_id')
                ->leftJoin('subjects', 'subjects.id', '=', 'courses.subject_id')
                ->where('courses.institute_id', $item->id)
                ->select('institutes.institute_name', 'subjects.subject_name', 'courses.*')
                ->get();


            $testimonials = AlumniTestimonial::where('institute_id', $item->id)->get();
            $item->courses = $courses;
            $item->testimonials = $testimonials;

            $item->contact_link = URL::to('/') . "/app/contact/" . $item->id;
            $item->about_link = URL::to('/') . "/app/about/" . $item->id;
            $item->promo_video_link = URL::to('/') . "/app/play-promo-video/" . $item->id;
            $item->testimonial_link = URL::to('/') . "/app/testimonial/" . $item->id;
            $item->course_link = URL::to('/') . "/app/course/" . $item->id;

            $item->is_expired = 0;
            $item->app_version_code = 2;

            //$item->play_testimonial_link = URL::to('/')."/app/play-testimonial/" . $item->id;
            /* $item->course_apply_link = URL::to('/')."/app/course/apply/" . $item->id;*/

        }
        return $response;
    }


    public function tourTwo()
    {
        $response = [];
        $data = Institute::where('membership_type',2)
            ->select(
                'id',
                "institute_name",
                "about",
                "contact",
                "promo_video_link",
                "membership_type"
            )
            ->inRandomOrder()
            ->get();

        $response['list'] = $data;

        foreach ($data as $item) {

            /*$item->logo = URL::to('/') . $item->logo;
            $item->banner = URL::to('/') . $item->banner;
            $item->featured_image = URL::to('/') . $item->featured_image;
            $item->title_banner = URL::to('/') . $item->title_banner;*/

            $item->about=strip_tags($item->about);
            $item->about=preg_replace('/\s+/', ' ', $item->about);

            $item->contact=strip_tags($item->contact);
            $item->contact=preg_replace('/\s+/', ' ', $item->contact);

            $courses = Course::leftJoin('institutes', 'institutes.id', '=', 'courses.institute_id')
                ->leftJoin('subjects', 'subjects.id', '=', 'courses.subject_id')
                ->where('courses.institute_id', $item->id)
                ->select('institutes.institute_name', 'subjects.subject_name', 'courses.*')
                ->get();


            $testimonials = AlumniTestimonial::where('institute_id', $item->id)->get();
            $item->courses = $courses;
            $item->testimonials = $testimonials;

            /*$item->contact_link = URL::to('/') . "/app/contact/" . $item->id;
            $item->about_link = URL::to('/') . "/app/about/" . $item->id;
            $item->promo_video_link = URL::to('/') . "/app/play-promo-video/" . $item->id;
            $item->testimonial_link = URL::to('/') . "/app/testimonial/" . $item->id;
            $item->course_link = URL::to('/') . "/app/course/" . $item->id;*/

            $item->promo_video_link = URL::to('/') . "/app/play-promo-video/" . $item->id;
            $item->is_expired = 0;
            $item->app_version_code = 2;

            //$item->play_testimonial_link = URL::to('/')."/app/play-testimonial/" . $item->id;
            /* $item->course_apply_link = URL::to('/')."/app/course/apply/" . $item->id;*/

        }
        return $response;
    }


    public function courses($id)
    {
        $courses = Course::leftJoin('institutes', 'institutes.id', '=', 'courses.institute_id')
            ->leftJoin('subjects', 'subjects.id', '=', 'courses.subject_id')
            ->where('courses.institute_id', $id)
            ->select('institutes.institute_name', 'institutes.logo', 'subjects.subject_name', 'courses.*')
            ->get();
        return view('app.course')->with('courses', $courses);
    }

    public function courseApply($id)
    {
        $course = $query = Course::leftJoin('institutes', 'institutes.id', '=', 'courses.institute_id')
            ->leftJoin('subjects', 'subjects.id', '=', 'courses.subject_id')
            ->select('institutes.institute_name', 'subjects.subject_name', 'courses.*')
            ->first();
        if (is_null($course)) {
            return Redirect::to('/404')->with('failed', "Course not Found");
        }
        return view('app.apply')->with('course', $course);
    }

    public function about($id)
    {

        $res = Institute::where('id', $id)->first();
        if (is_null($res)) {
            return Redirect::to('/404')->with('failed', "About not Found");
        }
        return view('app.about')->with('res', $res);
    }

    public function contact($id)
    {

        $res = Institute::where('id', $id)->first();
        if (is_null($res)) {
            return Redirect::to('/404')->with('failed', "Contact not Found");
        }
        return view('app.contact')->with('res', $res);
    }

    public function testimonials($id)
    {

        $testimonials = AlumniTestimonial::where('institute_id', $id)->get();
        if (is_null($testimonials)) {
            return Redirect::to('/404')->with('failed', "Course not Found");
        }
        return view('app.testimonials')->with('testimonials', $testimonials);
    }

    public function testimonial($id)
    {

        $testimonial = AlumniTestimonial::where('id', $id)->first();
        if (is_null($testimonial)) {
            return Redirect::to('/404')->with('failed', "Course not Found");
        }
        return view('app.testimonial')->with('res', $testimonial);
    }

    public function promoVideo($id)
    {

        $res = Institute::where('id', $id)->first();
        if (is_null($res)) {
            return Redirect::to('/404')->with('failed', "Video not Found");
        }
        return view('app.promo_video')->with('res', $res);
    }


    public function participantStore(Request $request)
    {
        $status_code = 200;
        $message = "Successfully Saved";

        try{

            $is_exist = Student::where('phone_number', $request['phone_number'])->first();
            if (!is_null($is_exist)) {
                $id = $is_exist->id;
            } else {
                try {
                    $id = Student::insertGetId([
                        'full_name' => $request['full_name'],
                        'phone_number' => $request['phone_number'],
                        'email' => $request['email'],
                    ]);
                } catch (\Exception $exception) {
                     $message= $exception->getMessage();
                    $status_code=400;
                }
            }

            //return $id;

            AppliedCourse::create([
                'course_id' => $request['course_id'],
                'institute_id' => getInstituteIdFromCourse($request['course_id']),
                'student_id' => $id
            ]);

        }catch (\Exception $exception){
            $message= $exception->getMessage();
            $status_code=400;
        }
        return $data = [
            'status_code' => $status_code,
            'message' => $message,
            'access_token' => 200,
            'data' => $request->all()
        ];
    }

    public function status(Request $request)
    {
        $status_code = 200;
        $message = "Successfully Saved";

        return $data = [
            'status_code' => $status_code,
            'message' => $message,
            'is_expired' => 0,
            'app_version_code' => 2


        ];
    }
}
