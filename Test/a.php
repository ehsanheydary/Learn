<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 4/8/2018
 * Time: 9:43 PM
 */
$conn = mysqli_connect(
    'localhost',
    'free',
    'jLKJfNyuExogcO5d',
    'php7'
);

$selectUser = mysqli_query($conn,"SELECT * FROM user");
while ($rowUser = mysqli_fetch_assoc($selectUser)){
    ?>
    <a href="b.php?id=<?php echo $rowUser['id'] ?>">

        <?php
        echo $rowUser['name'];
        ?>
    </a>

<?php
}
?>