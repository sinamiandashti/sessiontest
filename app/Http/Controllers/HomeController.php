<?php

namespace App\Http\Controllers;

use App\Service\Service1;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function __construct(Service1 $service1)
    {

        dd(session()->getId(),$service1->getSessionId(),session('sina'),$service1->returnSinaSessionData());
    }
}
