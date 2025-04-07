<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function contact()
    {
        return view('pages.contact_form');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function feedback()
    {
        $feedbacks = Feedback::all();
        $firstThreeFeedbacks = $feedbacks->take(6);
        $lastThreeFeedbacks = $feedbacks->skip(3);
        return view('pages.feedback',compact('firstThreeFeedbacks','lastThreeFeedbacks'));
    }
}
