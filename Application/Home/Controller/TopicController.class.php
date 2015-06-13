<?php

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 主题控制器
 */
class TopicController extends HomeController {
    // 主题列表
    public function listAction(){
        $map['status'] = array('neq', C('ITEM_STATUS.DELETED'));
        $order         = 'create_time asc';
        $topics = $this->lists('Topic', $map, $order);
        $this->assign('topics', $topics );
        $this->display('list');
    }

	// 主题首页
    public function index($id){
        if(is_numeric($id)){
            $mod = M('Topic');
            $topic = $mod->where('id='.$id.' AND status<>'.C('ITEM_STATUS.DELETED'))->find();
            if($topic){
                if($topic['pictures']){
                    $topic['pictures'] = explode('|', $topic['pictures']);
                }
                if($topic['parameter']){
                    $topic['parameter'] = explode("\n", $topic['parameter']);
                }
                if($topic['stocks']){
                    $topic['stocks'] = explode('|', $topic['stocks']);
                }
                // 作者信息
                $topic['author_nick'] = get_nickname($topic['author_id']);

                $this->assign('topic', $topic);
                $this->display('detail');
            }else{
                $this->error('主题不存在或主题已删除！', U('/'));
            }
        }
    }

    // 新增主题
    public function create(){
        $this->login();
        $this->display();
    }

    // 保存
    public function dosave(){
        if(!is_login()){
            $this->ajaxErr(-1, '请登录后再操作！');
        }
        $id      = I('id', -1, '/^\d+$/');
        $title   = I('title');
        $thumb   = I('thumb');
        $desc    = I('desc');
        $para    = I('para');
        $pics    = I('pics');
        $remark  = I('remark');
        $stocks  = I('stocks');

        if($para){
            $order   = array("\r\n", "\n", "\r");
            $replace = '\n';
            $para = trim(str_replace($order, $replace, $para));
        }
        $dat = array(
            'title'      => $title,
            'thumb'      => $thumb,
            'description'=> $desc,
            'parameter'  => $para,
            'pictures'   => $pics,
            'remark'     => $remark,
            'stocks'     => $stocks,
            'author_id'  => session('user_auth.uid'),
            //'author_nick'=> get_nickname(session('user_auth.uid')),
            'gold_price' => 8,
            'update_time'=> time()
        );

        $mod = M('Topic');
        if($id > 0){
            // 保存主题
            $dat['id'] = $id;
            if($mod->create($dat) && $mod->save()){
                $this->ajaxSucc('保存主题成功！');
            } else {
                $this->ajaxErr(-98, '保存主题失败！');
            }
        }else{
            // 新建主题
            $dat['create_time'] = time();
            if($mod->create($dat) && ($nid = $mod->add())){
                $this->ajaxSucc(array('id'=>$nid));
            } else {
                $this->ajaxErr(-99, '创建主题失败！');
            }
        }
    }

    // 删除
    public function doremove(){
        if(!is_login()){
            $this->ajaxErr(-1, '请登录后再操作！');
        }
        $id = I('tid', -1, '/^\d+$/');
        if($id < 0){
            $this->ajaxErr(-98, '参数错误！');
        }

        $dat = array(
            'status'      => C('ITEM_STATUS.DELETED'),
            'update_time' => time()
        );


        $mod = M('Topic');
        if($id > 0){
            if($mod->where("id={$id} AND author_id=".session('user_auth.uid'))->data($dat)->save()){
                $this->ajaxSucc('删除主题成功！');
            }
        }
        $this->ajaxErr(-99, '删除主题失败！');
    }

    /**
     * 上传图片
     */
    public function uploadpic(){
        if(!is_login()){
            $this->ajaxErr(-1, '请登录后再操作！');
        }

        $judgeTime   = I('post.timestamp', -1);
        $verifyToken = md5('#$afWE24_=' . $judgeTime);
        $deltaTime   = time() - $judgeTime;

        if (empty($_FILES)) {
            $this->ajaxErr(-1, '上传文件失败，请检查文件类型和文件大小！', JSON);
        }
        if($_POST['token'] != $verifyToken ||
            $deltaTime < -600 ||
            $deltaTime > 3600
        ){
            $this->ajaxErr(-2, '安全性校验失败，请刷新页面重试！', JSON);
        }
        /* 调用文件上传组件上传文件 */
        $Picture = D('Picture');
        $pic_driver = C('PICTURE_UPLOAD_DRIVER');
        $info = $Picture->upload(
            $_FILES,
            C('PICTURE_UPLOAD'),
            C('PICTURE_UPLOAD_DRIVER'),
            C("UPLOAD_{$pic_driver}_CONFIG")
        ); //TODO:上传到远程服务器

        /* 记录图片信息 */
        if($info){
            $this->ajaxSucc(array('files'=>$info), JSON);
        } else {
            $this->ajaxErr(-1, $Picture->getError(), JSON);
        }
    }

    // 评论
    public function comment(){
        $topicID = I('tid', -1, '/^\d+$/');
        $type    = I('type', 0);
        $page    = I('p', 1);
        $pageCnt = I('cnt', 10);
        if($topicID <=0 ){
            $this->ajaxErr(1, "tid error");
        }

        $test = array(
            '1'=>array('star'=>4, 'content'=>'非常好！！！'),
            '2'=>array('star'=>3, 'content'=>'一般一般啦！'),
            '3'=>array('star'=>1, 'content'=>'这是啥子嘛，感觉很差呢。')
        );
        $comments = array();
        for($i=0; $i<$pageCnt; $i++){
            $t = $type>0 ? $type : rand(1,3);
            $comment = array(
                'id'      => $topicID*1000 + $i+1,
                'head'    => '/Public/V1/image/photo_default.png',
                'nick'    => '张三',
                'star'    => $test[$t]['star'],
                'type'    => $t,
                'content' => $test[$t]['content'],
                'time'    => time()-$i*3600
            );

            $comments[] = $comment;
        }
        $this->ajaxSucc(array(
            'type0cnt' => 123,
            'type1cnt' => 20,
            'type2cnt' => 42,
            'type3cnt' => 61,
            'clist'=>$comments)
        );
    }

    // 评分
    public function rate(){
        $id   = I('tid', -1, '/^\d+$/');
        $val  = I('val', 'good');

        if($id <= 0){
            $this->ajaxErr(10031, 'id error');
        }

        $this->ajaxSucc();
    }

    // 关注
    public function collect(){
        if(!is_login()){
            $this->ajaxErr(-1, '请登录后再操作！');
        }
        $id   = I('tid', -1, '/^\d+$/');

        if($id <= 0){
            $this->ajaxErr(10031, 'id error');
        }
        $topic = M('Topic')->where('id='.$id.' AND status<>'.C('ITEM_STATUS.DELETED'))->find();
        if(!$topic){
            $this->ajaxErr(-20, '主题不存在或主题已删除！');
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
            $this->ajaxErr(-10, '已经收藏过');
        }
        if(M('Collect')->add($dat)){
            session('collect_cnt', M('Collect')->where('user_id = '.session('user_auth.uid'))->count());
            $this->ajaxSucc(array("count"=>session('collect_cnt')));
        }
        $this->ajaxErr(-1, '收藏主题失败');
    }

    // 取消关注
    public function delcollect(){
        if(!is_login()){
            $this->ajaxErr(-1, '请登录后再操作！');
        }
        $id   = I('tid', -1, '/^\d+$/');

        if($id <= 0){
            $this->ajaxErr(10031, 'id error');
        }

        if(M('Collect')->where('user_id = '.session('user_auth.uid').' AND topic_id='.$id)->delete()){
            session('collect_cnt', M('Collect')->where('user_id = '.session('user_auth.uid'))->count());
            $this->ajaxSucc(array("count"=>session('collect_cnt')));
        }

        $this->ajaxErr(-1, '取消关注失败');
    }

    // 加入购物车
    public function addcart(){
        if(!is_login()){
            $this->ajaxErr(-1, '请登录后再操作！');
        }
        $id   = I('tid', -1, '/^\d+$/');

        if($id <= 0){
            $this->ajaxErr(10031, 'id error');
        }
        $topic = M('Topic')->where('id='.$id.' AND status<>'.C('ITEM_STATUS.DELETED'))->find();
        if(!$topic){
            $this->ajaxErr(-20, '主题不存在或主题已删除！');
        }
        $dat['topic_id']    = $id;
        $dat['author_id']   = $topic['author_id'];
        $dat['author_nick'] = get_nickname($topic['author_id']);
        $dat['title']       = $topic['title'];
        $dat['thumb']       = $topic['thumb'];
        $dat['gold_price']  = $topic['gold_price'];
        $dat['user_id']     = session('user_auth.uid');
        $dat['add_time']    = time();
        if( intval(M('Cart')->where('user_id = '.session('user_auth.uid').' AND topic_id='.$id)->count()) > 0){
            $this->ajaxErr(-10, '已经在购物车内');
        }
        if(M('Cart')->add($dat)){
            session('cart_cnt', M('Cart')->where('user_id = '.session('user_auth.uid'))->count());
            $this->ajaxSucc(array("count"=>session('cart_cnt')));
        }
        $this->ajaxErr(-1, '加入购物车失败');
    }

    // 移出购物车
    public function delcart(){
        if(!is_login()){
            $this->ajaxErr(-1, '请登录后再操作！');
        }
        $id   = I('tid', -1, '/^\d+$/');

        if($id <= 0){
            $this->ajaxErr(10031, 'id error');
        }

        if(M('Cart')->where('user_id = '.session('user_auth.uid').' AND topic_id='.$id)->delete()){
            session('cart_cnt', M('Cart')->where('user_id = '.session('user_auth.uid'))->count());
            $this->ajaxSucc(array("count"=>session('cart_cnt')));
        }

        $this->ajaxErr(-1, '移出购物车失败');
    }
}