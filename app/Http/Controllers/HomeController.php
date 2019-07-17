<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
    ) {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('auth.login');
    }

    // public function adminLogin(){
    //     $reviews = $this->reviewRepository->paginateHome();
    //     $rateReviewVals = $this->reviewRepository->listReviewVal();
    //     $rateReview = $this->rateRepository->findRateLike();
    //     if (Auth::check()) {
    //         $userId = Auth::user()->id;
    //         foreach ($reviews as $review) {
    //             $countLike[$review->id] = $this->rateValRepository->getLikes($review->id);
    //             $countComment[$review->id] = $this->commentRepository->getCommentNumber($review->id);
    //             $hasLike[$review->id] = $this->rateValRepository->findReviewID($review->id, $userId);
    //         }

    //         foreach ($reviews as $review) {
    //             $countLike[$review->id] = $this->rateValRepository->getLikes($review->id);
    //             $countComment[$review->id] = $this->commentRepository->getCommentNumber($review->id);
    //         }
    
    //         return view('frontend.index', compact(
    //             'reviews',
    //             'rateReviewVals',
    //             'countLike',
    //             'rateReview',
    //             'countComment',
    //             'hasLike'
    //         ));
    //     } else {
    //         foreach ($reviews as $review) {
    //             $countLike[$review->id] = $this->rateValRepository->getLikes($review->id);
    //             $countComment[$review->id] = $this->commentRepository->getCommentNumber($review->id);
    //         }
    
    //         return view('frontend.index', compact(
    //             'reviews',
    //             'rateReviewVals',
    //             'countLike',
    //             'rateReview',
    //             'countComment'
    //         ));
    //     }   
    // }
}
