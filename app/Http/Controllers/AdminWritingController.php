<?php

namespace App\Http\Controllers;
use App\Models\writings; 

use Illuminate\Http\Request;

class AdminWritingController extends Controller
{
    public function index()
    {
        // Add your logic here
        $writings = writings::orderBy('created_at', 'desc')->paginate(10);
        
        return view('admin.writings', ['writings' => $writings]);
    }

    public function store(Request $request)
    {
        // Create a new feature record in the database
        writings::create([
            'title' => $request->input('title'),
            'link' => $request->input('link'),
            'content' => $request->input('content'),
            // Add more fields as needed
        ]);

        // Redirect to a success page or back to the form
        return redirect()->route('admin.writing')->with('success', 'Writing added successfully');
    }



    public function edit($id)
    {
        $writings = writings::find($id);
    
        if (!$writings) {
            return redirect()->route('admin.writing')->with('error', 'Writing not found');
        }
    
        return view('admin.writingEdit', compact('writings'));
    }


    public function update(Request $request, $id)
    {
       

         // Find the HomeIssue record by ID
         $writings = writings::findOrFail($id);
    
       

        $writings->update([
            'title' => $request->input('title'),
            'link' => $request->input('link'),
            'content' => $request->input('content'),
            // Add more fields as needed
        ]);

        return redirect()->route('writing.edit', ['id' => $writings->id])->with('success', 'writings updated successfully');
    }


    public function destroy($id)
    {
        $writings = writings::find($id);

        $writings->delete('delete from writings where id = ?',[$id]);
        
        $response = [
            "success" => 'Writing has been Deleted Successfully'
        ];
        
        return redirect()->back()->with($response );
    }



}
