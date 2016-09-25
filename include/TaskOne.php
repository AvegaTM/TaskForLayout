<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TaskOne{
    
    var $date;
    var $city = 'Тверь';
    
    /**
     * 
     * @return string of prev/next dates
     */
    function getDates() {
        $mounth_array = array('января', 'февраля', 'марта', 'апреля', 'майя', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
        $cur_date = new DateTime();
        $cur_date->modify('-1 day');
        $prev_date = new DateTime($cur_date->format('Y-m-d'));
        $cur_date->modify('+2 day');
        $next_date = new DateTime($cur_date->format('Y-m-d'));
        if ($prev_date->format('m') == $next_date->format('m')) {
            $this->date = 'c '.$prev_date->format('d').' по '.$next_date->format('d').' '.$mounth_array[$prev_date->format('m')-1];
        } else {
            $this->date = 'c '.$prev_date->format('d').' '.$mounth_array[$prev_date->format('m')-1].' по '.$next_date->format('d').' '.$mounth_array[$next_date->format('m')-1];
        }
        return $this->date;
    }

    /**
     * from memory
     */
    function getIP() {
        $request = 'https://api.ipify.org/?format=json';
    }
    
    /**
     * 
     * @return string of geolocation city
     */
    function getCity() {
        $request = 'http://ip-api.com/json/';
        if ($stream = fopen($request, 'r')) {
            $answer = json_decode( stream_get_contents($stream, -1, 0), true);
            fclose($stream);
        }
        if (isset($answer)) {
            $this->city = $answer['city'];
            return $this->city;
        }
    }
}