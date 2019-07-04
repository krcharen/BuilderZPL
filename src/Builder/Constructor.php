<?php
/**
 * Created by PhpStorm.
 * User: FS
 * Date: 2019/7/2
 * Time: 17:33
 */

namespace MonkeyZPL\Builder;


interface Constructor extends CommandsText, CommandsBarcode, CommandsEncoding, CommandsFiled, CommandsGraphics, CommandsLabel, CommandsMedia, CommandsPrinting, CommandsOthers
{
    /**
     * @return mixed
     */
    public function setStart();

    /**
     * @return mixed
     */
    public function setEnd();
}