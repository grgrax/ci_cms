<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

	/**
	 * Alpha-numeric with underscores and dashes
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	public function alpha_space($str)
	{
		return ( ! preg_match("/^([-a-z0-9_-\ ])+$/i", $str)) ? FALSE : TRUE;
	}

	public function is_cateogry_name_unique($name,$id)
	{
		$CI=CI::$APP;
		$catgory=$CI->load->model('category\category_m')->read_row($id);		
		$CI->form_validation->set_message("isUniqueCateogryName", "The %s ($email) is already used, please try another <br/>");
		return FALSE;
		//$user=$CI->doctrine->em->getRepository('models\User')->findOneBy(array('email'=>$email));
		if (!$catgory)
			return TRUE;
		else
		{
			if($id!=$catgory['id']){
				$CI->form_validation->set_message("isUniqueCateogryName", "The %s ($email) is already used, please try another <br/>");
				return FALSE;
			}
			return TRUE;
		}
	}


	//callbacks by forms
}
// END Form Validation Class

