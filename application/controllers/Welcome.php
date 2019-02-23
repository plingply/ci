<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function webhook()
	{
		// GitHub Webhook Secret.
		// Keep it the same with the 'Secret' field on your Webhooks / Manage webhook page of your respostory.
		$secret = "penglin";
		// Path to your respostory on your server.
		// e.g. "/var/www/respostory"
		$path = "/www/wwwroot/ci";
		// Headers deliveried from GitHub
		$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];
		if ($signature) {
			$hash = "sha1=".hash_hmac('sha1', file_get_contents("php://input"), $secret);
			if (strcmp($signature, $hash) == 0) {
				echo shell_exec("cd {$path} && /usr/bin/git reset --hard origin/master && /usr/bin/git clean -f && /usr/bin/git pull 2>&1");
				exit();
			  }
		}
		http_response_code(404);
	}
}
