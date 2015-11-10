<?
class MenuBuilder {

    private $items = array();


    public function __construct($items)
    {
        $this->$items = $items;
    }

    public function get()
    {
        $menu = '<nav>
            <ul>
                <li><a href="#">Главная</a>
                <li><a href="#">Каталог</a>
                <li><a href="#"  class="active">Доставка</a>
                <li><a href="#">Оплата</a>
                <li><a href="#">О нас</a>
            </ul>
        </nav>';

        return $menu;
    }

    public function isActive($item)
    {

    }

}