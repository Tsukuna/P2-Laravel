<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackPostRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(FeedbackPostRequest $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->feedback = $request->feedback;
        $feedback->save();
        return redirect()->route('feedback')->with('success','Your feedback has been submitted successfully!');
    }
}
