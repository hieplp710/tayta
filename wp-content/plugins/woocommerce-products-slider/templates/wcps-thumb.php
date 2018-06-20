<?php

/*
* @Author 		PickPlugins
* Copyright: 	2015 PickPlugins
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 
    $price_text = apply_filters( 'wcps_filter_price', $price );
$title_text = apply_filters( 'wcps_filter_title', get_the_title(get_the_ID()) );


	$html.= '<div class="wcps-items-thumb"><a href="'.$permalink.'"><img alt="'.get_the_title().'" src="'.$wcps_thumb_url.'" />';
    $html.= '<div class="wcps-items-title" ><a style="color:'.$wcps_items_title_color.';font-size:'.$wcps_items_title_font_size.'" href="'.$permalink.'">'.$title_text.'</a></div>';
    $html.= '<div class="wcps-items-price in-thumb" style="color:'.$wcps_items_price_color.';font-size:'.$wcps_items_price_font_size.'">'.$price_text .'</div>';
	$html.= '</a></div>';