<?php
declare (strict_types = 1);

namespace app\admin\model;

use think\db\exception\DataNotFoundException;
use think\db\exception\DbException;
use think\db\exception\ModelNotFoundException;
use think\Model;

/**
 * @mixin \think\Model
 */
class adminModel extends Model
{
    protected $name = 'admin';

    /**
     * @throws ModelNotFoundException
     * @throws DbException
     * @throws DataNotFoundException
     */
    public function getByNo($no)
    {
        return $this->where('no',$no)->find();
    }
}
