<?php

/*
Istruzioni:
Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza.
*/

class Smartphone {
    public $brand;
    public $model;
    public $year;
    public $ram;
    public $soc;
    public $dual_sim;
    public $colors;
    public $price;

    public function __construct(string $brand, string $model, int $year, int $ram, string $soc, bool $dual_sim, array $colors, float $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->ram = $ram;
        $this->soc = $soc;
        $this->dual_sim = $dual_sim;
        $this->colors = $colors;
        $this->price = $price;
    }

    public function getFullName() {
        return $this->brand . " " . $this->model;
    }
}


$phones = [
    new Smartphone('Apple', 'Iphone 12 mini', 2020, 6, 'Apple A14 Bionic', false, ['blue', 'black', 'white'], 779.00),
    new Smartphone('Oneplus', '8 Pro', 2020, 12, 'Qualcomm Snapdragon 865', false, ['black', 'blue', 'green'], 729.00),
    new Smartphone('LG', 'Velvet', 2020, 6, 'Qualcomm Snapdragon 765G', false, ['grey', 'green', 'white'], 449.00),
    new Smartphone('Xiaomi', 'Redmi Note 9 Pro', 2020, 6, 'Qualcomm Snapdragon 720G', true, ['white', 'grey', 'green'], 240.81),
    new Smartphone('Huawei', 'P40 Pro', 2020, 8, 'Kirin 990 5G', true, ['white', 'grey', 'black', 'gold'], 1049.90),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php foreach ($phones as $phone) { ?>
        <div class="phone">
            <p style="font-weight: bold; text-decoration: underline"><?php echo $phone->getFullName(); ?></p>
            <p>Released in <?php echo $phone->year; ?></p>
            <p><?php echo $phone->ram; ?>GB of RAM</p>
            <p>SoC: <?php echo $phone->soc; ?></p>
            <?php if ($phone->dual_sim) { ?>
                <p>Dual Sim</p>
            <?php } ?>
            <p>
                Available in:<br>
                <?php foreach ($phone->colors as $color) { ?>
                    <span class="color" style="background-color: <?php echo $color; ?>"></span>
                <?php } ?>
            </p>
            <p>Price: <?php echo $phone->price ?>€</p>
        </div>
    <?php } ?>
</body>
</html>