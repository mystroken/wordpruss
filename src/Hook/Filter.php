<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel K
 * Date: 05/06/2017
 * Time: 06:58
 */

namespace wordpruss\Hook;


class Filter extends Hook
{
    public function apply()
    {
        apply_filters();
    }
}