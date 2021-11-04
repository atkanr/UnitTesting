<?php
class Kalkulator
{
    public static function persenKeDesimal($angka){
        return $angka / 100;
    }

    public static function modulo($a, $b)
    {
        return $a % $b;
    }
    
    public static function kurangDari($a, $b)
    {
        if($a < $b)    {
            return "benar";
        }   else{
            return "salah";
        }
    }

    public static function lebihDari($a, $b)
    {
        if($a > $b)    {
            return "benar";
        }   else{
            return "salah";
        }
    }

    public static function samaDengan($a, $b)
    {
        if($a == $b)    {
            return "benar";
        }   else{
            return "salah";
        }
    }
}