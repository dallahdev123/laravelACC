<?php

namespace App\Http\Controllers;

use App\DbCallCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function user()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $users->user_id = auth::id();
        $users->save();
    }
    public function index()
    {
        $users = DbCallCenter::all();
        return view('projet.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projet.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'address' => 'required|min:3',
            'email' => 'required|min:5',
            'telephone' => 'required|min:3',
        ]);
        DbCallCenter::create(['nom' => $request->nom, 'prenom' => $request->prenom, 'address' => $request->address, 'email' => $request->email, 'telephone' => $request->telephone]);
        return redirect()->route('automatiqueCallCenter.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = DbCallCenter::findOrFail($id);
        return view('projet.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userEdit= DbCallCenter::findOrFail($id);
        return view('projet.edit', compact('userEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'address' => 'required|min:3',
            'email' => 'required|min:5',
            'telephone' => 'required|min:3',
        ]);
        $userEdit= DbCallCenter::findOrFail($id);
        $userEdit->update(['nom' => $request->nom, 'prenom' => $request->prenom, 'address' => $request->address, 'email' => $request->email, 'telephone' => $request->telephone]);
        return redirect()->route('automatiqueCallCenter.index', $userEdit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DbCallCenter::destroy($id);
        return redirect()->route('automatiqueCallCenter.index');
    }

    public function call($id)
    {
        //
    }
}
