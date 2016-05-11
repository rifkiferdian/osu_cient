<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send_email extends CI_Model {

	function __construct() { 
		 parent::__construct(); 
		 $this->load->library('session'); 
		 $this->load->helper('form'); 
	} 

	public function edit_actve_register($key)
	{
		$data = array(
					'active' => "1",
				);

		$this->db->where('key_register', $key);
		$this->db->update('user', $data);
	}


	public function send($send_to,$nama,$pass,$key) { 
		require_once(APPPATH.'libraries/vendor/autoload.php');
		$mail = new PHPMailer;
		$mail->isSMTP();

		$mail->SMTPAuth = true;
		$mail->Host = 'tls://smtp.gmail.com:587';
		$mail->Username = "onestopuni2@gmail.com";
		$mail->Password = "r1fk14hm4d";
		// $mail->SMTPDebug = 1;
		$mail->Debugoutput = 'html';
		$mail->setFrom('onestopuni2@gmail.com', 'onestop-uni.com');
		$mail->addReplyTo('onestopuni2@gmail.com', 'onestop-uni.com');

		//send to
		$mail->addAddress($send_to, $nama);
		$mail->isHTML(true);

		$url = base_url()."index.php/register/konfirmasi/".$key;


		$message = '<html><body>';
 
		$message .= '<table width="100%"; rules="all" style="border:1px solid #3A5896;" cellpadding="10">';
		 
		$message .= "<tr><td><img src='http://onestop-uni.com/assets/images/logo1.png' alt='onestop-uni' /></td></tr>";
		 
		$message .= "<tr><td colspan=2>Kepada $nama,<br /><br />username = $nama<br /> Password = $pass<br /><br />Terimakasih atas registrasi anda. Silahkan konfirmasi email anda dengan klik button tersebut </td></tr>";
		 
		$message .= "<tr><td><a href=\"$url\" style=\"background-color: #4CAF50;border: none; color: white;padding: 15px 32px;text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px;cursor: pointer;\">Konfirmasi</a></td></tr>";
		$message .= "<tr><td colspan=2 font='colr:#999999;'><I>onestop-uni.com<br>Semoga hari anda menyenangkan :)</I></td></tr>"; 
		 
		$message .= "</table>";
		 
		$message .= "</body></html>";


		//yang si kirimkan
		$mail->Subject = 'Konfirmasi register onestop-uni';
		$mail->Body = $message;
		$mail->AltBody = 'This is a plain-text message body';
		$mail->send();
		// if (!$mail->send()) {
		//     echo "Mailer Error: " . $mail->ErrorInfo;
		// } else {
		//     echo "<h1><b>Message sent!</b></h1>";
		// }

	} 

}



