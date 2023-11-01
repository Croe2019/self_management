<?php

namespace App\Http\Controllers\StatusCreateController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function createForm()
    {
        return view('CreateStatusForm/create');
    }
}
