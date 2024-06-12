<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudinary\Cloudinary;
use Cloudinary\Uploader;
use App\Models\audios;
use Image; 
use Illuminate\Support\Facades\Storage;

class AdminAudioController extends Controller
{
    public function index()
    {
        // Add your logic here
        $audios = audios::orderBy('created_at', 'desc')->paginate(10);
        
        return view('admin.audios', ['audios' => $audios]);
    }


    public function store(Request $request)
    {


        $image_url = null;

        // Handle file upload
        if ($request->hasFile('image_path') && $request->file('image_path')->isValid()) {
            $image = $request->file('image_path');
    
            // Generate a unique filename for the image
            $filename = 'image_' . time() . '.' . $image->getClientOriginalExtension();
    
            // Move the uploaded file to the local storage
            $image->storeAs('public/images', $filename);
    
            // Get the URL for the stored image
            $image_url = $filename;
        }
    

        // Create a new feature record in the database
        audios::create([
            'title' => $request->input('title'),
            'link' => $request->input('link'),
            'image_path' => $image_url,
            // Add more fields as needed
        ]);

        // Redirect to a success page or back to the form
        return redirect()->route('admin.audio')->with('success', 'Audio added successfully');
    }


    public function edit($id)
    {
        $audios = audios::find($id);
    
        if (!$audios) {
            return redirect()->route('admin.adio')->with('error', 'Audio not found');
        }
    
        return view('admin.audiosEdit', compact('audios'));
    }



    public function update(Request $request, $id)
    {
        // Find the audio record by ID
        $audio = audios::findOrFail($id);
    
    
        // Handle file upload if a new image is provided
        if ($request->hasFile('image_path') && $request->file('image_path')->isValid()) {
            // Delete the old image if it exists
            if ($audio->image_path) {
                Storage::delete('public/images/' . basename($audio->image_path));
            }
    
            $image = $request->file('image_path');
    
            // Generate a unique filename for the image
            $filename = 'image_' . time() . '.' . $image->getClientOriginalExtension();
    
            // Move the uploaded file to the local storage
            $image->storeAs('public/images', $filename);
    
            // Get the URL for the stored image
            $audio->image_path = $filename;
  
        }
    
        // Update other fields
        $audio->title = $request->input('title');
        $audio->link = $request->input('link');
        // Add more fields as needed
    
        // Save the changes
        $audio->save();
    
        return redirect()->route('audio.edit', ['id' => $audio->id])->with('success', 'Audio updated successfully');
    }
    


    public function destroy($id)
    {
        $audios = audios::find($id);

        $audios->delete('delete from audios where id = ?',[$id]);
        
        $response = [
            "success" => 'Audio has been Deleted Successfully'
        ];
        
        return redirect()->back()->with($response );
    }



}
