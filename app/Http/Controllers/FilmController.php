<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $domains = DB::table('films')
            ->get(); // you were missing the get method
        return response()->json($domains, 200, ['Access-Control-Allow-Origin' => '*']);
    }
}
