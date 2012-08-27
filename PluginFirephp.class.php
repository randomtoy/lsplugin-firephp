<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginFirephp extends Plugin {

    /**
     * Plugin Orders activation
     */
    public function Activate() {

        return true;
    }

    /**
     * Init plugin Tasks
     */
    public function Init() {
        require_once(Plugin::GetPath(__CLASS__) .'lib/external/firephp-0/FirePHPCore/FirePHP.class.php');


    }

    static public function GetLog($sName){
        $oFirePHP = FirePHP::getInstance(true);
        $oFirePHP->log($sName);
    }

}

?>
