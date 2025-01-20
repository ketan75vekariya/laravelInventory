<?php

namespace App\Admin\Controllers;

use App\Models\Manufacture;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ManufactureController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Manufacture';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Manufacture());

        $grid->column('id', __('Id'));
        $grid->column('batchnumber', __('Batchnumber'));
        $grid->column('manufactureDate', __('ManufactureDate'));
        $grid->column('expirydate', __('Expirydate'));
        $grid->column('status', __('Status'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('item_id', __('Item id'));

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
        $show = new Show(Manufacture::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('batchnumber', __('Batchnumber'));
        $show->field('manufactureDate', __('ManufactureDate'));
        $show->field('expirydate', __('Expirydate'));
        $show->field('status', __('Status'));
        $show->field('quantity', __('Quantity'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('item_id', __('Item id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Manufacture());

        $form->text('batchnumber', __('Batchnumber'));
        $form->date('manufactureDate', __('ManufactureDate'))->default(date('Y-m-d'));
        $form->date('expirydate', __('Expirydate'))->default(date('Y-m-d'));
        $form->text('status', __('Status'));
        $form->decimal('quantity', __('Quantity'));
        $form->number('item_id', __('Item id'));

        return $form;
    }
}
