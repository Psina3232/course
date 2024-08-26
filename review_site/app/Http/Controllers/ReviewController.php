<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function edit($id)
{
    $review = Review::findOrFail($id);
    return view('reviews.edit', compact('review'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'rating' => 'required|integer|min:1|max:5',
    ]);

    $review = Review::findOrFail($id);
    $review->update([
        'title' => $request->title,
        'body' => $request->body,
        'rating' => $request->rating,
    ]);

    return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
}

public function destroy($id)
{
    $review = Review::findOrFail($id);
    $review->delete();
    return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
}


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'body' => $request->body,
            'rating' => $request->rating,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }
}
