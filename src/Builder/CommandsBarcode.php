<?php
/**
 * Created by PhpStorm.
 * User: Charen
 * Date: 2019/7/2
 * Time: 17:32
 */

namespace MonkeyZPL\Builder;


interface CommandsBarcode
{

    /**
     * The ^BY command is used to change the default values for the module width (in dots), the wide bar to narrow bar width ratio and the bar code height (in dots).
     * It can be used as often as necessary within a label format.
     * Format: ^BYw,r,h
     * @return mixed
     */
    public function addBY();

    /**
     *The ^BC command creates the Code 128 bar code, a high-density, variable length, continuous,alphanumeric symbology.
     * It was designed for complexly encoded product identification.
     * Code 128 has three subsets of characters. There are 106 encoded printing characters in each set,and each character can have up to three different meanings, depending on the character subset being used.
     * Each Code 128 character consists of six elements: three bars and three spaces.
     * • ^BC supports a fixed print ratio.
     * • Field data (^FD) is limited to the width (or length, if rotated) of the label
     * o = orientation Values:N = normal R = rotated 90 degrees (clockwise) I = inverted 180 degrees B = read from bottom up, 270 degrees Default: current ^FW value
     * h = bar code height (in dots) Values: 1 to 32000 Default: value set by ^BY
     * f = print interpretation line Values: Y (yes) or N (no) Default: Y The interpretation line can be printed in any font by placing the font command before the bar code command.
     * g = print interpretation line above code Values: Y (yes) or N (no) Default: N
     * e = UCC check digit Values: Y (turns on) or N (turns off) Mod 103 check digit is always there. It cannot be turned on or off. Mod 10 and 103 appear together with e turned on. Default: N
     * m = mode Values: N = no selected mode U = UCC Case Mode
     * • More than 19 digits in ^FD or ^SN are eliminated.
     * • Fewer than 19 digits in ^FD or ^SN add zeros to the right to bring the count to 19. This produces an invalid interpretation line. A = Automatic Mode
     * • This analyzes the data sent and automatically determines the best packing method. The full ASCII character set can be used in the ^FD statement — the printer determines when to shift subsets. A string of four or more numeric digits causes an automatic shift to Subset C. D = UCC/EAN Mode (x.11.x and newer firmware)
     * • This allows dealing with UCC/EAN with and without chained application identifiers. The code starts in the appropriate subset followed by FNC1 to indicate a UCC/EAN 128 bar code.
     * • The printer automatically strips out parentheses and spaces for encoding, but prints them in the human-readable section. The printer automatically determines if a check digit is required, calculate it, and print it. Automatically sizes the human readable.
     * • Default: N
     * @return mixed
     */
    public function addBC();
}