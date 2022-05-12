<h1>Hellow world</h1>
<?php
class Human {
    protected $name;
    private $age;
    private $salary;

    function __construct($param1 = 10, $param2 = 'Petro')
    {
        $this->age = $param1;
        $this->name = $param2;
    }

    public function setAge($huy)
    {
        if ($this->checkAge($huy)) {
            $this->age = $huy;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        return $age > 1 && $age < 100;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Man extends Human {
//    private $name;
//    private $age;
//    private $salary;
//
//    function __construct($param1 = 10, $param2 = 'Petro')
//    {
//        $this->age = $param1;
//        $this->name = $param2;
//    }
//
//    public function setAge($huy)
//    {
//        if ($this->checkAge($huy)) {
//            $this->age = $huy;
//        }
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    private function checkAge($age)
//    {
//        return $age > 1 && $age < 100;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }

    function __construct($param123 = 10, $param2456 = 'Taras')
    {
        parent::__construct($param123, $param2456);
        $this->name .= 'ovich';
    }
}

class Woman extends Human{
    function __construct($param123 = 10, $param2456 = 'Taras')
    {
        parent::__construct($param123, $param2456);
        $this->name .= 'ovna';
    }
}

$user1 = new Human(25, 'Vasya');
$user2 = new Human();

$user_man = new Man();
echo $user_man->getName();

$user_woman = new Woman();
echo $user_woman->getName();

//echo 'Age: ' . $user1->getAge() . ' Name: ' . $user1->getName() . '<br>';
//echo 'Age: ' . $user2->getAge() . ' Name: ' . $user2->getName() . '<br>';
