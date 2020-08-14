<?php


namespace app\api\controller\v1;


use app\api\controller\BaseController;
use think\Db;
use think\facade\Request;
use app\lib\exception\SuccessMessage;
use app\lib\exception\SuccessMessageWithData;
use app\lib\exception\AuthException;

class Pos extends BaseController
{
    /**
     * 扫描二维码登录
     */
    public function login()
    {

    }

    /**
     * 展示当天扣款笔数和金额
     */
    public function getTotalRecords()
    {

    }

    /**
     * 展示人员信息
     */
    public function getStaffInfo()
    {

    }

    /**
     * 展示账户信息
     */
    public function getAccounts()
    {

    }

    /**
     * 扣费
     */
    public function consume()
    {

    }

    /**
     *退款
     */
    public function refund()
    {

    }

    /**
     * 绑卡
     */
    public function bindingCard()
    {

    }

    /**
     * 输入手机号码和出生日期获取卡信息
     */
    public function getCardInfo()
    {

    }

    /**
     * 挂失
     */
    public function loss()
    {

    }

    /**
     * 注销
     */
    public function cancel()
    {

    }

    /**
     * 恢复
     */
    public function recover()
    {

    }
}
