<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class PageController extends Controller
{
  /**
   * Opens the home page.
   *
   */
  function start(Request $request) {
    return view('pages.home');
  }

  /**
   * Opens the order page.
   *
   */
  function project() {
    
    return view('pages.project');
  }

  /**
   * Opens the support/help page.
   *
   */
  function event() {
    return view('pages.event');
  }

  /**
   * Opens the about page.
   *
   */
  function aboutUs() {
    return view('pages.about-us');
  }

  /**
   * Opens the about page.
   *
   */
  function contactUs() {
    return view('pages.contact-us');
  }
  
  function changeLang(Request $request) {
    $app= App::getFacadeRoot();
    $currentLocale = $request->cookie('locale') ?: 'en';
    
    switch ($currentLocale) {
      case 'nl':
        $currentLocale = 'en';
        break;
      case 'en':
        $currentLocale = 'nl';
        break;
      default:
        $currentLocale = 'en';
        break;
    }
    
    Cookie::queue('locale', $currentLocale, 60);        
    return;
  }
}
