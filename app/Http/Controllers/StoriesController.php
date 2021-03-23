<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use function compact;
use function dd;

class StoriesController extends Controller
{
    public function index()
    {
        $stories = Story::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->paginate(5);
        return view('stories.index', compact('stories'));
    }

    public function show(Story $story)
    {
        return view('stories.show', compact('story'));
    }
}
