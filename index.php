<?php
require_once __DIR__ . '/classes/Item.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    
    
    <main>

        <section class="products">
            <h2>Prodotto</h2>
            <?php 
            $new_item = new Item(10, 'Smartphone', 'Hi-tech', 199.99); ?>
            <ol>
                <li><strong>Buyer ID:</strong> <?php echo $new_item->getUserID(); ?></li>
                <li>
                    <strong>Oggetto:</strong> <?php echo $new_item->getItem(); ?>
                    <ul>
                        <li><strong>Categoria:</strong> <?php echo $new_item->getCategory(); ?></li>
                        <li><strong>Prezzo:</strong> <?php echo $new_item->getPrice(); ?>€</li>
                    </ul>
                </li>
            </ol>
        </section>

        <section class="users">
            <h2>Clienti</h2>
            <?php 
            $new_user = new User('Marcello', 'Beretta', 'marcello@gmail.com'); ?>
            <h3><?php echo $new_user->getFullName(); ?></h3>
            <ul>
                <li><strong>Email:</strong> <?php echo $new_user->getMail(); ?></li>
                <li>
                    <strong>Età:</strong> 
                    <?php
                    try {
                        $new_user->setAge(30);
                        echo $new_user->getAge() . ' anni';
                    } catch (Exception $e) {
                        echo 'Attenzione: ' . $e->getMessage();
                    }
                    ?>
                </li>
                <li><strong>Percentuale sconto:</strong> <?php echo $new_user->getDiscount(); ?>%</li>
                <li>
                    <strong>Prezzo finale:</strong> 
                    <?php 
                    echo 
                    number_format($new_item->getPrice() - ($new_item->getPrice() * $new_user->getDiscount() / 100), 2); 
                    ?>€
                </li>
            </ul>
        </section>

        <section class="premium-users">
            <h2>Clienti Premium</h2>
            <?php 
            $new_premium_user = new PremiumUser('Alessandro', 'Bianchi', 'alessandro@hotmail.com', true); ?>
            <h3><?php echo $new_premium_user->getFullName(); ?></h3>
            <ul>
                <li><strong>Email:</strong> <?php echo $new_premium_user->getMail(); ?></li>
                <li>
                    <strong>Età:</strong> 
                    <?php
                    try {
                        $new_premium_user->setAge(50);
                        echo $new_premium_user->getAge() . ' anni';
                    } catch (Exception $e) {
                        echo 'Attenzione: ' . $e->getMessage();
                    }
                    ?>
                </li>
                <li><strong>Percentuale sconto:</strong> <?php echo $new_premium_user->getDiscount(); ?>%</li>
                <li>
                    <strong>Prezzo finale:</strong> 
                    <?php 
                    echo 
                    number_format($new_item->getPrice() - ($new_item->getPrice() * $new_premium_user->getDiscount() / 100), 2); 
                    ?>€
                </li>
            </ul>
        </section>
    </main>

</body>
</html>