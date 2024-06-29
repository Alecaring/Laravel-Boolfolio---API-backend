<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
