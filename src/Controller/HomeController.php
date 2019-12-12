<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

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
        $this->layout = false;
        $this->render(false);
        if ($this->request->getQuery('url') && !empty($this->request->getQuery('url'))) {
            $url = $this->request->getQuery('url');
            $this->loadComponent('Curl');
            $responseData = $this->Curl->googleScreenshot($url);
        } else {
            $responseData = 'Request not accept';
        }
        $this->response->body(function () use ($responseData) {
            return $responseData;
        });
        return;
    }

    public function contactUs() {
        $this->viewBuilder()->setLayout(false);
        $this->render(false);
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
        $this->response->getBody(function () use ($responseData) {
            return $responseData;
        });
        return;
    }

}
