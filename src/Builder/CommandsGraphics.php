<?php
/**
 * Created by PhpStorm.
 * User: Charen
 * Date: 2019/7/2
 * Time: 17:30
 */

namespace MonkeyZPL\Builder;


interface CommandsGraphics
{
    /**
     * The ~DG command downloads an ASCII Hex representation of a graphic image.
     * If .GRF is not the specified file extension, .GRF is automatically appended.
     * @return mixed
     */
    public function addDG();

    /**
     * The ^XG command is used to recall one or more graphic images for printing.
     * This command is used in a label format to merge graphics, such as company logos and piece parts, with text data to form a complete label.
     * An image can be recalled and resized as many times as needed in each format. Other images and data might be added to the format.
     * Usage:^XGd:o.x,mx,my
     * @return mixed
     */
    public function addXG();

    /**
     * The ^GB command is used to draw boxes and lines as part of a label format.
     * Boxes and lines are used to highlight important information, divide labels into distinct areas, or to improve the appearance of a label.
     * The same format command is used for drawing either boxes or lines.
     * Format: ^GBw,h,t,c,r
     * @return mixed
     */
    public function addGB();
}