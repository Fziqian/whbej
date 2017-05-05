<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */
class Ctl_Mobile_Zxlc extends Ctl_Mobile {
    
    public function index($page=1) {
    	K::M('helper/seo')->init('mprocess',array()); 
        $this->tmpl = 'mobile/zxlc.html';
    }
    
}