<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function get_articles_of_category($cat_id){
	$ci=& get_instance();
	try {
		return $ci->load->model('article/article_m')->read_all_published_of_category($cat_id);
	} catch (Exception $e) {
		redirect();
	}
}

function get_category_of_article($id){
	$ci=& get_instance();
	try {
		return $ci->load->model('category/category_m')->read_row($id);
	} catch (Exception $e) {
		redirect();
	}
}


