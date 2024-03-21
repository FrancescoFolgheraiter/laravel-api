<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//importazione formRequest di contact
use app\Http\Requests\Contact\StoreRequest as ContactStoreRequest;

class ContactController extends Controller
{
    //funzione per la ricezione dei dati
    public function store(ContactStoreRequest $request){

    }
}
