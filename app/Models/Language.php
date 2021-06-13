<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Language extends Model
{
    use HasFactory;

    public static function getLang()
    {
        switch (LaravelLocalization::getCurrentLocale()) {
            case 'en':
                $lang = 'English';
                break;
            case 'ru':
                $lang = 'Русский';
                break;
            case 'kk':
                $lang = 'Қазақ';
                break;
        }
        return $lang;
    }

    public static function getLg()
    {
        switch (LaravelLocalization::getCurrentLocale()) {
            case 'ru':
                $lang = 0;
                break;
            case 'kk':
                $lang= 1;
                break;
            case 'en':
                $lang = 2;
                break;
        }
        return $lang;
    }

}
