<!DOCTYPE html>
<html>
<body>
    <h1>Submitted Form Data</h1>
    <h2>Your input was received as:</h2>
    <?php

    $full = $_GET['fullname'];   
    $pin = $_GET['pin'] ;

    $print = 'Hello your full name is : ' . $full . ' and your PIN is : ' . $pin;
    ?>
    <div style="padding: 2px;border: 2px solid gray;color: gray;font-size: 20px">
        <?php echo $print ?>
    </div>
    <p>The server has processed your input and returned this answer.</p>

</body>
</html>