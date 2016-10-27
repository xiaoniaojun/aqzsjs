<?php

class MemberAction extends CommonAction {

    public function index() {
        $this->assign("list", D("Member")->MemberList());
        $this->display();
    }



}