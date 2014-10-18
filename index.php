<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Hugsbrugs php-phantomjs-get-html</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/spacelab/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<form action="index.php" method="post">
    <fieldset>
        <legend>Save code source</legend>
        <div class="form-group">
            <label for="url">URL for code source</label>
            <input type="text" class="form-control" name="url" placeholder="Enter URL">
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
$url = $_REQUEST['url'];

$html_content = get_code_source($url);

# Send back code source to google crawler
echo $html_content;

?>

</body>
</html>
