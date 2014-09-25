<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        class Animal{
            protected $name;
            protected $favourtite_food;
            protected $id;
            
            public static $number_of_animals = 0;
           
            const PI ="3.14";
            
            function getName(){
                
                return $this->name;
            }
            
            function __construct() {
                $this->id =rand(100, 100000);
                echo $this->id . "has been assigned";
                
                Animal::$number_of_animals++;
            }
            
            public function __desctruct(){
                echo $this->name . "is being destroyed";
            }
        }
        
        class Dog extends Animal{
            
        }
        
        $animal_one = new Animal();
        $animal_one->name ="spot";
        $animal_one->favorite
                
        ?>
    </body>
</html>
