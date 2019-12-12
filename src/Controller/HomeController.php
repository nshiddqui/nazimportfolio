<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Zend\Diactoros\Stream;

class HomeController extends AppController {

    public function index() {
        
    }

    public function about() {
        
    }

    public function portfolio() {
        
    }

    public function services() {
        
    }

    /*
     * 
     * Get Google ScreenShot of Website
     * 
     *  
     */

    public function GetGoogleScreenshot() {
        if ($this->request->getQuery('url') && !empty($this->request->getQuery('url'))) {
            $url = $this->request->getQuery('url');
            $this->loadComponent('Curl');
            $responseData = $this->Curl->googleScreenshot($url);
        } else {
            $responseData = 'Request not accept';
        }
        $this->set([
            'my_response' => $responseData,
            '_serialize' => 'my_response',
        ]);
        die($responseData);
    }

    public function contactUs() {
        $responseData = 'Request not accept';
        if ($this->request->is('post')) {
            $articles = TableRegistry::getTableLocator()->get('ContactUs');
            $dataFromPost = $this->request->getData();
            $dataFromPost['ip'] = $this->request->clientIp();
            $dataFromPost['referer'] = $this->referer();
            $article = $articles->newEntity($dataFromPost);
            if ($article->getErrors()) {
                $responseData = json_encode($article->getErrors());
            } else if ($articles->save($article)) {
                $responseData = 'Data has been saved';
            } else {
                $responseData = 'Data has not been saved';
            }
        }
        $this->set([
            'response' => $responseData,
            '_serialize' => 'response',
        ]);
        return $this->RequestHandler->renderAs($this, 'json');
    }

}
