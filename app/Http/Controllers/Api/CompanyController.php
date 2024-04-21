<?php

namespace App\Http\Controllers\Api;

use App\Models\Company;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function __invoke()
    {
        $companies = Company::all();

        return response()->json($companies);
    }
}
