<?php
// Inheritance
/*class Fruits {

    const FRUIT_NAME = 'Fruit Name::: ';

    const FRUIT_COLOR = 'Fruit Color::: ';

    protected $name;

    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function setFruitName($name) {
        $this->name = $name;
    }

    function setFruitColor($color) {
        $this->color = $color;
    }

    function getFruitName() {
        return self::FRUIT_NAME . $this->name;
    }

    final function getFruitColor() {
        return self::FRUIT_COLOR . $this->color;
    }
}


class childFruits extends Fruits {
    function getFruitName() {
        return Fruits::FRUIT_NAME . ' From Child: ' . $this->name;
    }
}


$fruit1 = new childFruits('Apple', 'Red');

echo $fruit1->getFruitName();
echo '<br>' . $fruit1->getFruitColor();

$fruit1->setFruitName('Banana');
$fruit1->setFruitColor('Yellow');

echo '<br><br>' . $fruit1->getFruitName();
echo '<br>' . $fruit1->getFruitColor();

echo '<br><br><br>' . $fruit1->name;*/





// Abstract

/*abstract class AbstractFruits {

    protected $name;

    function __construct($name) {
        $this->name = $name;
    }

    abstract public function setFruitName($name);

    public function getFruitName() {
        return 'The fruit name is: ' . $this->name;
    }
}


class ChildOne extends AbstractFruits {
    public function setFruitName($name) {
        $this->name = $name;
    }
}

$fruits = new ChildOne('Apple');
echo $fruits->getFruitName();

$fruits->setFruitName('Banana');
echo '<br><br><br>' . $fruits->getFruitName();*/





// Interface
// interface InterfaceFruits {
//     public function setFruitName($name);

//     public function getFruitName();
// }


// class ChildTwo implements InterfaceFruits {
//     public function setFruitName($name) {
//         $this->name = $name;
//     }

//     public function getFruitName() {
//         return 'The fruit name is: ' . $this->name;
//     }
// }

// $fruits = new ChildTwo();
// $fruits->setFruitName('Apple');
// echo $fruits->getFruitName();


// Static
/*class Fruit {
    public static function myFavFruit() {
        echo 'My Fav Fruit is Apple';
    }
}

Fruit::myFavFruit();*/