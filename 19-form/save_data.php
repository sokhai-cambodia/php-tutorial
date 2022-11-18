<?php 

    function validateInput($data) {
        // validate
        return htmlspecialchars($data);
    }

?>

<?php 
echo $_GET['search'];
echo "save data";
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    echo "Name: ".validateInput($_POST['name']);
//    echo "Weight: ".validateInput($_POST['weight']);
// }

// save data
sleep(2);
header("Location: ./index.php")
?>
<!-- <p>Name: <?= validateInput($_POST['name']); ?></p>
<p>Weight: <?= validateInput($_POST['weight']); ?></p>

<?php 
    var_dump($_POST['favorite_colors']);
?> -->