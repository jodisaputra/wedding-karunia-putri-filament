<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Greeting;
use App\Models\Slider;
use App\Models\Story;
use App\Models\TeaserVideo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'sliders' => Slider::all(),
            'events' => Event::all(),
            'video' => TeaserVideo::where('status', 1)->first(),
            'stories' => Story::orderBy('id')->take(4)->get(),
            'greetings' => Greeting::where('status', 1)->get()
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

    public function store_greeting(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'friend_from' => 'required',
        ], [
            'name.required' => 'Nama harus diisi.',
            'message.required' => 'Pesan harus diisi.',
            'friend_from.required' => 'Teman dari harus diisi.',
        ]);

        Greeting::create([
            'name' => $request->name,
            'message' => $request->message,
            'friend_from' => $request->friend_from,
        ]);

        Alert::success('Success', 'Pesan telah dikirim, Terima kasih buat ucapannya');
        return redirect()->route('/');
    }
}
