<?php

namespace App\Http\Controllers;

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
    public function sendEmailContact(Request $rq)
    {
        if (empty($rq->get('recaptcha_token'))) {
            throw new \Exception("captcha required", 1);
        }
        $captcha = $rq->get('recaptcha_token');
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
        return response()->json(['status'=>0, 'message'=>'Hemos recibido sus datos, tan pronto como sea posible uno de nuestros agentes lo contactara.']);
    }
}