<?php
//parent class
class Vehicle{
    public $model;
    public $color;

    //construtor
    public function __construct($model,$color){
        $this->model=$model;
        $this->color=$color;
    }
    //method to display the vehicle details
    public function vehicleDetails(){
        echo "Model of the vehicle: ".$this->model."<br>";
        echo "Color of the vehicle: ".$this->color."<br>";
    }
    //constructor for the car
    public function__construct($model,$color){
        parent::__construct($model,$color);
        $this->door=$doors;
    }
    //method to describe the vehicle
    public function describe(){
        echo "This is a ".$this->model." model car and it is ".$this->color." in color and it has ".$this->doors." doors";
    }
    //override the describe ()  method
    public function describe(){
        echo "This is a ".$this->model." model car and it is ".$this->color." in color and it has ".$this->doors." doors";
    }
    //creating an object of the Car class
    $car1=new Car("BMW","Black",4);
    $car1->vehicleDetails();

    //calling the describe method
    $car1->describe();

    
}




?>

