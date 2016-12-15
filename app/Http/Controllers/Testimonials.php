<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\StoreTestimonial;

class Testimonials extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Testimonial::orderBy('id', 'asc')->get();
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
    public function store(StoreTestimonial $request) {
        $testimonial = new Testimonial;

        if ($request->file('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' .$file->getClientOriginalExtension();
            $filePath = $testimonial::IMAGE_PATH . $fileName;
            $file->move($testimonial::IMAGE_PATH, $fileName);
        } else $filePath = NULL;

        $testimonial->name = $request->input('fullname');
        $testimonial->image = $filePath;
        $testimonial->address = $request->input('address');
        $testimonial->message = $request->input('message');
        $testimonial->save();

        return response()->json(array(
            'success' => true,
            'id' => $testimonial->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Testimonial::find($id);
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
        $testimonial = Testimonial::find($request->input('id'));
        $testimonial->delete();

        return response()->json(array(
            'success' => true,
            'id' => $request->input('id')));
    }
} 