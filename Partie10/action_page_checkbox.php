<!DOCTYPE html>
<html>

<body>
    <h1>Submitted Form Data</h1>
    <h2>Your input was received as:</h2>
    <?php
    if (!empty($_POST['vehicle'])) {
        foreach ($_POST['vehicle'] as $value) {
            echo 'Checked: ' . $value . '<br/>';
        }
    }
    ?>
    <p>The server has processed your input and returned this answer.</p>

</body>

</html>