<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TaskThree {

    var $view;
    var $error = 0;
    var $person = array();

    /**
     * 
     * @param Smarty $smarty
     */
    function TaskThree($smarty) {
        $this->view = $smarty;
        if (isset($_POST) and !empty($_POST['test'])) {
            $test = filter_input(INPUT_POST, 'test');
            if (($test == 'test') and 
                ($p_name = filter_input(INPUT_POST, 'name')) and 
                ($p_phone = filter_input(INPUT_POST, 'phone')) and 
                ($p_email = filter_input(INPUT_POST, 'email'))
                ){
                $email_ar = explode('@', $p_email);
                //var_dump($email_ar);
                if (preg_match('/\d+/i', $p_name, $result))
                {
                    $this->error += 16;
                }
                if (preg_match('/\D+/i', $p_phone, $result)) {
                    $this->error += 8;
                }
                if ((!filter_var($p_email, FILTER_VALIDATE_EMAIL) and !preg_match('/[@|.]/', $p_email, $result)) 
                    or !isset($email_ar[1])) {
                    $this->error += 4;
                }
                if (!getmxrr ($email_ar[1], $mxhosts)) {
                    $this->error += 2;
                }
                if ($this->error == 0) {
                    $this->person = ['name' => $p_name, 'phone' => $p_phone, 'email' => $p_email];
                }
            }
        
        }
    }
    
    function display(){
        if ($this->error == 0) {
            if (!empty($this->person)){
                $this->view->assign('person', $this->person);
            }
            $this->view->display('templates/PageContent3.tpl');
        } else {
            if ($this->error >= 16) {
                $error_msg[] = 'Name!';
                $this->error -= 16;
            }
            if ($this->error >= 8) {
                $error_msg[] = 'Phone!';
                $this->error -= 8;
            }
            if ($this->error >= 4) {
                $error_msg[] = 'E-Mail!';
                $this->error -= 4;
            }
            if ($this->error >= 2) {
                $error_msg[] = 'E-Mail! I can not find the MX record in the specified domain.';
                $this->error -= 2;
            }
            $this->view->assign('error', $error_msg);
            $this->view->display('templates/PageContent3_error.tpl');
        }
        
    }
}