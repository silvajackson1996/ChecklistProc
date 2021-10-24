<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CheckListService;

class checkListController extends Controller
{
    private CheckListService $checkListService;

    public function __construct() {
        $this->checkListService = new CheckListService();
    }

    public function index()
    {
        //return $this->checkListService->listEvents();

        return view('welcome');
    }
}
