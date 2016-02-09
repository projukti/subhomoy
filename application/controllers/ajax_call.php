<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_call extends CI_Controller {

	
	public function enquiry()
	{
		
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			
			
			$to= "subhomoy.projukti@gmail.com";
			
			
			
			

			
			$subject="CONTACT DETAILS.";
			// Your message
			
			$message = '
			<table width="100%" style="border-collapse: collapse">
				<tr>
					<td align="center">
						<table style="width: 100%; max-width: 600px; font-family: arial, sans-serif; font-size: 14px; border-collapse: collapse">
							<tr>
								<td align="center" style="background: #f5f5f5; padding: 15px"><img src="http://localhost/caravanintex/assets/images/logo.jpg" style="width: 300px; max-width: 100%" alt="Caravan"></td>
							</tr>
							<tr>
								<td align="center" style="background: #4d4d4d; padding: 15px; color: #f5f5f5">Incoming Message</td>
							</tr>
							<tr>
								<td style="background: #f5f5f5; padding: 0">
									<table width="100%" style="border-collapse: separate">
										<tr>
											<td width="100" style="background: #a98361; color: white; padding: 10px">Name</td>
											<td style="background: #fff; color: #0b0b0b; padding: 10px">'.$name.'</td>
										</tr>
										<tr>
											<td width="100" style="background: #a98361; color: white; padding: 10px">Email</td>
											<td style="background: #fff; color: #0b0b0b; padding: 10px">'.$email.'</td>
										</tr>
										<tr>
											<td width="100" style="background: #a98361; color: white; padding: 10px">Phone</td>
											<td style="background: #fff; color: #0b0b0b; padding: 10px">'.$phone.'</td>
										</tr>
										<tr>
											<td width="100" style="background: #a98361; color: white; padding: 10px">Message</td>
											<td style="background: #fff; color: #0b0b0b; padding: 10px">'.$message.'</td>
										</tr>
									</table>
			
								</td>
							</tr>
							<tr>
								<td style="background: #565656 url(http://localhost/caravanintex/assets/images/logo.jpg) repeat 0 0; padding: 15px; color: #f5f5f5">Sent from <a href="http://caravanintex.com/" style="color: #ffb300; font-weight: 600; text-decoration: none">Caravan</a></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			';
			
			$headers = "From: $email\r\nReply-To: subhomoy.projukti@gmail.com";
			$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=iso-8859-1\r\n";
			//$headers .= 'Cc: subhomoy.projukti@gmail.com' . "\r\n";
			
			// send email
			if(mail($to, $subject, $message, $headers))
			{
				//$data['action'] = 'submit';
				//$this->session->set_flashdata('success_message','Contact details successfully sent');
				//redirect('home/contact_me');
				echo "succ";
			}
			else
			{
				//$data['action'] = 'submit';
				//$this->session->set_flashdata('error_message','Error in sending contact details! Please try again.');
				//redirect('home/contact_me');
				echo "fail";
			}

		
	}
}

