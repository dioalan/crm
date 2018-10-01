<?php

namespace App\Provider;

class AppProvider extends \Bono\Provider\Provider
{
    public function initialize()
    {
        $app = $this->app;

        $app->filter('auth.authorize', function ($option) use ($app){
        	if (is_array($option) && isset($option['uri'])) {
        		$uri = $option['uri'];
        	} else {
        		$uri = $option;
        	}

        	return $option;
        }, 0);
        
//-----mendirect langsung ke halaman yag di ingninkan----
        $app->get('/', function () use ($app){
        	if (isset($_SESSION['user'])) {
        		$app->redirect('pekerjaan');
        	} else {
        		$app->redirect('login');
        	}
        });
        
    }


    
}
