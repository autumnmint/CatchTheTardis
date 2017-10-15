<?php
class Menu {
    public static $mass = array('Start', 'About', 'Toplist');
    public static function getMenu($number) {
        $result_html = '';
               for ($i = 0; $i < count(Menu::$mass); $i++)
                    {
                        $result_html .= '<li class="menu-main__item';
                        if ($i == $number) {
                            $result_html .= ' menu-main__item_active">';
                        }
           else {
               $result_html .= '"><a class="menu-main__item_link href="index.php?page=' .$i. '">';
           }
             $result_html .= Menu::$mass[$i];
             if ($i != $number) {
                 $result_html .= '</a>';
             }
             $result_html .= '</li>';
         }
         return  $result_html;
}

}
echo Menu::getMenu(1);
