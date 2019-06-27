<?php

namespace Faker\Provider;

class TeamProvider extends Base
{
    protected static $animals = array("Hawks", "Honeybadgers", "Mantis Shrimps", "Anteaters", "Panthers", "Wolves", "Lions", "Eagles", "Wolverines", "Gators", "Scorpions", "Monkeys", "Weasels");

    protected static $colors = array("Red", "Black", "Silver", "Magenta", "Green", "Blue", "White", "Fuschia");

    protected static $adjectives = array("Angry", "Awesome", "Mighty", "Atomic", "Screaming", "Scorching", "Slick", "Big", "Giant", "Speedy", "Red Hot", "Lil'", "Rockin'", "Extreme");

    protected static $disasters = array("Tornados", "Hurricanes", "Lightning", "Thunder", "Backdraft", "Fire", "Firestorms", "Flames");

    protected static $weapons = array("Bazookas", "Machetes", "Machine Guns", "Daggers", "Rockets");

    protected static $others = array("Slayers", "Bombers", "Demons", "Angels", "X-treme", "Maniacs", "Annihilators", "Rage", "Bruisers");

    protected static $namesFormats = array(
        '{{color}} {{animal}}',
        '{{adjective}} {{animal}}',
        '{{adjective}} {{color}} {{animal}}',
        '{{color}} {{other}}',
        '{{adjective}} {{other}}',
        '{{adjective}} {{color}} {{other}}',
        '{{color}} {{disaster}}',
        '{{adjective}} {{disaster}}',
        '{{color}} {{weapon}}',
        '{{adjective}} {{weapon}}'
    );

    public static function animal()
    {
        return static::randomElement(static::$animals);
    }

    public static function color()
    {
        return static::randomElement(static::$colors);
    }

    public static function adjective()
    {
        return static::randomElement(static::$adjectives);
    }

    public static function disaster()
    {
        return static::randomElement(static::$disasters);
    }

    public static function weapon()
    {
        return static::randomElement(static::$weapons);
    }

    public static function other()
    {
        return static::randomElement(static::$others);
    }

    public function teamName()
    {
        return $this->generator->parse(static::randomElement(static::$namesFormats));
    }

    public function abreviation($name)
    {
        $name = explode(" ", $name);

        switch (count($name)) {
            case '2':
                return strtoupper(substr($name[0], 0, 2). substr($name[1], 0, 1));
                break;

            case '3':
                return strtoupper(substr($name[0], 0, 1). substr($name[1], 0, 1). substr($name[2], 0, 1));
            
            default:
                return "ABC";
                break;
        }
    }
}
