<?php
$title = 'Person.php';

class Person {

    // Constructor function with some default values if we don't provide parameters
    public function __construct($name = 'Neil', $age = 34, $kids = 1)
    {
        $this->name = $name;
        $this->age = $age;
        $this->kids = $kids;
    }

    public function speak()
    {
        echo sprintf('Hi, my name is %s', $this->name);
    }

    public function scoldKids()
    {
        echo sprintf('Hey you %s kids, pipe it down.', $this->kids);
    }
}


class Employee extends Person {

    public function __construct($name, $age, $kids)
    {
        parent::__construct($name, $age, $kids);
    }

    public function doWork()
    {
        echo sprintf('%s is now on the clock.', $this->name);
    }
}

$neil = new Employee();

$jenny = new Employee('Jenny', 33, 1);

?>






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PERSON</title>
</head>
<body>
<h1>HELLO WORLD!</h1>
<?php
$ryan = new Employee('Ryan', 28, 1);
?>

<p><?php
$ryan->doWork()
    ?>
</p>

<p>
    <?php
    $ryan->scoldKids()
    ?>
</p>

<p>
    <?php
    $ryan->speak()
    ?>
</p>
</body>
</html>