<?php

namespace App\Http\Controllers;

use App\Models\Infraction;
use Illuminate\Http\Request;

class InfractionController extends Controller
{
    public function index()
    {
        $infractions = Infraction::all();

        return $infractions;
    }
}
