<?php




class Hs_Bj_City_List_Load_City{

    public function load_city($states){
	$api_obj = new Hs_Bj_City_List_API();
	$api_url = $api_obj->get_api_url('benin-states'); 
	$benin_city = $api_obj->get_request_from_api($api_url);
	if (isset($benin_city->error)){
		return $states;
	}elseif (isset($benin_city->towns)){
		foreach($benin_city->towns as $city_id => $city_name){
			if(isset($city_name->name)){
				$states['BJ'][strtolower($city_name->name)] =  $city_name->name ;
			}
		}
	}
        return $states;
    }
}

$class_obj = new Hs_Bj_City_List_Load_City();

add_filter( 'woocommerce_states', array($class_obj,'load_city') );

