<?php
require_once 'modules/VTECorrensaFree/VTECorrensaFree.php';

class VTECorrensaFree_ActionAjax_Action extends Vtiger_Action_Controller {

    function checkPermission(Vtiger_Request $request) {
        return;
    }

    function __construct() {
        parent::__construct();
        $this->exposeMethod('enableModule');

    }

    function process(Vtiger_Request $request) {
        $mode = $request->get('mode');
        if(!empty($mode)) {
            $this->invokeExposedMethod($mode, $request);
            return;
        }
    }

    function enableModule(Vtiger_Request $request) {
        global $adb, $site_URL, $vtiger_current_version;
        $enable=$request->get('value');
        $params = array();
        if ($enable == true){
            $params = array(
                'panel_url' => $site_URL,
                'panel_registermode' => $enable,
                'panel_module_version' => VTECorrensaFree::$_VERSION,
                'panel_version' => $vtiger_current_version,
            );
        }else{
            $pid = $this->getPanelId();
            $params = array(
                'panel_id' => $pid,
                'panel_url' => $site_URL,
                'panel_registermode' => $enable,
                'panel_module_version' => VTECorrensaFree::$_VERSION,
                'panel_version' => $vtiger_current_version,
            );
        }

        $connectorResult = VTECorrensaFree::post($params);
        $sql = "UPDATE `corrensafree_settings` SET `pid`=?,`enable`=?";
        if ($connectorResult && $connectorResult['pid']){
            $params = array($connectorResult['pid'],$enable);
            $adb->pquery($sql,$params);
        }

        $response = new Vtiger_Response();
        $response->setEmitType(Vtiger_Response::$EMIT_JSON);
        $response->setResult(array('result'=>'success'));
        $response->emit();
    }

    private function getPanelId(){
        global $adb;
        $result = $adb->pquery("SELECT `pid` FROM `corrensafree_settings` LIMIT 0,1");
        return $adb->query_result($result,0,'pid');
    }
}