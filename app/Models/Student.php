<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';

    protected $fillable = ['name', 'description', 'file', 'type'];


    // public function getImageTemporaryUrl()
    // {
    // // Assuming you have an 'image' column that stores the image file name/path
    //     $imageUrl = $this->image; // Replace 'image' with the actual column name

    //     // Generate the temporary URL based on the storage driver you are using (e.g., local, S3, etc.)
    //     // Adjust the logic based on your application's file storage configuration
    //     $temporaryUrl = Storage::temporaryUrl($imageUrl, now()->addHour()); // Adjust the expiration time as needed

    //     return $temporaryUrl;
    // }

    public function getImageTemporaryUrl()
{
    $imageUrl = $this->file; // Replace with the actual image URL
    // Append a unique token or timestamp to the URL to make it temporary
    $temporaryUrl = $imageUrl . '?token=' . uniqid();

    return $temporaryUrl;
}
}
