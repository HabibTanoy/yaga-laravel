<?php

namespace App\Http\Controllers;

use App\Models\EmailFeedback;
use Illuminate\Http\Request;

class FeedbackByEmailController extends Controller
{
    public function email_feedback(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $email_feedback_data_store = EmailFeedback::create([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        return view('frontend.home');
    }
}
