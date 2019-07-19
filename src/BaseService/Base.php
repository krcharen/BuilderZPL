<?php
/**
 * Created by PhpStorm.
 * User: Charen
 * Date: 2019/7/2
 * Time: 15:53
 */

namespace MonkeyZPL\BaseService;

class Base
{
    /**
     * @var array
     */
    public $zpl;

    /**
     * @param array $inject
     * @return string
     * @throws MonkeyException
     */
    public function ZPL(array $inject = [])
    {
        if (count($inject) == 0) throw new MonkeyException(MonkeyException::CONVERTED_CONTENT_EMPTY);

        return implode('', $inject);
    }
}