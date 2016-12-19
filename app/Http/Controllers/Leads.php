<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\Http\Requests\StoreLead;

class Leads extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Lead::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(StoreLead $request) {
        $lead = new Lead;

        $lead->location = $request->input('location');
        $lead->lead_type = $request->input('lead_type');
        $lead->preferences = $request->input('preferences');
        $lead->price_range = $request->input('price_range');
        $lead->home_type = $request->input('home_type');
        $lead->time_frame = $request->input('time_frame');
        $lead->agent_hero = $request->input('agent_hero');
        $lead->fullname = $request->input('fullname');
        $lead->email = $request->input('email');
        $lead->phone = $request->input('phone');
        $lead->save();

        return response()->json(array(
            'success' => true,
            'id' => $lead->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Lead::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
        $lead = Lead::find($request->input('id'));
        $lead->delete();

        return response()->json(array(
            'success' => true,
            'id' => $request->input('id')));
    }
}
