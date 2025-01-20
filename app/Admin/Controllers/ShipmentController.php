<?php

namespace App\Admin\Controllers;

use App\Models\Shipment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ShipmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Shipment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Shipment());

        $grid->column('id', __('Id'));
        $grid->column('status', __('Status'));
        $grid->column('trackingNumber', __('TrackingNumber'));
        $grid->column('trackingUrl', __('TrackingUrl'));
        $grid->column('note', __('Note'));
        $grid->column('shippingDate', __('ShippingDate'));
        $grid->column('shippingCharge', __('ShippingCharge'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('carrier_id', __('Carrier id'));
        $grid->column('package_id', __('Package id'));

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
        $show = new Show(Shipment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('status', __('Status'));
        $show->field('trackingNumber', __('TrackingNumber'));
        $show->field('trackingUrl', __('TrackingUrl'));
        $show->field('note', __('Note'));
        $show->field('shippingDate', __('ShippingDate'));
        $show->field('shippingCharge', __('ShippingCharge'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('carrier_id', __('Carrier id'));
        $show->field('package_id', __('Package id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Shipment());

        $form->text('status', __('Status'));
        $form->text('trackingNumber', __('TrackingNumber'));
        $form->text('trackingUrl', __('TrackingUrl'));
        $form->textarea('note', __('Note'));
        $form->date('shippingDate', __('ShippingDate'))->default(date('Y-m-d'));
        $form->text('shippingCharge', __('ShippingCharge'));
        $form->number('carrier_id', __('Carrier id'));
        $form->number('package_id', __('Package id'));

        return $form;
    }
}
