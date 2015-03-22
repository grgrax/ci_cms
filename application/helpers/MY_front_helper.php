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


// partners
function get_partners_widget($category_name){
	$ci=& get_instance();
	try {
		$response=$ci->load->model('category/category_m')->read_row_by_slug($category_name);
		$data['row']=$response;
		$data['rows']=get_articles_of_category($response['id']);
		return $data;
	} catch (Exception $e) {
		redirect();
	}	
}
// partners

// partners

function get_category_and_subcategories($category_name){
	$ci=& get_instance();
	try {
		$response=$ci->load->model('category/category_m')->read_row_by_slug($category_name);
		$data['row']=$response;
		$data['rows']=$ci->load->model('category/category_m')->read_all_published_childs($response['id']);						
		return $data;
	} catch (Exception $e) {
		redirect();
	}	
}
function get_category_and_aritcles($category_name){
	$ci=& get_instance();
	try {
		$response=$ci->load->model('category/category_m')->read_row_by_slug($category_name);
		$data['row']=$response;
		$data['rows']=$ci->load->model('article/article_m')->read_all_published_of_category($response['id']);						
		return $data;
	} catch (Exception $e) {
		redirect();
	}	
}
// partners

