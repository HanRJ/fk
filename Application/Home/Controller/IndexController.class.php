<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
    public function index(){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

        $this->assign('category',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('page',D('Document')->page);//分页

                 
        $this->display();
    }

    // 主题
    public function topic(){
        $type = I('type', 'default');
        $lastID = I('lastid', 0);
        $topics = array();

        switch($type){
            case 'default':
                break;
        }

        for($i=0; $i<10; $i++){
            $topic = array(
                'id'       => $lastID + $i+1,
                'thumb'    => 'http://120.27.42.165/Public/V1/image/img-2.jpg',
                'author'   => '赢家委员会',
                'atitle'   => '高级分析师',
                'time'     => time()-$i*4211,
                'title'    =>'体育强国',
                'subtitle' =>'288%',
                'action'   =>'发布主题组织',
                'abstract' => '市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针',
                'tags'     => array('环保','新能源'),
                'praise'   => 890+$i*11,
                'disagree' => 301+$i*11,
                'comment'  => 202+$i*11,
                'share'    => 98+$i*11
            );

            $topics[] = $topic;
        }
        $this->ajaxSucc(array('topics'=>$topics, 'lastid'=>$lastID+10));
    }

    // 评论
    public function comment(){
        $topicID = I('tid', -1);
        if($topicID <=0 ){
            $this->ajaxErr(1, "tid error");
        }

        $comments = array();
        for($i=0; $i<10; $i++){
            $comment = array(
                'id'       => $topicID*1000 + $i+1,
                'thumb'    => 'http://120.27.42.165/Public/V1/image/img-2.jpg',
                'author'   => '赢家委员会',
                'atitle'   => '高级分析师',
                'time'     => time()-$i*4211,
                'title'    =>'体育强国',
                'subtitle' =>'288%',
                'action'   =>'发布主题组织',
                'abstract' => '市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针，市场响应习大大指导方针',
                'praise'   => 890+$i*11,
                'disagree' => 301+$i*11,
                'comment'  => 202+$i*11,
                'share'    => 98+$i*11
            );

            $comments[] = $comment;
        }
        $this->ajaxSucc(array('comments'=>$comments));
    }

    // 评分
    public function rate(){
        $type = I('type', 'default');
        $id   = I('id', -1);
        $val  = I('val', 'good');

        if($id <= 0){
            $this->ajaxErr(10031, 'id error');
        }
        switch($type){
            case 'comment':
                $this->ajaxSucc();
                break;
            case 'topic':
                $this->ajaxSucc();
                break;
            default:
                $this->ajaxErr(10032, 'type error');
        }
    }

    // 提交评论
    public function addcomment(){
        $type = I('type', 'default');
        $id   = I('id', -1);
        $val  = I('val', 'default');

        if($id <= 0){
            $this->ajaxErr(10041, 'id error');
        }
        switch($type){
            case 'comment':
                $this->ajaxSucc();
                break;
            case 'topic':
                $this->ajaxSucc();
                break;
            default:
                $this->ajaxErr(10042, 'type error');
        }
    }

    // 榜单
    public function ranklist(){
        $type = I('type', 'default');

        $itms = array();

        switch($type){
            case 'default':
                break;
            case 'all':
                break;
            case 'week':
                break;
            case 'day':
                break;
        }

        for($i=0; $i<10; $i++){
            $itm = array(
                'order'    => $i+1,
                'username' => '夏火烧云',
                'allrate'  => '24.53%',
                'dayrate'  => '4.53%',
                'sspace'   => '24.31%',  // ship space
                'msspace'  => '兰石重装', // main ship space
                'mtopic'   => '政府项目', // main topic
                'mtopicid' => 11         // main topic id
            );

            $itms[] = $itm;
        }
        $this->ajaxSucc(array('list'=>$itms));
    }



}