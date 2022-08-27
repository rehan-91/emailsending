<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use App\Models\User;
use Response;
use Input;
use Auth;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $email_datas= EmailTemplate::latest()->get();
        return view('home',compact('email_datas'));
    }
    

     public function createTemplate()
    {
        return view('email.create_email_template');
    }

       
    public function SaveTemplate(Request $request){
     
    $this->validate($request, [
            'template_name' => 'required',
                        'email_subject' => 'required',
                       
                        'email_message' =>'required',
            
        ], [
            'template_name.required' => 'Please enter template name.',
            'email_subject.required' => 'Please enter Email Subject.',
            'email_message.required' => 'Please enter To Mail HTML.',
          
            
            
        ]);
         
        $email = new EmailTemplate();
      
        $email->template_name = $request->input("template_name");
       
        $email->email_subject = $request->input("email_subject");
        $email->email_message = $request->input("email_message");
        $email->from_address =  Auth::user()->email;
        $email->from_name = Auth::user()->name;
      
        $email->save();

        return redirect('/home')->with('message', 'Template Added!');

       
    }
    
     public function EmailForm(Request $request)

    {
       $email_datas= EmailTemplate::latest()->get();
        return view('email.show_email_form',compact('email_datas'));
    }


        public function SendEmail(Request $request){

                $this->validate($request, [
                        'email_id' => 'required',
                         ], [
            'email_id.required' => 'Please enter email .',     
           
        ]);


       // send email
                $emailId = $request->input("email_id");
                $template_id = $request->input("template_name");
                $template_name = EmailTemplate::where('id',$template_id)->first();
              
                $email_content = array();
                $email_content["user_name"] = Auth::user()->name;
                $email_content["user_email"] =  Auth::user()->email;
                $email_content["message"] =  Auth::user()->email_message;
                
                $email_message = new EmailTemplate();
                $email_message->singleMailSendIntegration( $emailId, $template_name->template_name , $email_content );
        // end email
                  
        return redirect('/home')->with('message', 'Email Sent Succesfully !');

       
    }

}
