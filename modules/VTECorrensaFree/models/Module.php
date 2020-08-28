<?php
class VTECorrensaFree_Module_Model extends Vtiger_Module_Model {

    function getSettingLinks() {
        $settingsLinks[] = array(
            'linktype' => 'MODULESETTING',
            'linklabel' => 'Settings',
            'linkurl' => 'index.php?module=VTECorrensaFree&parent=Settings&view=Settings',
            'linkicon' => ''
        );
       
        $settingsLinks[] = array(
            'linktype' => 'MODULESETTING',
            'linklabel' => 'Uninstall',
            'linkurl' => 'index.php?module=VTECorrensaFree&parent=Settings&view=Uninstall',
            'linkicon' => ''
        );
        return $settingsLinks;
    }
}