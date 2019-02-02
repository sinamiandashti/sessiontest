<?php

namespace App\Service;

class Service1 {

    protected  $sessionId;
    function __construct()
    {
        $this->sessionId = session()->getId();
        session(['sina' => 'sina']);
    }

    function getSessionId() {
        return $this->sessionId;
    }

    function returnSinaSessionData() {
        return session('sina');
    }
}
