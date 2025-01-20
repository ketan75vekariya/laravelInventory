<?php

namespace App\Admin\Controllers;

use App\Models\PoslineOrder;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PoslineOrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PoslineOrder';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PoslineOrder());

        $grid->column('id', __('Id'));
        $grid->column('paymentMethod', __('PaymentMethod'));
        $grid->column('note', __('Note'));
        $grid->column('billDate', __('BillDate'));
        $grid->column('totlePrice', __('TotlePrice'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('user_id', __('User id'));
        $grid->column('customer_id', __('Customer id'));

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
        $show = new Show(PoslineOrder::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('paymentMethod', __('PaymentMethod'));
        $show->field('note', __('Note'));
        $show->field('billDate', __('BillDate'));
        $show->field('totlePrice', __('TotlePrice'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('user_id', __('User id'));
        $show->field('customer_id', __('Customer id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PoslineOrder());

        $form->text('paymentMethod', __('PaymentMethod'));
        $form->textarea('note', __('Note'));
        $form->date('billDate', __('BillDate'))->default(date('Y-m-d'));
        $form->decimal('totlePrice', __('TotlePrice'));
        $form->number('user_id', __('User id'));
        $form->number('customer_id', __('Customer id'));

        return $form;
    }
}
