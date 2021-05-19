<?php

namespace App\Http\Controllers;

use App\Mns;
use Illuminate\Http\Request;

class MnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
     * @param  \App\Mns  $mns
     * @return \Illuminate\Http\Response
     */
    public function show(Mns $mns)
    {
        return Mns::findOrFail($mns);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mns  $mns
     * @return \Illuminate\Http\Response
     */
    public function edit(Mns $mns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mns  $mns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mns $mns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mns  $mns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mns $mns)
    {
        return Mns::destroy($mns);
    }

    public function filter (Request $request)
    {
        $query = Mns::query();

        if($request->search) {
            $query->where('mns_type', 'LIKE', '%'.$request->search.'%');
        }

        $mns = $query->orderBy($request->input('orderBy.column'), $request->input('orderBy.direction'))
                    ->paginate($request->input('pagination.per_page'));

        $mns->load('mns');

        return $mns;
    }
    // public function getUserRoles ($user)
    //{
    //    $user = User::findOrFail($user);
      //  $user->getRoleNames();

        //return $user;
    //}

    public function count ()
    {
        return Mns::count();
    }

}
