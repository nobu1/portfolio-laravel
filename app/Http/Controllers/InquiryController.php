<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Http\Requests\InquiryRequest;

class InquiryController extends Controller
{
    public function index(Inquiry $inquiry)
    {
        return view('inquiry.index', compact('inquiry'));
    }

    public function confirm(InquiryRequest $request)
    {
        $inquiry = $request->only(['name', 'email', 'tell', 'content']);

        return view('inquiry.check', compact('inquiry'));
    }

    public function store(InquiryRequest $request)
    {
        $inquiry = $request->only(['name', 'email', 'tell', 'content']);
        
        return view('inquiry.thanks');
    }

    public function redo(Inquiry $inquiry)
    {
        return view('inquiry.index', compact('inquiry'));
    }

}
