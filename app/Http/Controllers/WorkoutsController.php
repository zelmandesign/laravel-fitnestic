<?php

namespace App\Http\Controllers;

use App\Models\Workouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutsController extends Controller
{
    //index

    // index() - Retrieves a list of resources. It's done Livewire

    //    create() - Displays a form to create a new resource.
    public function create() {
        return(view('workouts.create'));
    }

    public function store(Request $request) {
        // Get the authenticated user
        $user = Auth::user();

        // Validate the request data - modify this as per your validation rules
        $validatedData = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'tags' => 'required|string',
            'description' => 'required|string'
        ]);

        // Create a new Workout instance and set the author to the authenticated user
        $workout = new Workouts([
            'name' => $validatedData['name'],
            'category' => $validatedData['category'],
            'tags' => $validatedData['tags'],
            'description' => $validatedData['description'],
        ]);

        // Associate the workout with the user as the author
        //$workout->author = $user->id;
        // Associate the user with the workout
        $workout->user()->associate($user);

        // Save the workout to the database
        $workout->save();

        return redirect()->route('dashboard')->with('message', 'Workout created successfully!');
    }

    // edit Displays a form to create a new resource.
    public function edit(Workouts $workout) {
        return view('workouts.edit', [
            'workout' => $workout
        ]);
    }

    //update broken
    public function update(Request $request, Workouts $workout) {
        // Validate the request data - modify this as per your validation rules
        $validatedData = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'tags' => 'required|string',
            'description' => 'required|string'
        ]);

        // Update the attributes of the existing Workout instance
        $workout->name = $validatedData['name'];
        $workout->category = $validatedData['category'];
        $workout->tags = $validatedData['tags'];
        $workout->description = $validatedData['description'];

        // Retain the association with the authenticated user
        $user = Auth::user();
        $workout->user()->associate($user);

        // Save the updated workout to the database
        $workout->update();

        return redirect()->route('dashboard')->with('message', 'Workout updated successfully!');
    }




    //    show($id) - Shows a single resource by its ID.
    public function show(Workouts $workout) {
        return view('workouts.show', [
            'workout' => $workout
        ]);
    }

    //    store(Request $request) - Stores a new resource in the database.
    //    edit($id) - Displays a form to edit an existing resource.
    //    update(Request $request, $id) - Updates an existing resource.
    //    destroy($id) - Deletes a resource.
}
