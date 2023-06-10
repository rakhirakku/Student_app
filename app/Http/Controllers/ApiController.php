<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
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
        $savedData = Student::create($data);

        // Return the saved data
        return response()->json([
            'name' => $savedData->name,
            'type' => $savedData->type,
            'description' => $savedData->description,
        ]);
    }
    public function index()
    {
        $records = Student::select('name', 'type', 'description')->paginate(10);

        return response()->json($records);
    }

    public function show($id)
    {
        $record = Student::findOrFail($id);
        return response()->json([
            'name' => $record->name,
            'type' => $record->type,
            'description' => $record->description,
            'image_url' => $record->getImageTemporaryUrl(),
        ]);
    }
}
