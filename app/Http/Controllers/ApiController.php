<?php
/**
 * Created by PhpStorm.
 * User: kaspar.suursalu
 * Date: 27.04.2018
 * Time: 10:26
 */

namespace App\Http\Controllers;


use App\ListElement;
use Illuminate\Http\Request;
use Swagger\Client\Api\DeckApi;

class ApiController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function getList(){
        $list = ListElement::all()->pluck('element', 'id');
        return $list;
    }
    public function addToList(Request $request){
        $getParams = $request->all();
        $element = new ListElement($getParams);
        $element->save();
        var_dump($element);
        config('app.name');
    }

    public function removeFromList($id) {
        $element = ListElement::find($id);
        $element->delete();
    }
    public function cards(){
        $cardApi = new DeckApi();
        $newDeck = $cardApi->shuffleTheCards(null, 1);
        var_dump($newDeck->getDeckId());
    }
}