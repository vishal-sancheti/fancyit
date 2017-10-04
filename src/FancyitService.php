<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 04/10/17
 * Time: 4:41 PM
 */

namespace V1shky\Fancyit;


class FancyitService
{
    protected $pattern;
    public function __construct($pattern) {
            $this->pattern = $pattern;
    }
    public function convert($string) {
        if($this->pattern == 'upsidedown'){
            return $this->upsidedown($string);
        }else if($this->pattern == 'reverse'){
            return strrev($string);
        }
    }
    private function upsidedown($string){
        // conversion table
        $flipTable = array(
            '!' => '&#x00A1;',
            '"' => '&#x201E;',
            '&' => '&#x214B;',
            "'" => ',',
            '(' => ')',
            ')' => '(',
            ',' =>  "'",
            '.' => '&#x02D9',
            '0' => '0',
            '1' => '&#x21C2;',
            '2' => '&#x1105;',
            '3' => '&#x0190;',
            '4' => '&#x3123;',
            '5' => '&#x078E',
            '6' => '9',
            '7' => '&#x3125;',
            '8' => '8',
            '9' => '6',
            ';' => '&#x061B;',
            '<' => '>',
            '>' => '<',
            '?' => '&#x00BF',
            'A' => '&#x2200',
            'B' => '&#x10412',
            'C' => '&#x0186',
            'D' => '&#x25D6',
            'E' => '&#x018E',
            'F' => '&#x2132',
            'G' => '&#x2141',
            'H' => 'H',
            'I' => 'I',
            'J' => '&#x017F',
            'K' => '&#x22CA',
            'L' => '&#x02E5',
            'M' => 'W',
            'N' => 'N',
            'O' => 'O',
            'P' => '&#x0500',
            'Q' => '&#x038C',
            'R' => '&#x1D1A',
            'S' => 'S',
            'T' => '&#x22A5',
            'U' => '&#x2229',
            'V' => '&#x039B',
            'W' => 'M',
            'Y' => '&#x2144',
            '[' => ']',
            ']' => '[',
            '_' => '&#x203E',
            'a' => '&#x0250',
            'b' => 'q',
            'c' => '&#x0254',
            'd' => 'p',
            'e' => '&#x01DD',
            'f' => '&#x025F',
            'g' => '&#x0183',
            'h' => '&#x0265',
            'i' => '&#x0131',
            'j' => '&#x027E',
            'k' => '&#x029E',
            'l' => '&#x0283',
            'm' => '&#x026F',
            'n' => 'u',
            'o' => 'o',
            'p' => 'd',
            'q' => 'b',
            'r' => '&#x0279',
            's' => 's',
            't' => '&#x0287',
            'u' => 'n',
            'v' => '&#x028C',
            'w' => '&#x028D',
            'x' => 'x',
            'y' => '&#x028E',
            'z' => 'z',
            '{' => '}',
            '}' => '{'
        );
        $origStr = $string;
        $newStr = ' ';
        for ($i = 0; $i < strlen($origStr); $i++) {
            $ch = $origStr[$i];
            if (array_key_exists($ch, $flipTable)) {
                $newStr .= $flipTable[$ch];
            } else {
                $newStr .= $ch;
            }
        }
        return $newStr;
    }
}