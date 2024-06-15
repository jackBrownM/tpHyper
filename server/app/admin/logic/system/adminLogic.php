<?php

namespace app\admin\logic\system;
use app\admin\model\adminModel;
use think\db\exception\DataNotFoundException;
use think\db\exception\DbException;
use think\db\exception\ModelNotFoundException;

class adminLogic
{
    private adminModel $adminModel;

    public function __construct()
    {
        $this->adminModel = new adminModel();
    }

    /**
     * @throws ModelNotFoundException
     * @throws DataNotFoundException
     * @throws DbException
     */
    public function getByNo($no)
    {
        // 获取管理员信息
        $admin = $this->adminModel->getByNo($no);
        // 判空
        if (!$admin){
            return [];
        }
        return $admin->toArray();
    }
}