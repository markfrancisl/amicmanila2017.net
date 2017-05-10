<?php
namespace App\Http\Controllers;

use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class EmailController extends Controller
{

	public function __construct()
  	{

  	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Update posisi menu
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function send() {
        return 'asd';
    }
	public function sendermail()
	{

        	$data_toview = array();
			$data_toview['bodymessage'] = "Hello send test email";

			$email_sender 	= 'amic.contactus@gmail.com';
			$email_pass		= 'amic2017';
			$email_to 		= 'amic.contactus@gmail.com';

			// Backup your default mailer
			$backup = \Mail::getSwiftMailer();

			try{

						//https://accounts.google.com/DisplayUnlockCaptcha
						// Setup your gmail mailer
						$transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls');
						$transport->setUsername($email_sender);
						$transport->setPassword($email_pass);

						// Any other mailer configuration stuff needed...
						$gmail = new Swift_Mailer($transport);

						// Set the mailer as gmail
						\Mail::setSwiftMailer($gmail);

						$data['emailto'] = $email_sender;
						$data['sender'] = $email_to;
						//Sender dan Reply harus sama

						Mail::raw('pages.contactus', $data_toview, function($message) use ($data)
						{

							$message->from($data['sender'], 'Laravel Mailer');
							$message->to($data['emailto'])
							->replyTo($data['sender'], 'Laravel Mailer')
							->subject('Test Email');

							echo 'The mail has been sent successfully';
						});

			}catch(\Swift_TransportException $e){
				$response = $e->getMessage() ;
				echo $response;
			}


			// Restore your original mailer
			Mail::setSwiftMailer($backup);


	}




}