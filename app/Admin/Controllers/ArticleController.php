<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;  
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        // fillering 추가 [article페이지 가면 filler버튼이 생김!]
        $grid->filter(function ($filter){
            $filter->contains('title');
        });

        // softable하게 수정
        $grid->column('id', __('Id'))->sortable();
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        $grid->column('user_id', __('User id'))->sortable();
        $grid->column('title', __('Title'));
        $grid->column('body', __('Body'));
        $grid->column('img_1', __('Img 1'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('user_id', __('User id'));
        $show->field('title', __('Title'));
        $show->field('body', __('Body'));
        $show->field('img_1', __('Img 1'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article());

        // $form->num('user_id', __('User id'));
        $form->belongsTo('user_id', Users::class, __('User id'));
        $form->number('user_id', __('User id'));
        $form->text('title', __('Title'));
        $form->textarea('body', __('Body'));
        $form->text('img_1', __('Img 1'));

        return $form;
    }
}
