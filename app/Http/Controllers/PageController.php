<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  /**
   * Opens the home page.
   *
   */
  function start() {
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

  /**
   * Opens the coin info page.
   *
   */
  function coinInfo($code='') {
    return view('pages.coins')->with('code', $code);
  }


}
