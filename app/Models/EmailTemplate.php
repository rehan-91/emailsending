<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;


class EmailTemplate extends Model
{
    use HasFactory;

        protected $fillable = [
        'template_name', 'email_subject', 'email_message','from_address','from_name'
    ];


    public function singleMailSendIntegration( $email_address, $template_name = '', $email_content ){
        
        $email_data = EmailTemplate::where( "template_name", $template_name )->first();
        
        
        if( $email_data && intval( $email_data->id ) > 0 ){
            
            $message_content = $email_data->email_message;
            $subject = $email_data->email_subject;
            
            if( count( $email_content ) > 0 ){
                foreach( $email_content as $key => $value ){
                    $message_content = str_replace( ":".$key.":", $value, $message_content );
                    $subject = str_replace( ":".$key.":", $value, $subject );
                }
            }
            
            Mail::to( $email_address )->send( new SendMailable( $subject, $message_content, $email_data->from_address, $email_data->from_name) );            
            
        }
    }
}
