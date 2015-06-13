<?php

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 个人中心控制器
 */
class CenterController extends HomeController {

	// 首页
    public function index(){
        $this->login();
        // 我发布的主题
        $topics = M('Topic')->where('author_id = '.session('user_auth.uid').' AND status != '.C('ITEM_STATUS.DELETED'))
            ->order('create_time desc')->limit(10)->select();
        $this->assign('topics', $topics);
        $this->display();
    }

    // 购物车
    public function cart($subact='', $ids=''){
        switch($subact){
            // 移至收藏夹
            case 'movetocollect':
                if(!is_login()){
                    $this->ajaxErr(-1, '请登录后再操作！');
                }
                $Mod = M('Collect');
                $idarr = explode(',',$ids);
                $cnt   = 0;
                $Mod->startTrans();
                foreach($idarr as $id){
                    if(!is_numeric($id) || $id <= 0){
                        $Mod->rollback();
                        $this->ajaxErr(-999, 'id error');
                    }

                    // 从购物车删除
                    M('Cart')->where('user_id = '.session('user_auth.uid').' AND topic_id='.$id)->delete();

                    // 加入收藏
                    $topic = M('Topic')->where('id='.$id.' AND status<>'.C('ITEM_STATUS.DELETED'))->find();
                    if(!$topic){
                        //$this->ajaxErr(-20, '主题不存在或主题已删除！');
                        continue;
                    }
                    $dat['topic_id']    = $id;
                    $dat['author_id']   = $topic['author_id'];
                    $dat['author_nick'] = get_nickname($topic['author_id']);
                    $dat['title']       = $topic['title'];
                    $dat['thumb']       = $topic['thumb'];
                    $dat['gold_price']  = $topic['gold_price'];
                    $dat['user_id']     = session('user_auth.uid');
                    $dat['add_time']    = time();
                    if( intval(M('Collect')->where('user_id = '.session('user_auth.uid').' AND topic_id='.$id)->count()) > 0){
                        // 已经收藏过
                        continue;
                    }
                    if(M('Collect')->add($dat)){
                        $cnt++;
                    }

                }

                $Mod->commit();
                if($cnt > 0){
                    // update session
                    session('cart_cnt', M('Cart')->where('user_id = '.session('user_auth.uid'))->count());
                    session('collect_cnt', $Mod->where('user_id = '.session('user_auth.uid'))->count());
                }
                $this->ajaxSucc(array("cart_cnt"=>session('cart_cnt'), "collect_cnt"=>session('collect_cnt')));
                break;
            // 移出购物车
            case 'remove':
                if(!is_login()){
                    $this->ajaxErr(-1, '请登录后再操作！');
                }
                $Mod = M('Cart');
                $idarr = explode(',',$ids);
                $cnt   = 0;
                $Mod->startTrans();
                foreach($idarr as $id){
                    if(!is_numeric($id) || $id <= 0){
                        $Mod->rollback();
                        $this->ajaxErr(-999, 'id error');
                    }

                    if($Mod->where('user_id = '.session('user_auth.uid').' AND topic_id='.$id)->delete()){
                        $cnt++;
                    }
                }

                $Mod->commit();
                if($cnt > 0){
                    // update session
                    session('cart_cnt', $Mod->where('user_id = '.session('user_auth.uid'))->count());
                }
                $this->ajaxSucc(array("count"=>session('cart_cnt')));
                break;
        }
        $this->login();
        // 我的购物车
        $map['user_id'] = array('eq', session('user_auth.uid'));
        //$map['status'] = array('neq', C('ITEM_STATUS.DELETED'));
        $this->assign('carts', M('Cart')->where($map)->order('add_time desc')->limit(1000)->select() );

        $this->display();
    }

    // 订单
    public function bill(){
        $this->display();
    }

    // 收藏
    public function collect($subact='', $ids=''){
        switch($subact){
            // 移至购物车
            case 'movetocart':
                if(!is_login()){
                    $this->ajaxErr(-1, '请登录后再操作！');
                }
                $Mod = M('Cart');
                $idarr = explode(',',$ids);
                $cnt   = 0;
                $Mod->startTrans();
                foreach($idarr as $id){
                    if(!is_numeric($id) || $id <= 0){
                        $Mod->rollback();
                        $this->ajaxErr(-999, 'id error');
                    }
                    // 从收藏删除
                    M('Collect')->where('user_id = '.session('user_auth.uid').' AND topic_id='.$id)->delete();

                    $topic = M('Topic')->where('id='.$id.' AND status<>'.C('ITEM_STATUS.DELETED'))->find();
                    if(!$topic){
                        //$this->ajaxErr(-20, '主题不存在或主题已删除！');
                        continue;
                    }
                    $dat['topic_id']    = $id;
                    $dat['author_id']   = $topic['author_id'];
                    $dat['author_nick'] = get_nickname($topic['author_id']);
                    $dat['title']       = $topic['title'];
                    $dat['thumb']       = $topic['thumb'];
                    $dat['gold_price']  = $topic['gold_price'];
                    $dat['user_id']     = session('user_auth.uid');
                    $dat['add_time']    = time();
                    if( intval($Mod->where('user_id = '.session('user_auth.uid').' AND topic_id='.$id)->count()) > 0){
                        //$this->ajaxErr(-10, '已经在购物车内');
                        continue;
                    }
                    if($Mod->add($dat)){
                        $cnt++;
                    }
                }

                $Mod->commit();
                if($cnt > 0){
                    // update session
                    session('cart_cnt', $Mod->where('user_id = '.session('user_auth.uid'))->count());
                    session('collect_cnt', M('Collect')->where('user_id = '.session('user_auth.uid'))->count());
                }
                $this->ajaxSucc(array("cart_cnt"=>session('cart_cnt'), "collect_cnt"=>session('collect_cnt')));
                break;
        }
        $this->login();
        // 我的收藏
        $map['user_id'] = array('eq', session('user_auth.uid'));
        $collects = $this->lists('Collect', $map);
        $this->assign('collects', $collects );

        $this->display();
    }

    // 投资
    public function invest(){
        $this->display();
    }

    // 发布
    public function theme(){
        $this->login();
        // 我发布的主题
        $map['author_id'] = array('eq', session('user_auth.uid'));
        $map['status']    = array('neq', C('ITEM_STATUS.DELETED'));
        $topics = $this->lists('Topic', $map);
        $this->assign('topics', $topics);

        $this->display();
    }

    // 设置
    public function setting(){
        $this->login();
        $this->display();
    }

    // 消息
    public function message(){
        $this->login();
        $this->display();
    }
}