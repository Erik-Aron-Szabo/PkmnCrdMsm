<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
  public function displayAllCardsForSet(Request $request)
  {
    $set_code = $request->path();


    return view('sets')->with('set_code', $set_code);
  }

  public function showCard(Request $request)
  {
    $cards_card_id = $request->path();

    return view('card')->with('cards_card_id', $cards_card_id);
  }
}
