<?php
/**
 * Created by PhpStorm.
 * User: Charen
 * Date: 2019/7/2
 * Time: 15:13
 */

namespace MonkeyZPL;

use MonkeyZPL\BaseService\Base;

class Commands extends Base
{

    /**
     * The ^XA command is used at the beginning of ZPL II code.
     * It is the opening bracket and indicates the start of a new label format.
     * @var string
     */
    protected $start = '^XA';

    /**
     * The ^XZ command is the ending (closing) bracket.
     * It indicates the end of a label format.
     * @var string
     */
    protected $end = '^XZ';

    /**
     * The ^FO command sets a field origin, relative to the label home (^LH) position.
     * @var string
     */
    protected $startField = '^FO';

    /**
     * The ^FS command denotes the end of the field definition.
     * @var string
     */
    protected $endField = '^FS';


    public function start()
    {

    }

    /**
     * The ^CI command enables you to call up the international character set you want to use for printing.
     * You can mix character sets on a label.
     * a    Desired character set    - 0 = Single Byte Encoding - U.S.A. 1 Character Set
     * - 1 = Single Byte Encoding - U.S.A. 2 Character Set
     * - 2 = Single Byte Encoding - U.K. Character Set
     * - 3 = Single Byte Encoding - Holland Character Set
     * - 4 = Single Byte Encoding - Denmark/Norway Character Set
     * - 5 = Single Byte Encoding - Sweden/Finland Character Set
     * - 6 = Single Byte Encoding - Germany Character Set
     * - 7 = Single Byte Encoding - France 1 Character Set
     * - 8 = Single Byte Encoding - France 2 Character Set
     * - 9 = Single Byte Encoding - Italy Character Set
     * - 10 = Single Byte Encoding - Spain Character Set
     * - 11 = Single Byte Encoding - Miscellaneous Character Set
     * - 12 = Single Byte Encoding - Japan (ASCII with Yen symbol) Character Set
     * - 13 = Zebra Code Page 850
     * - 14 = Double Byte Asian Encodings
     * - 15 = Shift-JIS
     * - 16 = EUC-JP and EUC-CN
     * - 17 = Deprecated - UCS-2 Big Endian
     * - 18 = Reserved
     * - 19 = Reserved
     * - 20 = Reserved
     * - 21 = Reserved
     * - 22 = Reserved
     * - 23 = Reserved
     * - 24 = Single Byte Asian Encodings
     * - 25 = Reserved
     * - 26 = Multibyte Asian Encodings with ASCII Transparency
     * - 27 = Zebra Code Page 1252
     * - 28 = Unicode (UTF-8 encoding) - Unicode Character Set
     * - 29 = Unicode (UTF-16 Big-Endian encoding) - Unicode Character Set
     * - 30 = Unicode (UTF-16 Little-Endian encoding) - Unicode Character Set
     * - 31 = Zebra Code Page 1250
     * - 33 = Code Page 1251
     * - 34 = Code Page 1253
     * - 35 = Code Page 1254
     * - 36 = Code Page 1255
     * @param int $value
     */
    public function setCI($value = 28)
    {

    }
}