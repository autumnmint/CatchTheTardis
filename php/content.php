<?php

class Content
{
    public static $pages = array(
        1 => 'start.html',
        2 => 'about.html',
        3 => 'toplist.html'
    );

    public static function getPage($page_number) {
        return (include ('assets/' . Content::$pages[$page_number]));
    }
}