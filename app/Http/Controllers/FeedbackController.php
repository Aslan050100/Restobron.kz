<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Feedback as FeedbackResource;
use App\Feedback;

class FeedbackController extends Controller
{
    //
    public function getFeedbacks(){
        $feedbacks = Feedback::all();
        return FeedbackResource::collection($feedbacks);
    }
}
