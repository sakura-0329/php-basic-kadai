<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        
class Food {
    private $name;
    private $price;

    public function __construct(string $name,int $price){
        $this->name = $name;
        $this->price = $price;
    }
    public function show_price() {
        echo $this->price;
    }
}
    
class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight){
        $this->height = $height;
        $this->name = $name;
        $this->weight = $weight;
    }
    public function show_price() {
            echo $this->name;
            echo '<br>';
            echo $this->height;
            echo '<br>';
            echo $this->weight;
            echo '<br>';
        }
    }
    $food = new Food('potsto', 250);
    $animal = new Animal('dog',60,5000);
    
    $food->show_price();
    echo '<br>';
    $animal->show_price();
    echo '<br>';
      ?>
    </p>
</body>

</html>
    
