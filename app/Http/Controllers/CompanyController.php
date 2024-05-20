<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Company;

class CompanyController extends Controller
{
    public function __invoke()
    {
        $companies = Company::all();

        return Inertia::render('Companies', ['companies' => $companies]);
    }
}
