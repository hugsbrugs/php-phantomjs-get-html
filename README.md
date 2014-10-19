<h1>php phantomjs get html</h1>
As explained in <a href="https://developers.google.com/webmasters/ajax-crawling/docs/html-snapshot" target="_blank">Google Webmaster AJAX Crawling Guidelines</a>, ajax based websites suffer from being correcly crawled by search engines.<br><br>
If you break your ass building a cool ajax website which will never appear in search engine results, well, it's quite frustating. Unless you use the power of <a href="http://phantomjs.org/" target="_blank">Phantomjs</a>, a browser simulator (to keep it simple) which will allow us to get a web page snapshot of ALL html built from ajax requests !<br><br>

This very very simple piece of code is inspired from <a href="https://github.com/microweber/screen" target="_blank">https://github.com/microweber/screen</a>, a php tools which creates websites screenshots thanks to phantomjs.<br>

<h1>Test Usage</h1>
<ul>
    <li>Upload to your webserver (be carefull that phantomjs in bin folder if for linux 64 bits, replace if needed with : <a href="http://phantomjs.org/download.html" target="_blank">http://phantomjs.org/download.html</a> )</li>
    <li>Make the bin executable chmod +x /YOUR_PATH/bin/phantomjs</li>
    <li>Make your folder writable (it creates jobs folder on the fly)</li>
    <li>Open your browser to index.php and test it with url of your choice</li>
</ul>

<h1>Real world usage</h1>
<h2>Code something similar to this where you handle URLs server side :</h2>
<pre><code>
if( strpos($Uri, "_escaped_fragment_") !== FALSE ){

error_log("GOOGLE BOT AJAX CRAWL : ".$Uri);

# REMOVE "?_escaped_fragment_=" FROM URI
$Uri = str_replace("?_escaped_fragment_=", "", $Uri);

# INCLUDE 
include_once "get_code_source.php";

# DO THE MAGIC
$Html = get_code_source($url);

# DISPLAY PAGE 
echo $Html;

exit();
}
</code></pre><br>
Go to <a href="https://www.google.com/webmasters/tools/home" target="_blank">Google Webmaster Tools</a>, in the left menu, go to crawl -> Fetch as Google -> Fill in an ajax built URL and click Fetch and render button.

<h1>Similar programs to achieve ajax SEO</h1>
<ul>
    <li><a href="http://htmlunit.sourceforge.net" target="_blank">htmlunit.sourceforge.net</a></li>
    <li><a href="http://watij.com" target="_blank">watij.com</a></li>
    <li><a href="http://crawljax.com" target="_blank">crawljax.com</a></li>
</ul>