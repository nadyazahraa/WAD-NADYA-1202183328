<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{

    public function index()
    {
        $story = Story::all();
        return view('mailbox/utama', ['story'=>$story]);
    }


    public function create()
    {
        return redirect('mailbox/utama/create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'level' => 'required',
            'story' => 'required'
        ]);

        $data = Story::create([
            'title' => $request->title,
            'level' => $request->level,
            'story' => $request->story
        ]);
        
        $data->save();

        return redirect('/utama');
    }


    public function show(Story $story)
    {
        return view('mailbox/detail', compact('story'));
    }


    public function edit($id)
    {
        $story = Story::find($id);
        return view('mailbox/update', ['story' => $story]);
    }


    public function update(Request $request, Story $story)
    {
        $this->validate($request,[
            'title' => 'required',
            'level' => 'required',
            'story' => 'required',
        ]);

        $update = Story::find($request->id);

        $update->title = $request->title;
        $update->level = $request->level;
        $update->story = $request->story;

        $update->save();

        return redirect('/utama');
    }


    public function destroy(Story $story)
    {
        $story->delete();
        return redirect('/utama');
    }

    // bukan fungsi CRUD

    public function tambah() 
    {
        return view('mailbox/create');
    }
}
