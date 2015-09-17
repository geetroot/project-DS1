<?php

class ClientController extends BaseController
{

	protected $layout = "layouts.client";
    
    public function getIndex ()
    {
        if (Auth::check()) {
            $this->layout->content = View::make('clients.index');
        } else {
            return Redirect::to('/');
        }
    }

   
}
