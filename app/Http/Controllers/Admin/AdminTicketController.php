<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ticketing\ticket;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreticketRequest;
use App\Http\Requests\UpdateticketRequest;
use Illuminate\Http\Request;

class AdminTicketController extends Controller
{
    public function dashboard()
    {
       
        $tickets=Ticket::with('user')->latest()->get();
        //dd($tickets[0]->user->email);
        return view('Admin.tickets.dashboard',compact('tickets'));
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
    public function store(StoreticketRequest $request)
    {
       
        $ticket=Ticket::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>auth()->id(),

        ]);
            $ticket->save();
        if($request->file('attachment')){
            $text=$request->file('attachment')->extension();
            $contents=file_get_contents($request->file('attachment'));
            $filename=Str::random(25);
            $path="attachment/$filename.$text";
            Storage::disk('public')->put($path,$contents);
            $request->file('attachment')->move(public_path('attachment'), $filename);
            $ticket->update(['attachment'=>$filename]);
        }

        return redirect('Admin/tickets/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(ticket $ticket)
    {
        return view('Admin.adminshowticket',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticket $ticket)
    {
        return view('ticket.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateticketRequest $request, ticket $ticket)
    {
       // dd($ticket);
        $ticket->update($request->except('attachment'));
        if($request->has('status')){
           // $ticket->user->notify(new TicketUpdateNotification($ticket));

        }
        $ticket->update($request->validated());
        return redirect(route('adminticket.dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticket $ticket)

    {
        $ticket->delete();
        return redirect(route('adminticket.dashboard'));
    }
   
}

