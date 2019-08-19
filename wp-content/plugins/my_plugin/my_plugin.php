<?php
/*
Plugin Name: my test plugin plugin
Author: Petrozavodsky
Requires PHP: 7.0
Version: 1.0.0
License: GPLv3
*/

class Singleton
{

    public static function init(){
    	// вызываю метод тут
        add_action('init', [__CLASS__,'payload']);
    }

    // unused element возникает здесь, скриншот - https://yadi.sk/i/IonRVDW0-ECdPA
    public static function payload(){

    }
}

add_action('plugin_loaded', function (){
	Singleton::init();
});
