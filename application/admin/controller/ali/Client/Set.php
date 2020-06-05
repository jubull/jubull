<?php

namespace app\admin\controller\ali\Client;

use app\common\controller\Backend;

/**
 * 应用管理
 *
 * @icon fa fa-circle-o
 */
class Set extends Backend
{
    
    /**
     * Set模型对象
     * @var \app\admin\model\ali\Client\Set
     */
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\ali\Client\Set;
        $this->view->assign("typeList", $this->model->getTypeList());
        $this->view->assign("statusList", $this->model->getStatusList());
    }
    
}
