<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{
    //Created a function to return view of Newsletter

    public function create()
    {
    	 return view('newsletter');
    }

    public function store(Request $request)
	{
		if( ! Newsletter::isSubscribed($request->email))
		{
			Newsletter::subscribePending($request->email);
			return redirect('newsletter')->with('success','Thanks for Subscribe');
		}

		return redirect('newsletter')->with('failure','Sorry you have already subscribed');

		}
}
