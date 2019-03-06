<?php

/**
 * @Author: feng zhang
 * @Date:   2019-03-06 11:52:05
 * @Last Modified by:   feng zhang
 * @Last Modified time: 2019-03-06 11:57:16
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
