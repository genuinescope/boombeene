<?php

/*
  Author: Daniel Gutierrez
  Date: 9/23/12
  Version: 1.0
 */

class New_Order extends CI_Controller {

    function __construct() {
        parent::__construct();
//		
//		$this->load->module("users");
//		
//		if(!$this->users->_is_admin()){
//			show_404();
//		}
    }

    function index() {
        //$data['main_content'] = 'dashboard';
        $this->load->view('myaccount/new_order');
    }

    function loadData() {
        $linkURL = $this->input->post('linkURL');
        $urlType = $this->input->post('urlType');

        if ($urlType == "ebay") {
            $this->readEbayData($linkURL);
        }
    }

    function readEbayData($url) {
        $ch = curl_init();
        $timeout = 20;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $html = curl_exec($ch);
        curl_close($ch);

# Create a DOM parser object
        $dom = new DOMDocument();

# Parse the HTML from Google.
# The @ before the method call suppresses any warnings that
# loadHTML might throw because of invalid HTML in the page.
        @$dom->loadHTML($html);
//echo $html;

        $ebayArr = array();
        $title_element = $dom->getElementById("itemTitle");
        $ebayTitle = trim(str_replace("Details about", " ", strip_tags($title_element->nodeValue)));
        $ebay_price = $dom->getElementById("prcIsum")->getAttribute("content");
        $ebay_image = $dom->getElementById("icImg")->getAttribute("src");
        $ebayArr["title"] = $ebayTitle;
        $ebayArr["price"] = $ebay_price;
        $ebayArr["img"] = $ebay_image;

        print_r($ebayArr);

# Iterate over all the <a> tags
//        foreach ($dom->getElementsByTagName('a') as $link) {
//            # Show the <a href>
//            echo $link->getAttribute('href');
//            echo "<br />";
//        }
    }

}

?>