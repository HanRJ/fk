<?php

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 公共设施控制器
 */
class CommonController extends HomeController {

    public function index(){
    }


    /**
     * auto complete 查询
     */
    public function acquery(){
        $q   = I('get.q', '');
        if(empty($q)){
            $this->ajaxErr(-1, '参数错误！');
        }
        $q = '%'.$q.'%';
        // 实例化一个空模型，没有对应任何数据表
        $Dao = M();
        $list = $Dao->query("SELECT * FROM %s WHERE code like '%s' or name_py like '%s' or name like '%s' order by (name like '%s')desc limit 0,10",C('DB_PREFIX').'codes',$q,$q,$q,$q);
        if($list){
            $this->ajaxSucc(array('list'=>$list));
        } else {
            $this->ajaxErr(-2, $Dao->getError());
        }
    }
}