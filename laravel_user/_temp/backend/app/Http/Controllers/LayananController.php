<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Layanan;

class LayananController extends Controller
{
    public function getLayanan()
    {
        $posts = Layanan::all(); // Retrieve all posts from the database
        $back = json_decode($posts);
        // return view('welcome',['inspections' => $back]);
        return response()->json($posts); // Return the data as JSON
    }

    public function addLayanan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_layanan' => 'required|max:255',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);

        // Create a new Post instance with the validated data
        $post = new Layanan([
            'nama_layanan' => $validatedData['nama_layanan'],
            'harga' => $validatedData['harga'],
            'status' => 1,
            'keterangan' => $validatedData['keterangan'],
            'created_at' => now()
        ]);

        $post->save(); // Save the new post to the database

        return response()->json($post); // Return the new post as JSON
    }
}