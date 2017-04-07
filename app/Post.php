<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Post extends Model
{
    public static function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'год',
            'm' => 'месяцев',
            'w' => 'недель',
            'd' => 'дней',
            'h' => 'часов',
            'i' => 'минут',
            's' => 'секунд',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v;
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' назад' : 'только что';
    }
}

