<?php

namespace App\Admin\Controllers;

use App\Models\Invoice;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class InvoiceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Invoice';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Invoice());

        $grid->column('id', __('Id'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('price', __('Price'));
        $grid->column('note', __('Note'));
        $grid->column('online_order_id', __('Online order id'));
        $grid->column('posline_order_id', __('Posline order id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Invoice::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('quantity', __('Quantity'));
        $show->field('price', __('Price'));
        $show->field('note', __('Note'));
        $show->field('online_order_id', __('Online order id'));
        $show->field('posline_order_id', __('Posline order id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Invoice());

        $form->decimal('quantity', __('Quantity'));
        $form->decimal('price', __('Price'));
        $form->textarea('note', __('Note'));
        $form->number('online_order_id', __('Online order id'));
        $form->number('posline_order_id', __('Posline order id'));

        return $form;
    }
}
