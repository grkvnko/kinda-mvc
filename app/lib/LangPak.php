<?php

class LangPak
{
    private static $words_arr;
    private static $languages = ['РУС' => 'ru', 'ENG' => 'en'];

    public static function setWords(array $words_arr)
    {
        self::$words_arr = $words_arr;
    }

    public static function getWord($text)
    {
        $text_find = self::$words_arr[$text][mainframe::getCurrentLanguage()];
        echo (isset($text_find)) ? $text_find : self::$words_arr[$text][Config::getDefaultLanguage()];
    }

    public static function getLanguages()
    {
        return self::$languages;
    }
}