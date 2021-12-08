<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class EmployeeController extends Controller
{
    public function downloadpdf()
    {
       $pdf = PDF::loadView('pdf');
       return $pdf->download('employee.pdf');
    }
}
