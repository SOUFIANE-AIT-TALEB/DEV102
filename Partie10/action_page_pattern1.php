<!DOCTYPE html>
<html>
<body>
    <h1>Submitted Form Data</h1>
    <h2>Your input was received as:</h2>
    <?php

    $code = $_GET['country_code'];       

    $print = 'Country code :' . $code;
    ?>
    <div style="padding: 2px;border: 2px solid gray;color: gray;font-size: 20px">
        <?php echo $print ?>
    </div>
    <p>The server has processed your input and returned this answer.</p>

</body>
</html>