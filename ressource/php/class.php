<?php

class spinner {

    // Méthode statique pour spinner les textes
    public static function spin($texte) {
        return preg_replace_callback('/\{(.*?)\}/', function($matches) {
            $options = explode('|', $matches[1]);
            return $options[array_rand($options)];
        }, $texte);
    }

}
