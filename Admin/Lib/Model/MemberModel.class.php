<?php

class MemberModel extends Model {

    /**
      +----------------------------------------------------------
     * 管理员列表
      +----------------------------------------------------------
     */
    public function MemberList() {
        $list = M("Member")->select();
        foreach ($list as $k => $v) {
         
        }
        return $list;
    }
 
    }

?>