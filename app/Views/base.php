<html>
    <head>
        <title><?= isset($title) ? $title : "Hello World!" ?></title>
    </head>
    <body>
        <p>INI NAVBAR</p>
        
        <hr>

        <?= $this->renderSection('content') ?>

        <hr/>
    </body>
</html>