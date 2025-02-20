<?php
/* ********************************************************************************
 * The content of this file is subject to the Related Record Update ("License");
 * You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is VTExperts.com
 * Portions created by VTExperts.com. are Copyright(C) VTExperts.com.
 * All Rights Reserved.
 * ****************************************************************************** */

include_once 'vtlib/Vtiger/Module.php';
class VTECorrensaFree_Uninstall_View extends Settings_Vtiger_Index_View {
    function process (Vtiger_Request $request) {
        global $adb,$vtiger_current_version;
        echo '<div class="container-fluid">
                <div class="widget_header row-fluid">
                    <h3>VTECorrensa Free</h3>
                </div>
                <hr>';
        // Uninstall module
        $module = Vtiger_Module::getInstance('VTECorrensaFree');
        if ($module) $module->delete();

        // Remove related data
        $message = $this->removeData();
        echo $message;

        // remove directory
        if(version_compare($vtiger_current_version, '7.0.0', '<')) {
            $res_template = $this->delete_folder('layouts/vlayout/modules/VTECorrensaFree');
        }else{
            $res_template = $this->delete_folder('layouts/v7/modules/VTECorrensaFree');
            $res_template = $this->delete_folder('layouts/vlayout/modules/VTECorrensaFree');
        }
        echo "&nbsp;&nbsp;- Delete VTECorrensa Free template folder";
        if($res_template) echo " - DONE"; else echo " - <b>ERROR</b>";
        echo '<br>';

        $res_module = $this->delete_folder('modules/VTECorrensaFree');
        echo "&nbsp;&nbsp;- Delete VTECorrensa Free module folder";
        if($res_module) echo " - DONE"; else echo " - <b>ERROR</b>";
        echo '<br>';

        if(version_compare($vtiger_current_version, '7.0.0', '<')) {
            $folderLayoutNeedToDelete= "layouts/v7";
        }else{
            $folderLayoutNeedToDelete= "layouts/vlayout";
        }
        $this->delete_folder($folderLayoutNeedToDelete);

        echo "Module was Uninstalled.";
        echo '</div>';

        echo '<br>';
        echo 'Back to <a href="index.php?module=ModuleManager&parent=Settings&view=List">' . vtranslate('ModuleManager') . '</a>';
        echo '</div>';
    }

    function delete_folder($tmp_path){
        if(!is_writeable($tmp_path) && is_dir($tmp_path) && isFileAccessible($tmp_path)) {
            chmod($tmp_path,0777);
        }
        $handle = opendir($tmp_path);
        while($tmp=readdir($handle)) {
            if($tmp!='..' && $tmp!='.' && $tmp!=''){
                if(is_writeable($tmp_path.DS.$tmp) && is_file($tmp_path.DS.$tmp) && isFileAccessible($tmp_path)) {
                    unlink($tmp_path.DS.$tmp);
                } elseif(!is_writeable($tmp_path.DS.$tmp) && is_file($tmp_path.DS.$tmp) && isFileAccessible($tmp_path)){
                    chmod($tmp_path.DS.$tmp,0666);
                    unlink($tmp_path.DS.$tmp);
                }

                if(is_writeable($tmp_path.DS.$tmp) && is_dir($tmp_path.DS.$tmp) && isFileAccessible($tmp_path)) {
                    $this->delete_folder($tmp_path.DS.$tmp);
                } elseif(!is_writeable($tmp_path.DS.$tmp) && is_dir($tmp_path.DS.$tmp) && isFileAccessible($tmp_path)){
                    chmod($tmp_path.DS.$tmp,0777);
                    $this->delete_folder($tmp_path.DS.$tmp);
                }
            }
        }
        closedir($handle);
        rmdir($tmp_path);
        if(!is_dir($tmp_path)) {
            return true;
        } else {
            return false;
        }
    }

    /* ********************************************************************************
     * All module must be have function removeData(). Because VTEStore will call this function to uninstall extension
     * ****************************************************************************** */
    function removeData(){
        global $adb;
        $message='';

        // drop tables
        $sql = "DROP TABLE `corrensafree_settings`;";
        $result = $adb->pquery($sql,array());

        $message.= "&nbsp;&nbsp;- Delete VTECorrensa Free tables";
        if($result) $message.= " - DONE"; else $message.= " - <b>ERROR</b>";
        $message.= '<br>';

        return $message;
    }
}