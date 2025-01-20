<?php

namespace App\Admin\Controllers;

use App\Models\Item;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Item';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Item());

        $grid->column('id', __('Id'));
        $grid->column('sku', __('Sku'));
        $grid->column('upc', __('Upc'));
        $grid->column('ena', __('Ena'));
        $grid->column('isbn', __('Isbn'));
        $grid->column('mpn', __('Mpn'));
        $grid->column('hsn', __('Hsn'));
        $grid->column('weight', __('Weight'));
        $grid->column('selling_price', __('Selling price'));
        $grid->column('cost_price', __('Cost price'));
        $grid->column('description', __('Description'));
        $grid->column('opening_stock', __('Opening stock'));
        $grid->column('reorder_point', __('Reorder point'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('brand_id', __('Brand id'));
        $grid->column('category_id', __('Category id'));

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
        $show = new Show(Item::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('sku', __('Sku'));
        $show->field('upc', __('Upc'));
        $show->field('ena', __('Ena'));
        $show->field('isbn', __('Isbn'));
        $show->field('mpn', __('Mpn'));
        $show->field('hsn', __('Hsn'));
        $show->field('weight', __('Weight'));
        $show->field('selling_price', __('Selling price'));
        $show->field('cost_price', __('Cost price'));
        $show->field('description', __('Description'));
        $show->field('opening_stock', __('Opening stock'));
        $show->field('reorder_point', __('Reorder point'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('brand_id', __('Brand id'));
        $show->field('category_id', __('Category id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Item());

        $form->text('sku', __('Sku'));
        $form->text('upc', __('Upc'));
        $form->text('ena', __('Ena'));
        $form->text('isbn', __('Isbn'));
        $form->text('mpn', __('Mpn'));
        $form->text('hsn', __('Hsn'));
        $form->decimal('weight', __('Weight'));
        $form->decimal('selling_price', __('Selling price'));
        $form->decimal('cost_price', __('Cost price'));
        $form->textarea('description', __('Description'));
        $form->decimal('opening_stock', __('Opening stock'));
        $form->decimal('reorder_point', __('Reorder point'));
        $form->number('brand_id', __('Brand id'));
        $form->number('category_id', __('Category id'));

        return $form;
    }
}
