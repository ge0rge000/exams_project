<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PDF;
class AboutUs extends Component
{

    public function generatePDF()
	{
	    $pdf = PDF::loadView('livewire.about-us');
	    $pdf->autoScriptToLang = true;
	    $pdf->autoArabic = true;
	    $pdf->autoLangToFont = true;
	    return $pdf->download('pdf.pdf');
	}
    public function render()
    {
        return view('livewire.about-us')->layout('layouts.base');
    }
}
