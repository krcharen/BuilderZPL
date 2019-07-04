<?php
/**
 * Created by PhpStorm.
 * User: Charen
 * Date: 2019/7/2
 * Time: 15:13
 */

namespace MonkeyZPL;

use MonkeyZPL\BaseService\Base;
use MonkeyZPL\Builder\Constructor;

class Commands extends Base implements Constructor
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


    /**
     * @return $this|mixed
     */
    public function setStart()
    {
        $this->zpl = $this->start;

        return $this;
    }

    /**
     * @param int $value
     * @return $this|mixed
     */
    public function addCI(int $value = 28)
    {
        $this->zpl .= '^CI' . $value;

        return $this;
    }

    /**
     * ~DGd:o.x,t,w,data
     * @param string $d
     * @param string $o
     * @param string $x
     * @param int $t
     * @param int $w
     * @param string $data
     * @return $this|mixed
     */
    public function addDG(string $d = 'R', string $o = 'SAMPLE', string $x = 'GRF', string $t = '00000', string $w = '000', string $data = '')
    {
        if ($x === 'GRF' || empty($x)) $x = 'GRF';

        $DGStr = '~DG' . $d . ':' . $o . '.' . $x . ',' . $t . ',' . $w . ',' . $data;

        if ($d === 'R' || empty($d)) {
            $DGStr = str_replace(':' . $o, $o, $DGStr);
        }

        $this->zpl .= $DGStr;

        return $this;
    }

    /**
     * @param int $x
     * @param int $y
     * @param int $z
     * @return $this|mixed
     */
    public function addFT(int $x = 0, int $y = 0, int $z = 0)
    {
        if (empty($z)) $z = '';

        $FTStr = '^FT' . $x . ',' . $y . ',' . $z;
        $FTStr = rtrim($FTStr, ',');

        $this->zpl .= $FTStr;

        return $this;
    }

    /**
     * ^XG R:SAMPLE.GRF,1,1
     * @param string $d
     * @param string $o
     * @param string $x
     * @param string $mx
     * @param string $my
     * @return $this|mixed
     */
    public function addXG(string $d = 'R', string $o = 'SAMPLE', string $x = 'GRF', int $mx = 1, int $my = 1)
    {
        if ($x === 'GRF' || empty($x)) $x = 'GRF';

        $XGStr = '^XG' . $d . ':' . $o . '.' . $x . ',' . $mx . ',' . $my;

        if ($d === 'R' || empty($d)) {
            $XGStr = str_replace(':', '', $XGStr);
        }

        $this->zpl .= $XGStr;

        return $this;
    }

    /**
     * @param int $w
     * @param int $h
     * @param int $t
     * @param string $c
     * @param int $r
     * @return $this|mixed
     */
    public function addGB(int $w = 1, int $h = 1, int $t = 1, string $c = 'B', int $r = 0)
    {
        $this->zpl .= '^GB' . $w . ',' . $h . ',' . $t . ',' . $c . ',' . $r;

        return $this;
    }

    /**
     * ^BCN,100,Y,N,N
     * @param string $o
     * @param int $h
     * @param string $f
     * @param string $g
     * @param string $e
     * @param string $m
     * @return $this|mixed
     */
    public function addBC(string $o = 'N', $h = 1, $f = 'Y', $g = 'N', $e = 'N', $m = 'N')
    {
        $this->zpl .= '^BC' . $o . ',' . $h . ',' . $f . ',' . $g . ',' . $e . ',' . $m;

        return $this;
    }

    /**
     * ^BYw,r,h
     * @param int $w
     * @param string $r
     * @param int $h
     * @return $this|mixed
     */
    public function addBY(int $w = 1, string $r = '3.0', int $h = 1)
    {
        $this->zpl .= '^BY' . $w . ',' . $r . ',' . $h;

        return $this;
    }

    /**
     * ^Afo,h,w
     * @param string $f
     * @param string $o
     * @param int $h
     * @param int $w
     * @return $this|mixed
     */
    public function addA(string $f = '', string $o = 'N', int $h = 10, int $w = 10)
    {
        $this->zpl .= '^A' . $f . $o . ',' . $h . ',' . $w;

        return $this;
    }

    /**
     * ^FDa
     * Any data string up to 3072 bytes.
     * @param string $a
     * @return $this|mixed
     */
    public function addFD(string $a = '')
    {
        $this->zpl .= '^FD' . $a;

        return $this;
    }

    /**
     * ^FOx,y,z
     * @param int $x
     * @param int $y
     * @param int $z
     * @return $this|mixed
     */
    public function addFO($x = 0, $y = 0, $z = 0)
    {
        if (empty($z)) $z = '';

        $FOStr = '^FO' . $x . ',' . $y . ',' . $z;
        $FOStr = rtrim($FOStr, ',');

        $this->zpl .= $FOStr;

        return $this;
    }

    /**
     * @return $this|mixed
     */
    public function addFS()
    {
        $this->zpl .= '^FS';
        return $this;
    }

    /**
     * @return $this|mixed
     */
    public function setEnd()
    {
        $this->zpl .= $this->end;

        return $this;
    }
}