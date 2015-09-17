<?php

class ClientController extends BaseController
{

   
    public function getIndex ()
    {
        if (Auth::check()) {
            return View::make('clients.index');
        } else {
            return Redirect::to('/');
        }
    }

   
}
