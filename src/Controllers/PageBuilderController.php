<?php

namespace Mariojgt\Onix\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageBuilderController extends Controller
{
    public function index()
    {
        return view('onix::builder.js-grape');
    }

    public function ckEditor()
    {
        return view('onix::builder.ck-editor');
    }
    // example how to save
    public function save(Request $request, $id)
    {
        dd(Request('data')['gjs-html'], $id);
    }
    // example how to load
    public function load($id)
    {
        return response()->json([
            'data' => '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/><footer class="container py-5 bg-dark"><div class="row"><div class="col-12 col-md"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg><small class="d-block mb-3 text-muted">© 2017-2018</small></div><div class="col-6 col-md"><h5>Features</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Cool stuff</a></li><li><a href="#" class="text-muted">Random feature</a></li><li><a href="#" class="text-muted">Team feature</a></li><li><a href="#" class="text-muted">Stuff for developers</a></li><li><a href="#" class="text-muted">Another one</a></li><li><a href="#" class="text-muted">Last time</a></li></ul></div><div class="col-6 col-md"><h5>Resources</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Resource</a></li><li><a href="#" class="text-muted">Resource name</a></li><li><a href="#" class="text-muted">Another resource</a></li><li><a href="#" class="text-muted">Final resource</a></li></ul></div><div class="col-6 col-md"><h5>Resources</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Business</a></li><li><a href="#" class="text-muted">Education</a></li><li><a href="#" class="text-muted">Government</a></li><li><a href="#" class="text-muted">Gaming</a></li></ul></div><div class="col-6 col-md"><h5>About</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Team</a></li><li><a href="#" class="text-muted">Locations</a></li><li><a href="#" class="text-muted">Privacy</a></li><li><a href="#" class="text-muted">Terms</a></li></ul></div></div></footer><footer class="container py-5 bg-dark"><div class="row"><div class="col-12 col-md"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg><small class="d-block mb-3 text-muted">© 2017-2018</small></div><div class="col-6 col-md"><h5>Features</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Cool stuff</a></li><li><a href="#" class="text-muted">Random feature</a></li><li><a href="#" class="text-muted">Team feature</a></li><li><a href="#" class="text-muted">Stuff for developers</a></li><li><a href="#" class="text-muted">Another one</a></li><li><a href="#" class="text-muted">Last time</a></li></ul></div><div class="col-6 col-md"><h5>Resources</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Resource</a></li><li><a href="#" class="text-muted">Resource name</a></li><li><a href="#" class="text-muted">Another resource</a></li><li><a href="#" class="text-muted">Final resource</a></li></ul></div><div class="col-6 col-md"><h5>Resources</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Business</a></li><li><a href="#" class="text-muted">Education</a></li><li><a href="#" class="text-muted">Government</a></li><li><a href="#" class="text-muted">Gaming</a></li></ul></div><div class="col-6 col-md"><h5>About</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Team</a></li><li><a href="#" class="text-muted">Locations</a></li><li><a href="#" class="text-muted">Privacy</a></li><li><a href="#" class="text-muted">Terms</a></li></ul></div></div></footer><footer class="container py-5 bg-dark"><div class="row"><div class="col-12 col-md"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg><small class="d-block mb-3 text-muted">© 2017-2018</small></div><div class="col-6 col-md"><h5>Features</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Cool stuff</a></li><li><a href="#" class="text-muted">Random feature</a></li><li><a href="#" class="text-muted">Team feature</a></li><li><a href="#" class="text-muted">Stuff for developers</a></li><li><a href="#" class="text-muted">Another one</a></li><li><a href="#" class="text-muted">Last time</a></li></ul></div><div class="col-6 col-md"><h5>Resources</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Resource</a></li><li><a href="#" class="text-muted">Resource name</a></li><li><a href="#" class="text-muted">Another resource</a></li><li><a href="#" class="text-muted">Final resource</a></li></ul></div><div class="col-6 col-md"><h5>Resources</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Business</a></li><li><a href="#" class="text-muted">Education</a></li><li><a href="#" class="text-muted">Government</a></li><li><a href="#" class="text-muted">Gaming</a></li></ul></div><div class="col-6 col-md"><h5>About</h5><ul class="list-unstyled text-small"><li><a href="#" class="text-muted">Team</a></li><li><a href="#" class="text-muted">Locations</a></li><li><a href="#" class="text-muted">Privacy</a></li><li><a href="#" class="text-muted">Terms</a></li></ul></div></div></footer>',
        ]);
    }
}
