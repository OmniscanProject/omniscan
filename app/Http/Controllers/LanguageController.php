<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
  
class LanguageController extends Controller
{
    
    public function switch(Request $request): RedirectResponse
    {
        $language = $request->input('language');

        session(['language' => $language]);
  
        return redirect()->back()->with(['language_switched' => $language]);
    }
}

