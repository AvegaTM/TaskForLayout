<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TaskTow {

    var $js;
    
    function TaskTow() {
        if (empty($_COOKIE)) {
            $this->setMyCookie();
            $this->js = "<script> function func(){ alert('Привет!'); }; setTimeout(func, 5000); </script>";
        } else {
            //var_dump($_COOKIE);
            $this->js = "<script></script>";
        }
    }
    
    function setMyCookie() {
        setcookie("TestCookie", 'длинное уникальное число', time()+3600);
    }
    
    /**
     * 
     * @return string of HTML script
     */
    function getScript() {
        return $this->js;
    }
}