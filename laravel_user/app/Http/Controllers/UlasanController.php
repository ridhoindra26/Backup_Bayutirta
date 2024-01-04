<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Ulasan;

class UlasanController extends Controller
{
    public function getUlasan() {
        $ulasan = Ulasan::all();
        $response = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJ-4NA1pSdeC4R5ik3KRItaq8&key=AIzaSyBGr_Mzjw025m1jTs-YnbWMXVNeQ1WgCjw');
        $res = json_decode($response);
        
        // $google = (array)[];
        // return response()->json($res->result->reviews);
        foreach ($res->result->reviews as $item) {
            // $artikel->author_name = $item->author_name;
            // $artikel->rating = $item->rating;
            // $artikel->text = $item->text;
            // $artikel->created_at = $item->time;
            $array =array([
                'author_name' => $item->author_name,
                'rating' => $item->rating,
                'text' => $item->text,
                'created_at' => $item->time,
            ]);
            // $google = array_merge($google,$array);
        }
        // foreach ($ulasan as $item) {
        //     $array[] =array(
        //         'author_name' => $item->author_name,
        //         'rating' => $item->rating,
        //         'text' => $item->text,
        //         'created_at' => $item->created_at,
        //     );
        // }

        // $result = (object)$array;
        
        // $obj_merged = mergeObjectsRecursively( $artikel, $objectss);
        // $obj_merged = (object) array_merge($array, (array) $artikel);
        // $result->{"0"}['author_name']
        return response(['result'=>$res->result->reviews]);
        // echo $response->reviews;

    }

    public function addUlasan(Request $request)
    {
        // 'author-name',
        // 'text',
        // 'rating',
        // 'created_at'
        $validatedData = $request->validate([
            'author_name' => 'required|max:255',
            'text' => 'required',
            'rating' => 'required'
        ]);

        // Create a new Post instance with the validated data
        $post = new Ulasan([
            'author_name' => $validatedData['author_name'],
            'text' => $validatedData['text'],
            'rating' => $validatedData['rating'],
            'created_at' => now()
        ]);

        $post->save(); // Save the new post to the database

        return response()->json($post); // Return the new post as JSON
    }
}
