<?php
if (!defined('BASE_PATH')) exit('Access Denied!');

/**
 * Created by PhpStorm.
 * User: kyle.ke
 * Date: 2018/3/30
 * Time: 11:24
 */
class Common_Expection_Marketing {

    public static $mReportCodeDesc = array(
        //        0 => '操作成功，没有错误',
        10000 => 'GDT接口无法处理，请重试。如果重复遇到此错误，请联系开放人员',
        //        18001 => '缺少必要的参数，参数名：{Param}',
        //        18002 => '参数{Param}必须是{TYPE}',
        //        18003 => '参数{Param}必须小于{Value}',
        //        18004 => '参数{Param}必须大于{Value}',
        //        18005 => '参数{Param}的数据格式不符合要求',
        //        18006 => '参数{Param}含有非法字符',
        //        18007 => '参数{Param}长度太长',
        //        18008 => '参数{Param}长度太短',
        //        18009 => '参数{Param}值不在[{Enum}]中',
        18010 => '文件类型不允许',
        //        18011 => '参数{Param}数组元素太多，最多有{Value}个',
        //        18012 => '参数{Param}数组元素太少，至少有{Value}个',
        //        18013 => '参数{Param}小数位数太长，小数点后最多{Value}位',
        30000 => '系统错误，请重试。如稳定复现请保留请求信息并向广点通官方反馈',
        //        30106 => '缺少必要的参数，参数名：{agency_token}',
        30107 => '新增服务商授权失败，请确认是否已经授权过',
        //        31001 => '参数{Param}不能为空',
        //        31009 => '没有权限操作指定对象，对象名：{Object}',
        //        31010 => '操作的对象不存在或已删除，对象名：{Object}',
//        31011 => '参数{Param}错误，对应的数据不存在',
        31013 => '名称已经存在',//'对象存在重名，对象名：{Object}'
        31014 => '文件签名校验失败',
        31016 => '参数值太小',
        31026 => '推广计划日预算小于当前消耗加上最低修改幅度',
        31027 => '已使用相同的outer_id创建对象',
        31028 => 'outer_id不匹配',
        31030 => '版本必须比当前版本新',
        //        31031 => '参数{Param}不允许修改',
        //        31034 => '参数值错误，参数名：{Param}',
        //        31035 => '以下参数必须至少设置一项，参数名：[{Param}]',
        31036 => '只能提供一个order_by参数',
        31037 => '上传文件过大',
        31038 => '请求没有权限',
        31099 => '参数值错误',
        32100 => '余额不足',
        32102 => '只能在同类型资金账户间划账',
        32103 => '当前资金账户类型不支持划账',
        32104 => '充值通知签名错误',
        //        32105 => '划账失败，当前账户已超{Value}笔有效资金',
        32106 => '不允许向冻结的账户划账',
        32107 => '只有生效帐户才能设置日限额',
        32108 => '参数date_range的时间跨度超过允许的范围',
        32109 => '超过每日划账次数限制，请明天再试',
        32203 => '帐号预算修改次数太多',
        32206 => '手机号和座机号不能同时为空',
        32207 => '没有找到有效的广告主',
        32209 => '代理商状态不可用',
        32210 => '调用方必须为代理商',
        32211 => '广告主帐号当前不可用',
        32212 => '日限额太大',
        32213 => '日限额太小',
        32214 => '当前广告主状态不允许保存草稿',
        32215 => '调用update接口必须修改至少一项内容',
        32216 => '提交审核需要的信息不完整',
        32217 => 'industry_id和outer_industry不能同时为空',
        32218 => '填写的QQ号已被注册为广告主',
        32219 => '广告主没有绑定微信公众号',
        32220 => '该推广计划由其他服务商创建',
        32221 => '日预算需要高于当前帐号的总消耗',
        32302 => '推广计划限额修改次数太多',
        32306 => '只有暂停的计划才能被删除',
        32307 => '推广计划限额太小',
        32308 => '计划类型不能被修改',
        32310 => '日限额太大',
        32311 => '日限额太小',
        32312 => '开始日期不得早于今日',
        32313 => '所选的城市或商圈不属于同一出价级别',
        32402 => '开始日期必须早于结束日期',
        32405 => '最低曝光频次和最高曝光频次必须成对设置',
        32406 => '最高曝光频次不得小于最低曝光频次',
        32407 => '推广计划上已经设置了投放站点',
        32408 => '广告投放站点未设置',
        32409 => '推广计划已经设置投放时段',
//        32410 => '{Enum}类型推广计划只能使用{Enum}类型的计费方式',
        32413 => '投放日期重复设置',
        32415 => '广告出价不得超过计划预算的50%',
        32416 => '当前广告不允许修改出价',
        32417 => '无法使用当前标的物类型',
        32419 => '行业资质编码不存在',
        32420 => '营业执照号错误',
        32421 => '定向不能进行修改',
        32422 => '出价超出限制',
        32423 => '当前推广计划下广告组数量超出限制',
        32424 => '属性{PARAM}与所属推广计划或推广计划下的其他广告组的不一致',
        32425 => '微信广告组的商品类型只能为PRODUCT_TYPE_LBS_WECHAT、PRODUCT_TYPE_LINK_WECHAT',
        //        32426 => '微信推广计划的参数非法，参数名：{Param}',
        //        32427 => '出价不符合城市{Param}的级别要求',
        32428 => 'targeting_id和targeting不能同时使用',
        32429 => '微信公众号及朋友圈广告不允许使用targeting_id，仅允许使用targeting',
        32430 => '定向中的地域不能为空',
        32431 => '定向中的地域，省市区县列表 和 商圈id列表不能同时为空',
        32432 => '定向中的地域，自定义地理位置仅支持近期在这里的人、旅行到这里的人',
        //        32432 => 'location_types仅支持{Param}',
        //        32433 => '{Param}参数不允许使用',
        //        32504 => '当前规格不能被标的物类型为{Enum}的广告组使用',
        32506 => '广告组id和计划id不匹配',
        32507 => '视频类型错误',
        32508 => '视频尺寸不符合要求',
        32509 => '存储图片失败',
        32510 => '曝光监控地址主域不在允许的白名单内',
        32513 => '广告组已经设置落地页地址',
        //        32514 => '创意元素creative_element中参数｛Param｝错误',
        32515 => '落地页地址中标的物ID与adgroup中标的物ID必须一致',
        32516 => '当前广告是动态创意广告，必须使用动态创意规格',
        32517 => '视频时长不符合要求',
        32518 => '视频文件大小不符合要求',
        32519 => '视频文件处理中，暂不可用',
        32520 => '图片尺寸不符合要求',
        32521 => '图片文件过大',
        32523 => 'site_set和product_type两个筛选条件必须一起使用',
        32524 => '创意元素不符合规格要求',
        32525 => '图片文件过小',
        32526 => '视频文件转码失败',
        32527 => '当前规格不能在广告组对应的站点投放',
        32528 => '未授权使用该规格',
        32529 => '当前创意不可使用',
        32531 => '创意和广告组上的广告类型不一致',
        32532 => '推广计划的标的物类型和广告创意的标的物类型不匹配',
        32533 => '广告组的站点和广告创意的站点不匹配',
        32534 => '广告组的标的物类型和广告创意的标的物类型不匹配',
        32535 => '广告组的标的物id和广告创意的标的物id不匹配',
        32536 => '同一推广计划下的微信朋友圈广告个数已达上限',
        32537 => '同一推广计划下的微信朋友圈广告仅能关联同一广告创意',
        32538 => '微信朋友圈广告仅能关联一个广告创意',
        32539 => '微信公众号广告仅能关联一个广告创意',
        32540 => '朋友圈创意必须归属于朋友圈推广计划',
        32541 => '创意数量达到限制',
        32542 => '微信朋友圈广告仅支持一张图片',
        32544 => '创意元素的文字描述最多4行',
        32545 => '微信朋友圈广告一旦有过曝光后，即不允许修改',
        32605 => 'app_behavior下object_type不存在',
        32606 => 'app分类必须指定最细级别',
        32607 => '不能同时使用位置和地域定向',
        //        32609 => '定向详细条件中{Param}错误',
        //        32610 => '区间错误: 参数{Param}的上限大于下限',
        32615 => '当前帐号不允许使用该行为作为定向',
        32702 => '每月创建的APP标的物超上限',
        32705 => 'app id不能为空',
        32706 => '未发现对应的app',
        32708 => '未发现对应的渠道包id',
        32709 => '视频说说缩略图不存在',
        32710 => '请不要重复创建标的物',
        32711 => '找不到对应的开发平台PC应用',
        32712 => '获取开放平台PC应用名称失败',
        32713 => '标的物类型暂不支持',
        32801 => '无效的聚合条件',
        32803 => '报表日期超限',
        32804 => '当前的排序规则不支持',
        32805 => '报表的类型和层级不匹配',
        32901 => '上传文件为空',
        32902 => '文件类型不支持',
        32903 => 'URL指定的图片无法正常读取',
        32904 => '文件播放时间太长',
        50002 => 'account_id无效',
        51000 => '参数异常',
        51001 => '系统异常',
        51002 => '无效的数据协议',
        52012 => '无效的文件类型',
        52015 => '文件大小超过限制',
    );

    public static function getCodeDesc($code) {
        return self::$mReportCodeDesc[$code];
    }

}