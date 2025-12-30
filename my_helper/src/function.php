<?php
if (!function_exists('my_helper_function')) {
    /**
     * 示例全局函数
     *
     * @param string $name
     * @return string
     */
    function my_helper_function(string $name): string
    {
        return "Hello, {$name}!";
    }
}