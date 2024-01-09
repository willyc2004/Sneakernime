<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;
use App\Models\User;

class ReviewController extends Controller
{
    public function showReview(User $user)
    {
        // Assuming there's a relationship between User and Review models
        $reviews = $user->reviews()->paginate(5);

        // Eager load the 'transaction' relationship to avoid N+1 queries
        $reviews->load('transaction');

        return view('admin.review', [
            "pagetitle" => "Admin Review",
            'reviews' => $reviews,
            'user' => $user, // Pass the user to the view if needed
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        // Perform any necessary logic before deleting (if needed)

        $review->delete();

        return back()->with('success', 'Review deleted successfully.');
    }

}
