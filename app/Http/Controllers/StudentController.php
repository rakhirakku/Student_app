<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:250',
            'file' => 'required|image|max:5000', // 5MB limit
            'type' => 'required|in:1,2,3',
        ]);

        // Save the image file in the private folder in storage
        $imagePath = $request->file('file')->store('private');

        // Save the validated data to the database
        $data = [
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'file' => $imagePath,
            'type' => $validatedData['type'],
        ];

        // Save the data to the database
        $savedData = \App\Models\Student::create($data);

        // Return the saved data
        return response()->json([
            'name' => $savedData->name,
            'type' => $savedData->type,
            'description' => $savedData->description,
        ]);
    }
}
