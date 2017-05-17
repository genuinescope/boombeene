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
        $this->load->model("model_order");
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
        //check if this ebay is bid
        if (!is_null($dom->getElementById("binBtn_btn"))) {
            $ebayArr = array();
            $ebayTitle = "";
            $ebay_price = "";
            $ebay_image = "";
            $title_element = $dom->getElementById("itemTitle");

            $ebayTitle = trim(str_replace("Details about", " ", strip_tags($title_element->nodeValue)));

            if (!is_null($dom->getElementById("prcIsum"))) {
                $ebay_price = str_replace("US $", " ", $dom->getElementById("prcIsum")->nodeValue);
            } else if (!is_null($dom->getElementById("mm-saleDscPrc"))) {
                $ebay_price = str_replace("US $", " ", $dom->getElementById("mm-saleDscPrc")->nodeValue);
            }

            $ebay_image = $dom->getElementById("icImg")->getAttribute("src");
            $ebayArr[0] = $ebayTitle;
            $ebayArr[1] = $ebay_price;
            $ebayArr[2] = $ebay_image;

            $options = "";
            $divs = $dom->getElementsByTagName('div');
            foreach ($divs as $div) {
                if ($div->hasAttribute('class') && strstr($div->getAttribute('class'), 'vi-bbox-dspn  u-flL lable')) {
                    $item_data_text = $div->nodeValue;
                    $ebayArr[3] = $item_data_text;


                    //get options of this dropdown
                    if (!is_null($dom->getElementById("msku-sel-1"))) {
                        $optins = str_replace("- Select", " ", $dom->getElementById("msku-sel-1")->nodeValue);
                        $optionTags = $dom->getElementById("msku-sel-1")->getElementsByTagName('option');
                        foreach ($optionTags as $tag) {

                            $options .= "<option value='" . $tag->nodeValue . "'>" . $tag->nodeValue . "</option>";
                        }
                        $ebayArr[4] = $options;
                    }
                }
            }

            echo(json_encode($ebayArr));
        } else {
            echo "bid";
        }




# Iterate over all the <a> tags
//        foreach ($dom->getElementsByTagName('a') as $link) {
//            # Show the <a href>
//            echo $link->getAttribute('href');
//            echo "<br />";
//        }
    }

    function save_order() {

        $data = array(
            'web_link' => $this->input->post('weblink'),
            'item_name' => $this->input->post('itemName'),
            'userId' => $this->session->userdata("userid"),
            'item_price' => $this->input->post('itemPrice'),
            'item_image' => $this->input->post('itemImage'),
            'item_data_text' => $this->input->post('hdn_item_data_text'),
            'item_data_value' => $this->input->post('item_data_value'),
            'item_model' => $this->input->post('itemModel'),
            'specification' => $this->input->post('specification'),
            'quantity' => $this->input->post('qty'),
            'notes' => $this->input->post('note'),
            'shipping_branch' => $this->input->post('branch')
        );
       
        $output = $this->model_order->save_new_order($data);
        if ($output == "1") {
            
            $this->session->set_flashdata('msg', $this->lang->line('successfully_added'));
            redirect($this->config->item("base_url") . "my_account/orders/all");
        }
    }

}

?>