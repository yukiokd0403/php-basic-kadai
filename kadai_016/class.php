<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
</head>

<body>
  <p>
    <?php
    class Food{
      public $name;
      public $price;

      public function __construct(string $name,int $price){
      $this->name=$name;
      $this->price=$price;
      }
      public function getName():string{
        return $this->name;
      }
      public function show_price(){
        echo $this->price;
      }
      public function detail():string{
        return"Food:".$this->getName().",Price:".$this->getPrice()."円";
      }
      }
      $food=new Food('ジャガイモ',250);
      print_r($food);
    ?>
    </p>
    <p>
    <?php
    class Animal{
      public $name;
      public $height;
      public $weight;

      public function __construct(string $name,int $height,int $weight){
        $this->name=$name;
        $this->height=$height;
        $this->weight=$weight;
      }
      public function getName():string{
        return $this->name;
      }
      public function show_height(){
        echo $this->height;
      }
      public function getWeight():int{
        return $this->weight;
      }
      public function detail():string{
        return"Animal:".$this->getName().",Height:".$this->getHeight()."m,Weight:".$this->getWeight()."kg";
      }
    }
    $animal=new Animal('犬',1,10);
    print_r($animal);
    ?>
    </p>
  </body>
  </html>
