<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        $data = Website::paginate(10);
        return response()->json([
            'results' => $data,
            'success' => 1,
        ]);
    }
}
