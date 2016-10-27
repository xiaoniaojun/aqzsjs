<?php

class BaseAction extends Action {

    public function _initialize() {
        header("Content-Type:text/html; charset=utf-8");
        header('Content-Type:application/json; charset=utf-8');
    }

    public function verify_code() {
        $w = isset($_GET['w']) ? (int) $_GET['w'] : 50;
        $h = isset($_GET['h']) ? (int) $_GET['h'] : 30;
        import("ORG.Util.Image");
        Image::buildImageVerify(4, 1, 'png', $w, $h);
    }

}