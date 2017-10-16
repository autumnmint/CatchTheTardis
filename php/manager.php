<?php

 class Manager {

    public static $pages = array(
        0 => ["title" =>"Start", "href" =>"start.html"],
        1 => ["title"=>"About", "href" => "about.html"],
        2 => ["title"=>"Toplist", "href" => "toplist.html"]
    );

    public static function getMenu($number) {
        $result_html = '';
        for ($i = 0; $i < count(Manager::$pages); $i++)
        {
            $result_html .= '<li class="menu-main__item';
            if ($i == $number) {
                $result_html .= ' menu-main__item_active">';
            }
            else {
                $result_html .= '"><a class="menu-main__item_link" href="index.php?page=' .$i. '">';
            }
            $result_html .= Manager::$pages[$i]["title"];
            if ($i != $number) {
                $result_html .= '</a>';
            }
            $result_html .= '</li>';
        }
        return  $result_html;
    }
    public static function getPage($page_number) {
        return (include ('assets/' . Manager::$pages[$page_number]["href"]));
    }
}