<?php
namespace Xgeq\MyHelper;

class Helper
{
    /**
     * 生成随机字符串
     *
     * @param int $length 长度
     * @return string
     */
    public static function randomString(int $length = 16): string
    {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $result = '';
        for ($i = 0; $i < $length; $i++) {
            $result .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $result;
    }

    /**
     * 数组深度合并
     *
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public static function arrayMergeDeep(array $array1, array $array2): array
    {
        $merged = $array1;

        foreach ($array2 as $key => &$value) {
            if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = self::arrayMergeDeep($merged[$key], $value);
            } else {
                $merged[$key] = $value;
            }
        }

        return $merged;
    }
}