<?php

namespace App\Admin\Controllers\Ad;

use App\Ad;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;


class AdController  extends AdminController
{

    protected function grid(): Grid
    {
        return Grid::make(new Ad(), function (Grid $grid) {
            $grid->column('id', 'ID')->sortable();
            $grid->column('img_url', '图片')->image();
            $grid->column('jump_url', '跳转地址')->link();
            $grid->column('type', '类型')->display(function ($type) {
                if ($type == 1) {
                    return "轮播图";
                }else {
                    return "广告位";
                }
            });
            $grid->column('created_at','创建时间');
            $grid->column('updated_at', '更新时间');
        });
    }

    protected function form()
    {
        return Form::make(new Ad(), function (Form $form) {
            $form->display('id',"Id");
            $form->text('img_url', "图片")->required();
            $form->text('jump_url', '跳转地址')->required();
            $form->select('type', '类型')->options([
               1 => '轮播图',
               2 => '广告位'
            ])->required();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
