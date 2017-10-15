<?php

class Content
{
    public static $pages = array(
        0 => 'start.html',
        1 => 'about.html',
        2 => 'toplist.html'
    );

    public static function getPage($page_number) {
        return (include ('assets/' . Content::$pages[$page_number]));
    }
}