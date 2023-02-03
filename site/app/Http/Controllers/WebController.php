<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
    	return view('web.home');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function about()
    {
        return view('web.about');
    }
    public function services()
    {
        return view('web.services');
    }
    public function fleet()
    {
        return view('web.fleet');
    }
    public function destinations()
    {
        $destinations = \App\Models\Destination::where('lang', \App::getLocale())->get();
        return view('web.destinations', compact('destinations'));
    }
    public function destinationSlug($slug)
    {
        $destination = \App\Models\Destination::where('lang', \App::getLocale())
            ->where('slug', $slug)
            ->firstOrFail();
        return view('web.destinationSlug', compact('destination'));
    }
    public function sendContact(Request $rq)
    {
        ##dd($rq->all());
        if (empty($rq->get('g-recaptcha-response'))) {
            throw new \Exception("captcha required", 1);
        }
        $captcha = $rq->get('g-recaptcha-response');
        #$secretKey = "6LcGHk8UAAAAAILfagEEFFJmJJRaG8DJy2iDgerd";
        $secretKey = \App::make('SITE_CONFIGURATION')->recaptcha_private_key;
        #$ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);#."&remoteip=".$ip);
        $responseKeys = json_decode($response, true);
        if (intval($responseKeys["success"]) !== 1) {
            throw new \Exception("Invalid captcha", 1);
        }
        #Mail::to('l.d.calva@gmail.com')->send(new ContactWeb($rq));
        Mail::to(json_decode(\App::make('SITE_CONFIGURATION')->bcc_emails))
        ->send(new \App\Mail\Contact($rq));
        #Mail::to(['l.d.calva@gmail.com'])->send(new ContactWeb($rq));
        return response()->json(['status'=>'OK', 'message'=>trans('contact.messageOk')]);
    }
}