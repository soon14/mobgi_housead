<?php
if (!defined('BASE_PATH')) exit('Access Denied!');
/**
 * Created by PhpStorm.
 * User: kyle.ke
 * Date: 2018/3/21
 * Time: 20:04
 */
class MobgiMarket_Dao_ImageModel extends Common_Dao_Base {
    public $adapter = 'mobgiMarket';
    protected $_name = 'market_image';
    protected $_primary = 'id';
}