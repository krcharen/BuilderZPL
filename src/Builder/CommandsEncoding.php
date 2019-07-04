<?php
/**
 * Created by PhpStorm.
 * User: FS
 * Date: 2019/7/2
 * Time: 17:31
 */

namespace MonkeyZPL\Builder;


interface CommandsEncoding
{
    /**
     * The ^CI command enables you to call up the international character set you want to use for printing.
     * You can mix character sets on a label.
     * Desired character set
     * - 0 = Single Byte Encoding - U.S.A. 1 Character Set
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
     * @param $value
     * @return mixed
     */
    public function addCI();
}