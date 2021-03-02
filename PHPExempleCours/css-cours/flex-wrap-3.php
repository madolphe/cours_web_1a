<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flexboxs</title>
    <link rel="stylesheet" href="css/css-flex-wrap.css">
</head>
<body>
    <form method="post" action="flex-wrap-3.php">
        wrap:<input type="radio" name="flex-wrap" value="wrap"></br>
        no wrap: <input type="radio" name="flex-wrap" value="nowrap"></br>
        <input type="submit" name="Valider">
    </form>
    div.container{display:flex; flex-direction: row; justify-content: flex-start; flex-wrap}
    <?php if(isset($_POST['flex-wrap'])){
        $class = 'container_'.$_POST['flex-wrap'];
        echo "<div class=$class>";
    } else{?>
    <div class="container_nowrap">
    <?php } ?>
        <div class="item class1"><span>1</span></div>
        <div class="item class2"><span>2</span></div>
        <div class="item class1"><span>3</span></div>
        <div class="item class2"><span>4</span></div>
        <div class="item class1"><span>5</span></div>
        <div class="item class2"><span>6</span></div>
        <div class="item class1"><span>7</span></div>
        <div class="item class2"><span>8</span></div>
    </div>
</body>