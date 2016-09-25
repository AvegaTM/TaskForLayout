<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'include/TaskOne.php';
require_once 'include/TaskTow.php';
require_once 'include/TaskThree.php';

class Controller {
    
    /**
     * 
     * @param Smarty $smarty
     */
    function Controller($smarty) {
        $tt = new TaskTow();
        $smarty->display('templates/PageHead.tpl');
        $to = new TaskOne();
        $smarty->assign('dates', $to->getDates());
        $smarty->assign('city', $to->getCity());
        $smarty->display('templates/PageContent.tpl');
        $ttr = new TaskThree($smarty);
        $ttr->display();
        $smarty->assign('myScript', $tt->getScript());
        $smarty->display('templates/PageScripts.tpl');
        $smarty->display('templates/PageFooter.tpl');
    }
    
    
}
