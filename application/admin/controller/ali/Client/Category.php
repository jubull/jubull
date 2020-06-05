<?php

namespace app\admin\controller\ali\Client;

use app\common\controller\Backend;
use app\admin\model;

/**
 * 应用类目
 *
 * @icon fa fa-circle-o
 */
class Category extends Backend {
    
    /**
     * Category模型对象
     * @var \app\admin\model\ali\Client\Category
     */
    protected $model = null;
    protected $setModel = null;
    
    public function _initialize() {
        parent::_initialize();
        $this->model = new model\ali\Client\Category;
        $this->setModel = new model\ali\Client\Set;
        $this->view->assign("typeList", $this->setModel->getTypeList());
        $this->view->assign("statusList", $this->model->getStatusList());
    }
    
    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    
    
}
