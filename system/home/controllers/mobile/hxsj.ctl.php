<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */
class Ctl_Mobile_Hxsj extends Ctl_Mobile {
    
    public function index($page=1) {
    	K::M('helper/seo')->init('moldhome',array());
        $this->tmpl = 'mobile/hxsj.html';
    }
    
}