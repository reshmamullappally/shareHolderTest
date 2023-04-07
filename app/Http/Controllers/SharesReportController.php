<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharesReportController extends Controller
{
    public function shares_report()
    {
        return view('reports.share_reports');
    }
}
