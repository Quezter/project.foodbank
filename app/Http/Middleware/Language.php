<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class Language 
{
  public function __construct(Application $app, Redirector $redirector, Request $request) {
    $this->app = $app;
    $this->redirector = $redirector;
    $this->request = $request;
  }

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    if ($request->isMethod('get')) {
      $currentLocale = $request->cookie('locale') ?: 'en';
      $this->app->setLocale($currentLocale);
    }
    
    return $next($request);
  }
}
