<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

class Ctl_Mobile_Index extends Ctl_Mobile {
    
    public function index(){
        K::M('helper/seo')->init('mindex',array());
        $this->tmpl ='mobile/index.html';
    }
    
}