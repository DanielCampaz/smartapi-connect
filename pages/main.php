<?php
require_once dirname(__FILE__, 2) . '\class\line.php';
require_once dirname(__FILE__, 2) . '\class\backupaction.php';
require_once dirname(__FILE__, 2) . '\functions\functions.php';
require_once dirname(__FILE__, 2) . '\const\const.php';

//TODO: Organizer add Endpoints, List automatic endpoint Session

//TODO: Previews of urls, pass num endpoints to settings

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once dirname(__FILE__) . '\components\imports.php'; ?>
    <title>Connection Api - Principal</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body id="body_plugin">
    <?php require_once dirname(__FILE__) . '\components\navbar.php'; ?>
    <main class="connection_api" id="main">
        <div class="connection_api todo" style="display: none;" >
            <?php require_once dirname(__FILE__) . '\todo.php'; ?>
        </div>
        <div class="connection_api request">
            <?php require_once dirname(__FILE__) . '\request.php'; ?>
        </div>
        <div></div>
        <div class="connection_api settings" style="display: none;" >
            <?php require_once dirname(__FILE__) . '\settings.php'; ?>
        </div>
    </main>
    <script type="module">
       
    </script>
    

</body>

</html>

<!-- 

    <?php

    $line = new Line();

    $line->Add(new BackupAction($line, "Action 1"));
    $line->Add(new BackupAction($line, "Action 2"));
    $line->Add(new BackupAction($line, "Action 3"));
    $line->Add(new BackupAction($line, "Action 4N"));

    $line->Execute();

    $bo = true;

    ?>
    const bo = (str) => parseInt(str) == 0 ? false : true
        let button = document.querySelector("#Buttoni");
    let buttons = document.querySelector("#Buttonis");
    button.disabled = bo("<?php echo returnBool($bo) ?>");
    let span = document.querySelector("#span");

    button.addEventListener('click', () => {
        span.innerHTML = "<?php
                            $line->Execute();
                            ?>"
        })
    
        buttons.addEventListener('click', () => {
            span.innerHTML = "<?php
                                $bo = false;
                                echo returnBool($bo);
                                ?>"
            button.disabled = bo("<?php echo returnBool($bo) ?>");
            
        })

-->