<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Cache\Cache;

class CurlComponent extends Component {

    function processUrl($url) {
        if (!$this->validateUrl($url)) {
            return false;
        }
        if (($result = Cache::read($url)) === false) {
            $ch = curl_init();
            curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => 2));
            $result = curl_exec($ch);
            curl_close($ch);
            Cache::write($url, $result);
        }
        return $result;
    }

    function googleScreenshot($url, $type = 'desktop') {
        if (!$this->validateUrl($url)) {
            return false;
        }
        $api = "https://www.googleapis.com/pagespeedonline/v1/runPagespeed?screenshot=true&strategy=$type&url=$url";
        $data = $this->processUrl($api);
        $data_array = json_decode($data, TRUE);
        if (empty($data_array['screenshot']['data'])) {
            return '/img/not-found.png';
        }
        $base_data = "data:image/jpeg;base64," . str_replace(['_', '-'], ['/', '+'], $data_array['screenshot']['data']);
        return $base_data;
    }

    function validateUrl($url) {
        if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
            return false;
        }
        return true;
    }

}
