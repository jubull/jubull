<?php

namespace app\admin\model\ali;

use think\Model;

class Client extends Model {
    // 表名
    protected $name = 'ali_client';
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = 'deletetime';
    // 追加属性
    protected $append = [
        
        'status_text',
        'state_text'
    ];
}
