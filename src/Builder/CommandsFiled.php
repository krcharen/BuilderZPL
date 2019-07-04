<?php
/**
 * Created by PhpStorm.
 * User: Charen
 * Date: 2019/7/2
 * Time: 17:31
 */

namespace MonkeyZPL\Builder;


interface CommandsFiled
{
    /**
     * The ^FT command sets the field position, relative to the home position of the label designated by the^LH command.
     * The typesetting origin of the field is fixed with respect to the contents of the field and does not change with rotation.
     * Format: ^FTx,y,z
     * @return mixed
     */
    public function addFT();

    /**
     * The ^FT command sets the field position, relative to the home position of the label designated by the ^LH command.
     * The typesetting origin of the field is fixed with respect to the contents of the field and does not change with rotation.
     * The ^FT command is capable of concantination of fields.
     * Usage:^FTx,y,z
     * @return mixed
     */
    public function addFS();

    /**
     * The ^FO command sets a field origin, relative to the label home (^LH) position.
     * ^FO sets the upperleft corner of the field area by defining points along the x-axis and y-axis independent of the rotation.
     * Format: ^FOx,y,z
     * @return mixed
     */
    public function addFO();

    /**
     * The ^A command specifies the font to use in a text field.
     * ^A designates the font for the current ^FD statement or field.
     * The font specified by ^A is used only once for that ^FD entry.
     * If a value for ^A is not specified again, the default ^CF font is used for the next ^FD entry.
     * Parameter Details:
     * f = font name Values: A through Z, and 0 to 9 Any font in the printer (downloaded, EPROM, stored fonts, fonts A through Z and 0 to 9).
     * o = field orientation Values:N = normal R = rotated 90 degrees (clockwise) I = inverted 180 degrees B = read from bottom up, 270 degrees Default: the last accepted ^FW value or the ^FW default
     * h = Character Height (in dots) Scalable Values: 10 to 32000 Default: last accepted ^CF Bitmapped Values: multiples of height from 1 to 10 times the standard height, in increments of 1 Default: last accepted ^CF
     * w = width (in dots) Scalable Values: 10 to 32000 Default: last accepted ^CF Bitmapped Values: multiples of width from 1 to 10 times the standard width, in increments of 1 Default: last accepted ^CF
     * @return mixed
     */
    public function addA();

    /**
     *The ^FD command defines the data string for a field. The field data can be any printable character except those used as command prefixes (^ and ~).
     * In RFID printers, it can also be used to specify passwords to write to tags.
     * Format: ^FDa
     * @return mixed
     */
    public function addFD();

}