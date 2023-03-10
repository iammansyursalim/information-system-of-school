<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return inertia('Page/Index', [
            'title' => 'Index'
        ]);
    }
}
