<?php
class Human
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
}
class Man extends Human {
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}
class Woman extends Human {
    private $stipen;
    private $kurs;

    public function setStipen($stipen)
    {
        $this->stipen = $stipen;
    }
    public function getStipen()
    {
        return $this->stipen;
    }

    public function setKurs($kurs)
    {
        $this->kurs = $kurs;
    }
    public function getKurs($kurs)
    {
        $this->kurs;
    }
}
class Driver extends Human {
    private $driver_exp;
    private $cat_a;
    private $cat_b;
    private $cat_c;
}
    $human1 = new Man();
    $human2 = new Man();

    $human1->setName('Ivan');
    $human1->setAge(25);
    $human1->setSalary(1000);

    $human2->setName('Vasya');
    $human2->setAge(26);
    $human2->setSalary(2000);
    echo 'summa = '. ($human1->getSalary() + $human2->getSalary());

