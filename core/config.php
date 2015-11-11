<?
class MenuItem
{
    protected $name = 'Menu Item';
    protected $path = '/';

    public function __construct($name, $path)
    {
        $this->name = $name;
        $this->path = $path;
    }

    public function get()
    {
        return array(
            'NAME' => $this->name,
            'PATH' => $this->path
        );
    }
}


class Menu {

    protected $path = '/';
    protected $menu = array();

    public function __construct($items)
    {
        $this->path = dirname($_SERVER['SCRIPT_NAME']);

        print_r($this->path);
        foreach($items as $item)
        {
            if ($item instanceof MenuItem)
            {
                $item = $item->get();
                $item['ACTIVE'] = stripos($this->path, $item['PATH']) !== false;
                $this->menu[] = $item;
            }
        }
        print_r($this->menu);
    }

    public function get()
    {
        return $this->menu;
    }
}