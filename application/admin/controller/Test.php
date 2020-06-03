<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use makcent\AlibabaSDK\SDK;

/**
 * 测试管理
 *
 * @icon fa fa-circle-o
 */
class Test extends Backend {
    
    /**
     * Test模型对象
     * @var \app\admin\model\Test
     */
    protected $model = null;
    
    public function _initialize() {
        parent::_initialize();
        
        $this->model = new \app\admin\model\Test;
        $this->view->assign("weekList", $this->model->getWeekList());
        $this->view->assign("flagList", $this->model->getFlagList());
        $this->view->assign("genderdataList", $this->model->getGenderdataList());
        $this->view->assign("hobbydataList", $this->model->getHobbydataList());
        $this->view->assign("statusList", $this->model->getStatusList());
        $this->view->assign("stateList", $this->model->getStateList());
    }
    
    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    public function index() {
        SDK::schema([
            'com.china.example' => '/com/alibaba/china/openapi/client/example/',
            'com.china' => '/com/alibaba/china/openapi/client/example/param/apiexample/',
        ]);
        $exampleFacade = SDK::getSdk('com.china.example.ExampleFacade');
        $exampleFacade->setAppKey("1969732");
        $exampleFacade->setSecKey("Trpds48WmA");
        $exampleFacade->setServerHost("https://www.jubull.com");
        SDK::schema([
            'com.china.example' => '/com/alibaba/china/openapi/client/example/',
            'com.china' => '/com/alibaba/china/openapi/client/example/param/apiexample/',
        ]);
        $param = SDK::getSdk('com.china.ExampleFamilyGetParam');
        $param->setFamilyNumber(1);
        $exampleFamilyGetResult = SDK::getSdk('com.china.ExampleFamilyGetResult');
        $exampleFacade->exampleFamilyGet($param, $exampleFamilyGetResult);
        echo "<pre>";
        print_r($exampleFacade);
        exit;
    }
    
    public function test() {
        $param = SDK::getSdk('com.china.ExampleFamilyGetParam');
        $param->setFamilyNumber(1);
        echo "<pre>";
        print_r($param);
        exit;
        
    }
}
