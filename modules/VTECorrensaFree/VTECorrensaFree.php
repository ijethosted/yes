<?php
class VTECorrensaFree extends CRMEntity {
	static $_VERSION = '1.0';
	static $CONNECTOR_URL = 'https://dashboard.vtexperts.com/frcnt/connect';
	static $MODULE_LABEL = 'Corrensa Lite (Free)';

	function vtlib_handler($modulename, $event_type) {
		global $adb;
		if($event_type == 'module.postinstall') {
			self::addSettingMenu();
			self::connectAfterInstall();
		} else if($event_type == 'module.disabled') {
			self::removeSettingMenu();
			self::eventDisableModule();
		} else if($event_type == 'module.enabled') {
			self::addSettingMenu();
			self::connectAfterInstall();
		} else if($event_type == 'module.preuninstall') {
			self::removeSettingMenu();
			self::eventDisableModule();
		} else if($event_type == 'module.preupdate') {
			self::addSettingMenu();
			self::connectAfterInstall();
		} else if($event_type == 'module.postupdate') {

		}
	}

	public static function connectAfterInstall(){
		global $adb,$site_URL, $vtiger_current_version;
		$enable = true;
		$params = array(
			'panel_url' => $site_URL,
			'panel_registermode' => $enable,
			'panel_module_version' => VTECorrensaFree::$_VERSION,
			'panel_version' => $vtiger_current_version,
		);

		$connectorResult = VTECorrensaFree::post($params);
		$sql = "UPDATE `corrensafree_settings` SET `pid`=?,`enable`=?";
		if ($connectorResult && $connectorResult['pid']){
			$params = array($connectorResult['pid'],$enable);
			$adb->pquery($sql,$params);
		}
	}

	public static function post($params = array())
	{
		$stream = curl_init();
		curl_setopt($stream, CURLOPT_URL, self::$CONNECTOR_URL);
		curl_setopt($stream, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($stream, CURLOPT_POST, 1);
		curl_setopt($stream, CURLOPT_POSTFIELDS, $params);
		curl_setopt($stream, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($stream, CURLOPT_SSL_VERIFYHOST, false);
		$output = curl_exec($stream);

		curl_close($stream);

		try {
			$outputData = json_decode($output, true);

			return $outputData;
		} catch (Exception $ex) {
			throw new Exception("Can not parse json | " . $ex->getMessage());
		}
	}


	function addSettingMenu()
	{
		$adb = PearDatabase::getInstance();

		$checkRs = $adb->pquery("SELECT * FROM vtiger_settings_field WHERE `name` = ?",array(self::$MODULE_LABEL));

		if ($adb->num_rows($checkRs) > 0) {
			return false;
		}

		/* ADD SETTING MENU */
		$maxId = $adb->getUniqueID('vtiger_settings_field');
		$query = "INSERT INTO `vtiger_settings_field` (`fieldid`, `blockid`, `name`, `description`, `linkto`, `sequence`)
						  VALUES (?, ?, ?, ?, ?, ?)";
		$adb->pquery($query, array($maxId, '4', self::$MODULE_LABEL, 'VTECorrensaFree Settings', 'index.php?module=VTECorrensaFree&parent=Settings&view=Settings', $maxId));
		/* ADD SETTING MENU */
	}

	function removeSettingMenu()
	{
		$adb = PearDatabase::getInstance();

		/*  REMOVE SETTING MENU */
		$adb->pquery("DELETE FROM vtiger_settings_field WHERE `name` = ?", array(self::$MODULE_LABEL));
		/*  REMOVE SETTING MENU */
	}

	// disable module // uninstall
	// remove config on server
	// remove config on database
	public static function eventDisableModule(){
		global $adb, $site_URL, $vtiger_current_version;
		$enable = 0;

		$result = $adb->pquery("SELECT `pid` FROM `corrensafree_settings` LIMIT 0,1");
		$pid = $adb->query_result($result,0,'pid');

		$params = array(
			'panel_id' => $pid,
			'panel_url' => $site_URL,
			'panel_registermode' => $enable,
			'panel_module_version' => VTECorrensaFree::$_VERSION,
			'panel_version' => $vtiger_current_version,
		);
		$connectorResult = VTECorrensaFree::post($params);
		$sql = "UPDATE `corrensafree_settings` SET `pid`=?,`enable`=?";
		if ($connectorResult && $connectorResult['pid']){
			$params = array($connectorResult['pid'],$enable);
			$adb->pquery($sql,$params);
		}
	}
}
