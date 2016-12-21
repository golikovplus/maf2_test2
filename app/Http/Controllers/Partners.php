<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StorePartner;

class Partners extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Partner::orderBy('id', 'asc')->get();
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
    public function store(StorePartner $request) {
        $partner = new Partner;

        if ($request->file('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' .$file->getClientOriginalExtension();
            $filePath = $partner::IMAGE_PATH . $fileName;
            $file->move($partner::IMAGE_PATH, $fileName);
        } else $filePath = NULL;

        $partner->url = $request->input('url');
        $partner->image = $filePath;
        $partner->save();

        return response()->json(array(
            'success' => true,
            'id' => $partner->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Partner::find($id);
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
        $partner = Partner::find($request->input('id'));
        $partner->delete();

        return response()->json(array(
            'success' => true,
            'id' => $request->input('id')));
    }
} 