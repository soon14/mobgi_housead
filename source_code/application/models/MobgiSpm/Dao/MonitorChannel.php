<?php
if (!defined('BASE_PATH')) exit('Access Denied!');
/**
 * Created by PhpStorm.
 * User: kyle.ke
 * Date: 2017/12/5
 * Time: 14:47
 */
class MobgiSpm_Dao_MonitorChannelModel extends Common_Dao_Base {
    public $adapter = 'mobgiSpm';
    protected $_name = 'monitor_channel';
    protected $_primary = 'id';
}