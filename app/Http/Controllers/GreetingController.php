<?php

namespace App\Http\Controllers;

use App\Greeting;
use Illuminate\Http\Request;
use App\Http\Resources\GreetingCollection;
use App\Http\Resources\Greeting as GreetingResource;

class GreetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new GreetingCollection(Greeting::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // First we need to validate the data sent.
        $validatedData = $request->validate([
            'text' => 'required|unique:greetings|max:255'
        ]);

        // Save valid data into the database.
        $greeting = Greeting::create($validatedData);

        // Respond with created data and correct http header.
        return response()->json(['data' => new GreetingResource($greeting)], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function show(Greeting $greeting)
    {
        // Respond with formatted data using our GreetingResource.
        return response()->json(['data' => new GreetingResource($greeting)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Greeting $greeting)
    {
        // Fetch data to be updated from request then save.
        $greeting->text = data_get($request, 'data.attributes.text');
        $greeting->save();

        // Respond with 204 to indicate successful update.
        return response()->json(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Greeting  $greeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Greeting $greeting)
    {
        // Delete the resource - notice that we are taking advantage of implicit binding.
        $greeting->delete();

        // Respond with 204 to indicate successful deletion.
        return response()->json(null, 204);
    }
}
