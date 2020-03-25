<?php

namespace App\Http\Controllers;

use App\Hashtag;
use Illuminate\Http\Request;
use App\Http\Resources\Hashtag as HashtagResource;

class HashtagController extends Controller
{
    //
    public function getHashtags(){
        $hashtags = Hashtag::all();
        return HashtagResource::collection($hashtags);
    }
}
