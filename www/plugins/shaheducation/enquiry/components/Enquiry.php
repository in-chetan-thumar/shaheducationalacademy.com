<?php namespace shahEducation\enquiry\components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use ValidationException;
use Redirect;
use LaminSanneh\FlexiContact\Models\Settings;
use Multiwebinc\Recaptcha\Validators\RecaptchaValidator;

class Enquiry extends ComponentBase
{
    
    public function componentDetails()
    {
        return [
            'name'        => 'Enquiry Form',
            'description' => 'Simple Enquiry form',
        ];
    }
    public function onSend()
    {
        $validator = Validator::make(
            [
                'name' => Input::get('name'),
                'email' => Input::get('email'),
                'type' => Input::get('type'),
                'contact' => Input::get('content'),
                'query' => Input::get('query'),
                //'g-recaptcha' => Input::get('g-recaptcha'),
            ],
            [
                'name' => 'required',
                'email' => 'required|email',
                'type' => 'required',
                'contact' => 'nullable|digits:10',
                'query' => 'required',
                // 'g-recaptcha' => [
                //     'required',
                //     new RecaptchaValidator,
                // ],
            ]
        );
        if($validator->fails()){
            throw new ValidationException($validator);
            //return Redirect::back()->withErrors($validator);
        }else{
            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'contact' => Input::get('contact'),'type' => Input::get('type'),
                'query' => Input::get('query'),
                'g-recaptcha' => Input::get('g-recaptcha')];
            
            Mail::send('shaheducation.enquiry::emails.message', $vars, function($message) {
                $message->to(Settings::get('recipient_email'), 'Admin Person');
                $message->subject('Enquiry');
            });
        }

    }

    
    public function googleCaptchaPasses($googleCaptchaResponse){
        $client = new \GuzzleHttp\Client();

        $params = array(
            'secret' => Settings::get('secret_key'),
            'response' => $googleCaptchaResponse,
            'remoteip' => Request::ip()
        );

        $res = $client->request(
                'POST',
                'https://www.google.com/recaptcha/api/siteverify',
                array(
                    'form_params' => $params
                )
            );

        $body = json_decode($res->getBody());

        return $body->success;
    }

    public function onRun(){
        $this->addJs('https://www.google.com/recaptcha/api.js');
        $this->addCss('assets/css/bootstrap.css');
        $this->addJs('assets/js/bootstrap.js');
        $this->addJs('assets/js/main.js');
    }

    public function siteKey(){
        return Settings::get('site_key');
    }

    public function enableCaptcha(){
        return Settings::get('enable_captcha');
    }
}
