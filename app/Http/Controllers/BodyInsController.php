<?php

namespace App\Http\Controllers;

use App\Models\BodyIns;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BodyInsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $user               =           Auth::user();
        if(!is_null($user)) {
            $bodyIns          =           BodyIns::all();
            if(count($bodyIns) > 0) {
                return response()->json(["status" => "success", "count" => count($bodyIns), "data" => $bodyIns], 200);
            }

            else {
                return response()->json(["status" => "failed", "count" => count($bodyIns), "message" => "Failed! no Body-ins found"], 200);
            }
        }
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
     * @param  \App\Models\BodyIns  $bodyIns
     * @return \Illuminate\Http\Response
     */
    public function show(BodyIns $bodyIns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BodyIns  $bodyIns
     * @return \Illuminate\Http\Response
     */
    public function edit(BodyIns $bodyIns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BodyIns  $bodyIns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BodyIns $bodyIns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BodyIns  $bodyIns
     * @return \Illuminate\Http\Response
     */
    public function destroy(BodyIns $bodyIns)
    {
        //
    }
}
