<?php

namespace Database\Seeders;

use App\Models\McqQuiz;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class McqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        McqQuiz::create([
            'question_title' => "২০১৯ - ২০ সালে বিপিএলে ব্যাটিং করতে গিয়ে কোন দলের বিপক্ষে আন্দ্রে রাসেল পিচের ওপর পড়ে গেলেন? ",
            'image' => "/mcq/1.jpg",
            'option_one' => "চট্টগ্রাম চ্যালেন্জার্স ",
            'option_two' => "কুমিল্লা ওয়ারিয়র্স",
            'option_three' => "ঢাকা প্লাটুন ",
            'option_four' => "খুলনা টাইগার্স",
            'right_answer' => "4",
            'is_publish' => true,
            'date' => Carbon::now(),
        ]);

    }
}
