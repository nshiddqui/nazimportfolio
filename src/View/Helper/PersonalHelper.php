<?php

namespace App\View\Helper;

use Cake\View\Helper;

class PersonalHelper extends Helper {

    function processUrl($url) {
        $ch = curl_init();
        curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => 2));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    function googleScreenshot($url, $type = 'desktop') {
        $api = "https://www.googleapis.com/pagespeedonline/v1/runPagespeed?screenshot=true&strategy=$type&url=$url";
        $data = $this->processUrl($api);
        $data_array = json_decode($data, TRUE);
        $base_data = "data:image/jpeg;base64," . str_replace(['_', '-'], ['/', '+'], $data_array['screenshot']['data']);
        return $base_data;
    }

}
