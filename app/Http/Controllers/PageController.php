<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Story;
use App\Models\TeaserVideo;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'sliders' => Slider::all(),
            'events' => Event::all(),
            'video' => TeaserVideo::where('status', 1)->first(),
            'stories' => Story::orderBy('id')->take(4)->get()
        ]);
    }

    public function story()
    {
        return view('story', [
            'stories' => Story::all()
        ]);
    }

    public function gallery()
    {
        return view('gallery', [
            'galleries' => Gallery::all()
        ]);
    }
}
