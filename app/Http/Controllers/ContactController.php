<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// Import Mailables
use App\Mail\PreOrderMail;
use App\Mail\TeamCardMail;

// Import Models
use App\Models\BambooPreOrder;
use App\Models\TeamCardOrder;

class ContactController extends Controller
{
    public function preorderSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
        ]);

        $preOrder = BambooPreOrder::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        Mail::to($request->email)->send(new PreOrderMail($request->all(), 'user'));

        $ownerEmail = 'info@bisdos.com';
        Mail::to($ownerEmail)->send(new PreOrderMail($request->all(), 'owner'));

        return back()->with('success', 'Your pre-order has been recieved. We will contact you soon!');
    }

    public function teamCardSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:200',
            'member_count' => 'required|integer',
            'message' => 'required|string|max:500',
        ]);

        $teamCardOrder = TeamCardOrder::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'member_count' => $request->member_count,
            'message' => $request->message,
        ]);

        Mail::to($request->email)->send(new TeamCardMail($request->all(), 'user'));

        $ownerEmail = 'info@bisdos.com';
        Mail::to($ownerEmail)->send(new TeamCardMail($request->all(), 'owner'));

        return back()->with('success', 'Your team card order has been recieved. We will contact you soon!');
    }
}
