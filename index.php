<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Hugsbrugs php-phantomjs-get-html</title>
    <!-- BOOTSTRAP CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- BOOTSTRAP JS -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1>php-phantomjs-get-html</h1>
    <span>Visit <a href="https://github.com/hugsbrugs/php-phantomjs-get-html">https://github.com/hugsbrugs/php-phantomjs-get-html</a> for full sources</span>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Save code source</legend>
            <div class="form-group">
                <input type="text" class="form-control" name="url" placeholder="Enter URL built by Ajax">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </fieldset>
    </form>

<?php

include_once "get_code_source.php";

if (!isset($_REQUEST['url']))
{
    exit();
}
else
{
    $url = $_REQUEST['url'];

    $html_content = get_code_source($url);

    # Send back code source to google crawler
    //echo $html_content;

?>
    <h1>Code for <?= $url ?></h1>
    <div>
        <pre><?=  htmlspecialchars($html_content) ?></pre>
    </div>

<?php
}
?>

</div>

</body>
</html>
