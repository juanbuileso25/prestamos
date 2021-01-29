<?php

    class ViewModel {

        // Modelo para obtener vistas
        protected static function getViews($views){
            $whiteList = [];
            if(in_array($views, $whiteList)){

            } elseif($views == "login" || $views == "index") {
                $content = "login";
            } else {
                $content = "404";
            }

            return $content;
        }
    }