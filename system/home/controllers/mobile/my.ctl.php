<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */
class Ctl_Mobile_My extends Ctl_Mobile {
    
       public function index(){
       	   K::M('helper/seo')->init('mmypro',array());
           $this->tmpl='mobile/my.html';
       }
    
}