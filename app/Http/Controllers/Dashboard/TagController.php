<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);

        Tag::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name
        ]);

        return response()->json('Created', 200);
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate(['name' => 'required']);

        $tag->update([
            'name' => $request->name
        ]);

        return response()->json('Updated', 200);
    }

    public function destroy(Tag $tag)
    {
        if ($tag->delete()) {
            return response()->json('Deleted');
        }

        return response()->json('Something went wrong', 304);
    }
}
