<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Illuminate\Http\Request;

class FirebaseController extends Controller
{
	public function index(){
		$title = 'Create Destination';
        return view('index')->with('title', $title);
	}

	public function create(){
		return view('create');
	}

    public function store(Request $request){

    	$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/sapk-8af98-firebase-adminsdk-rwh5y-e89c402d4b.json');
		$firebase = (new Factory)
	    ->withServiceAccount($serviceAccount)
	    ->create();

	    $child = $request->input('child_name');
	    $description = $request->input('description');
	    $image = $request->input('image');
	    $menuld = $request->input('menuld');
	    $name = $request->input('name');
	    $price = $request->input('price');

	    $child = 'Location/' . $child;
	    $db = $firebase->getDatabase();
	    $db->getReference($child)->set([
	    	'description' => $description,
	    	'image' => $image,
	    	'menuld' => $menuld,
	    	'name' => $name,
	    	'price' => $price

	    	// 'description' => 'clifford1',
	    	// 'image' => 'clifford1',
	    	// 'menuld' => 'clifford1',
	    	// 'name' => 'clifford_gwapo1',
	    	// 'price' => '1billion1'
	    ]);
	   
	    return redirect('/sample')->with('success', 'successfully!');
    }

    public function sample(){
	 	$title = 'Sample';
        return view('sample')->with('title', $title);
    }
}
