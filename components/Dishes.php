<?php class Dish
{
    public $name;
    public $country;
    public $city;
    public $code;
    public $restaurant;
    public $website;
    public $map;

    public function __construct($code, $name, $country, $city, $restaurant, $website, $map)
    {
        $this->name = $name;
        $this->code = $code;
        $this->country = $country;
        $this->city = $city;
        $this->restaurant = $restaurant;
        $this->website = $website;
        $this->map = $map;
    } // end of public function __construct

} // end of class dish
