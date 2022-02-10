<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\EventUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function subscribe($id = null)
    // {

    //     $this->suscriptions()->create(['user_id'=>$id ?:auth()->id()]);

    //     return view('home',);//Pendiente
    // }   

    public function store($userId, EventUser $event)
    {
        $event->subscribe();
    }

    public function unsuscribe($id = null)
    {
        $this->suscriptions()->where('user_id', $id ?: auth()->id())->delete();
    }

}

