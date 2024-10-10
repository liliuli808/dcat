<?php

namespace App\Admin\Controllers\Ad;

use App\Ad;
use App\TableFix;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class TableController  extends AdminController
{

        protected function grid(): Grid
        {
            return Grid::make(new TableFix(), function (Grid $grid) {
                $grid->column('id', 'ID')->sortable();
                $grid->column('index', '期数');
                $grid->column('fix_index', '第一列内容');
                $grid->column('fix_first', '第二列内容');
                $grid->column('fix_last', '第三列内容');
                $grid->column('type', '类型')->display(function ($type) {
                    if ($type == 1) {
                        return "香港五肖中特";
                    }else if ($type == 2) {
                        return "香港单双中特";
                    } else {
                        return  "香港一肖一码";
                    }
                });
                $grid->column('created_at','创建时间');
                $grid->column('updated_at', '更新时间');
            });
        }

    protected function form()
    {
        return Form::make(new TableFix(), function (Form $form) {
            $form->display('id',"Id");
            $form->text('index', "期数")->required();
            $form->text('fix_index', '第一列内容')->required();
            $form->text('fix_first', '第二列内容')->required();
            $form->text('fix_last', '第三列内容')->required();
            $form->select('type', '类型')->options([
                1 => '香港五肖中特',
                2 => '香港单双中特',
                3 =>  '香港一肖一码'
            ])->required();
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
