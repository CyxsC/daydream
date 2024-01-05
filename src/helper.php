<?php 

namespace daydream\helper;


if (!function_exists('tap')) {
    /**
     * 对一个值调用给定的闭包，然后返回该值
     *
     * @param mixed         $value
     * @param callable|null $callback
     * @return mixed
     */
    function tap($value, $callback = null)
    {
        if (is_null($callback)) {
            return $value;
        }

        $callback($value);

        return $value;
    }
}

if(!function_exists('add_arr')){

}

if(!function_exists('arr_get')){
    
}

if(!function_exists('arr_set')){
    
}