/* ********************************************************************************
 * The content of this file is subject to the VTECorrensa Free Lite ("License");
 * You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is VTExperts.com
 * Portions created by VTExperts.com. are Copyright(C) VTExperts.com.
 * All Rights Reserved.
 * ****************************************************************************** */
jQuery.Class("VTECorrensaFree_Settings_Js",{
    instance:false,
    getInstance: function(){
        if(VTECorrensaFree_Settings_Js.instance == false){
            var instance = new VTECorrensaFree_Settings_Js();
            VTECorrensaFree_Settings_Js.instance = instance;
            return instance;
        }
        return VTECorrensaFree_Settings_Js.instance;
    }
},{
    registerEnableModuleEvent:function() {
        jQuery('.corrensa-settingpage').find('#enable_module').change(function(e) {
            var progressIndicatorElement = jQuery.progressIndicator({
                'position' : 'html',
                'blockInfo' : {
                    'enabled' : true
                }
            });

            var element=e.currentTarget;
            var value=0;
            var text="Corrensa (Free Version) Disabled";
            if(element.checked) {
                value=1;
                text = "Corrensa (Free Version) Enabled";
            }
            var params = {};
            params.action = 'ActionAjax';
            params.module = 'VTECorrensaFree';
            params.value = value;
            params.mode = 'enableModule';
            AppConnector.request(params).then(
                function(data){
                    progressIndicatorElement.progressIndicator({'mode' : 'hide'});
                    var params = {};
                    params['text'] = text;
                    Settings_Vtiger_Index_Js.showMessage(params);
                },
                function(error){
                    //TODO : Handle error
                    progressIndicatorElement.progressIndicator({'mode' : 'hide'});
                }
            );
        });
    },
    registerEvents: function(){
        this.registerEnableModuleEvent();
    }
});

jQuery(document).ready(function() {
    var instance = new VTECorrensaFree_Settings_Js();
    instance.registerEvents();
});