<?php

// 本类设置项目一些常用信息
class WebinfoAction extends CommonAction {

    /**
      +----------------------------------------------------------
     * 配置网站信息
      +----------------------------------------------------------
     */
    public function index() {
        $this->checkSystemConfig();
    }



    /**
      +----------------------------------------------------------
     * 配置网站信息
      +----------------------------------------------------------
     */
    public function setSafeConfig() {
        $this->checkSystemConfig("TOKEN");
    }

    /**
      +----------------------------------------------------------
     * 网站配置信息保存操作等
      +----------------------------------------------------------
     */
    private function checkSystemConfig($obj = "SITE_INFO") {
        if (IS_POST) {
            $this->checkToken();
            $config = WEB_ROOT . "Common/systemConfig.php";
            $config = file_exists($config) ? include "$config" : array();
            $config = is_array($config) ? $config : array();
            $config = array_merge($config, array("$obj" => $_POST));
            $str = $obj == "SITE_INFO" ? "网站配置信息" : $obj == "SYSTEM_EMAIL" ? "系统邮箱配置" : "安全设置";
            if (F("systemConfig", $config, WEB_ROOT . "Common/")) {
                delDirAndFile(WEB_CACHE_PATH . "Runtime/Admin/~runtime.php");
                if ($obj == "TOKEN") {
                    unset($_SESSION, $_COOKIE);
                    echo json_encode(array('status' => 1, 'info' => $str . '已更新，你需要重新登录', 'url' => __APP__ . '?' . time()));
                } else {
                    echo json_encode(array('status' => 1, 'info' => $str . '已更新'));
                }
            } else {
                echo json_encode(array('status' => 0, 'info' => $str . '失败，请检查', 'url' => __ACTION__));
            }
        } else {
            $this->display();
        }
    }

 

}

?>