<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function card() {

        return view('admin.dashboard');
    }

    public function store(request $request) {

    	if ($request->hasFile('card_file','preview')) {
    		
            $card_preview = $request->preview->store('public/uploads/previews');
    		$card_name = $request->card_file->store('public/uploads/contents');
    		$card_title = $request->card_title;
    		$card_type = $request->card_type;
            $card_creation = $request->card_creation;
    		$card_description = $request->card_description;

    		$card_file = new Card;
            $card_file->preview = $card_preview;
    		$card_file->name = $card_name;
    		$card_file->title = $card_title;
    		$card_file->type = $card_type;
            $card_file->date_created = $card_creation;
    		$card_file->description = $card_description;
    		$card_file->save();
    		
    		return view('admin.dashboard');
    	}
    }
}
