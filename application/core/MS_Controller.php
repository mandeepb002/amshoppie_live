<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *  MS_Controller extends Controller default controller of codeigniter
 * 	overriding the default controller. provides additional
 *	functionality to handles unauthorized user access
 *	to admin panel and provides common functionality
 *
 *  @author Mandeep Singh
 */
class MS_Controller extends CI_Controller {

	var $api = false; //for checking api call
	/**
	 * Default constructor
	 *
	 */
	function __construct()
	{
		parent::__construct();
		//$this->_is_user_logged_in();
		$this->_is_api_call();
	}

	/**
	 * Check if user is not logged in then redirect user to login page or if logged in then
	 * send inside
	 */
	function _is_user_logged_in()
	{
		$user = $this->session->userdata('user');

		//user is logged in send him inside
		if ( isset($user['email']) && $this->router->fetch_method() == 'index')
		{
			$this->output->set_header('location:' . $this->config->item('base_url') . 'user/desktop');
			//user is not logged in and requested the forgot password so do nothing let him retrieve his password
		} else if ( ( ! isset($user['username'])) && $this->router->fetch_method() == 'forgot_password')
		{
			// Do nothing let it continue.
			//user is not logged in and he is try to access inner pages. send him out.
		}else if ( ( ! isset($user['email'])) && $this->router->fetch_method() == 'reset')
		{
			// Do nothing let it continue.
			//user is not logged in and he is try to access inner pages. send him out.
		} else if ( ( ! isset($user['email'])) && $this->router->fetch_method() != 'index')
		{
			$this->output->set_header('location:' . $this->config->item('base_url') . 'user/index');
		}
	}

	/**
	 * Check if admin user is not logged in then redirect user to login page or if logged in then
	 * send inside
	 */
	function _is_admin_logged_in()
	{
		$user = $this->session->userdata('admin');

		//user is logged in send him inside
		if ( isset($user['username']) && $this->router->fetch_method() == 'index')
		{
			$this->output->set_header('location:' . $this->config->item('base_url') . 'admin/admin/desktop');
			//user is not logged in and requested the forgot password so do nothing let him retrieve his password
		} else if ( ( ! isset($user['username'])) && $this->router->fetch_method() == 'forgot_password')
		{
			// Do nothing let it continue.
			//user is not logged in and he is try to access inner pages. send him out.
		}else if ( ( ! isset($user['username'])) && $this->router->fetch_method() == 'reset')
		{
			// Do nothing let it continue.
			//user is not logged in and he is try to access inner pages. send him out.
		} else if ( ( ! isset($user['username'])) && $this->router->fetch_method() != 'index')
		{
			$this->output->set_header('location:' . $this->config->item('base_url') . 'admin/admin/index');
		}
	}

	/**
	 *	Check if call from API end
	 */
	function _is_api_call()
	{
		$key = trim($this->input->get_post('key'));
		if(!empty($key)) {
			if($key == API_KEY) {
				$this->api = true;
				//check post method
				if($this->input->server('REQUEST_METHOD') != 'POST') {
					echo json_return("false", 'Invalid request method. Please use POST method only.');die;
				}
			}
			else {
				if($this->input->server('REQUEST_METHOD') != 'POST') {
					echo json_return("false", 'Invalid request method. Please use POST method only.');die;
				}
				die(json_encode(array('status' => 'false', 'result' => 'Invalid API key.')));
			}
		}

	}

}
