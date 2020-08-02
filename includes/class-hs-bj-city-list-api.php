<?php

class Hs_Bj_City_List_API{

    /**
     * This function do a request to API url who returns a response in JSON format.
     *
     * @param string $url
     * @return object
     */
    public function get_request_from_api($url){
        try{
            $request = wp_remote_get($url);
            $request_body = wp_remote_retrieve_body($request);
        }catch(Exception $errors){
            $request_body = wp_json_encode(array('error'=>'An error occured'));
        }
        return json_decode($request_body);
    }


    /**
     * This function return the url of the type specified.
     *
     * @param string $url_type
     * @return string
     */
    public function get_api_url($url_type){
        if ($url_type == "benin-states"){
            $url = "https://bj-decoupage-territorial.herokuapp.com/api/v1/towns";
        }
        return $url;
    }
}