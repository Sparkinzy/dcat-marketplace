<?php

namespace Sparkinzy\DcatExtensionClient\Displayers;

use Dcat\Admin\Grid\Displayers\Actions;

class TextActions extends Actions
{
    /**
     * @return string
     */
    protected function getViewLabel()
    {
        $label = trans('admin.show').'<i class="feather icon-eye grid-action-icon"></i>';

        return '<span class="text-success">'.$label.'</span> &nbsp;';
    }

    /**
     * @return string
     */
    protected function getEditLabel()
    {
        $label = trans('admin.edit').'<i class="feather icon-edit-1 grid-action-icon"></i>';

        return '<span class="text-primary">'.$label.'</span> &nbsp;';
    }

    /**
     * @return string
     */
    protected function getQuickEditLabel()
    {
        $label = trans('admin.edit').'<i class="feather icon-edit grid-action-icon"></i>';
        $label2 = trans('admin.quick_edit');

        return '<span class="text-blue-darker" title="'.$label2.'">'.$label.'</span> &nbsp;';
    }

    /**
     * @return string
     */
    protected function getDeleteLabel()
    {
        $label = trans('admin.delete').'<i class="feather icon-trash grid-action-icon"></i>';

        return '<span class="text-danger">'.$label.'</span> &nbsp;';
    }
}
