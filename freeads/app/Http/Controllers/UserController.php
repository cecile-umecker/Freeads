<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showMessage() {
        return view('message');
    }
    public function showHome(){
        $ads = Ad::inRandomOrder()->limit(6)->get();
        return view('home')
            ->with('ads', $ads);
    }

    public function showAccount(){
        $user = auth()->user();
        $ads = Ad::all()->where('user_id', $user->id);
        return view('account')
            ->with('user', $user)
            ->with('ads', $ads);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $id)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:32',
        ]);
        $id->update($request->all());
        $id->save();
        return back()->with('success.message', 'Profil actualisé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
