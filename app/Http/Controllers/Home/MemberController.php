<?php

namespace App\Http\Controllers\Home;

class MemberController extends \App\Http\Controllers\Controller
{
    public function __construct()
    {
        //
    }

    public function index(){
        $data = [
            'title' => '会员中心',
            'content' => '这是内容',
        ];

        return view('home.member.index', $data);
    }

    /**
     * 余额页面
     */
    public function credit(){

    }

    /**
     * 积分页面
     */
    public function points(){

    }

    /**
     * 优惠券页面
     */
    public function coupon(){

    }
}
