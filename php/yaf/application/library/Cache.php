<?php
/**
 * 缓存操作
 *
 */

class Cache {
	
	protected $params;
	protected $enable;
	protected $handler;

	/**
	 * 实例化缓存驱动
	 *
	 * @param unknown_type $type
	 * @param unknown_type $args
	 * @return unknown
	 */
	public function connect($type = null,$args = array()){

		if (empty($type)){
			$type = C('cache.type');
			if(empty($type)){
				$type = 'file';
			}
		}
		$type = strtolower($type);
		$class = 'Cache'.ucwords($type);
		include_once dirname(__FILE__).'/cache/cache.'.strtolower($type).'.php';
		return new $class($args);
	}

	/**
	 * 取得实例
	 *
	 * @return object
	 */
	public static function getInstance(){
		$args = func_get_args();
		return get_obj_instance(__CLASS__,'connect',$args);
	}
}
?>