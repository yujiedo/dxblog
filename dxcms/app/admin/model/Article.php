<?php


namespace app\admin\model;

use traits\model\SoftDelete;
use think\Model;

class Article extends Model
{
    //开启软删除
    use SoftDelete;
    protected $deleteTime = 'delete_time';

    protected $resultSetType = 'collection';
    protected $autoWriteTimestamp = true;


    public function getPidAttr($value)
    {
        $value = db('category')->where('id',$value)->value('title');
        return $value;
    }


}