<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */
class Ctl_Mobile_Xfzx extends Ctl_Mobile {
    
    public function index($page=1) {
    	K::M('helper/seo')->init('mfull',array());
        $this->tmpl = 'mobile/xfzx.html';
    }
    
}