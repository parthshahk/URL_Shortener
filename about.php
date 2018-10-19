<?php
    $home='';
    $track='';
    $about='active';
    $help='';
    $title='About';
?>
<?php include "head.php" ?>
<div class="container">
    <div class="row">
        <div class="col s12 blue-grey-text text-darken-4">
            <h5><span class="logo-font">URL Shortener</span> | FAQ</h5>
        </div>
    </div>
    <div class="row">
        <div class="col s12 blue-grey-text text-darken-3">
            <p><b>Q. What is <span class="logo-font">URL Shortener</span>?</b></p>
            <p>A. <span class="logo-font">URL Shortener</span> is a link tracking platform. When you enter a desired URL, you get a 'Shortened' version of it which can be used to share across platforms like email, websites, etc. When this 'Shortened' link is clicked, it's usage is measured and saved on the server and the user is redirected to the original link.</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 blue-grey-text text-darken-3">
            <p><b>Q. Why use <span class="logo-font">URL Shortener</span>?</b></p>
            <p>A. <span class="logo-font">URL Shortener</span> enables you to track the usage of a particular page. It measures the number of Unique visitors the link gets, as well as the total hits the link recieves.</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 blue-grey-text text-darken-3">
            <p><b>Q. How do I track a link?</b></p>
            <p>A. First, create a shortened link from the home page which you can use for sharing. Go to <a href="track.php" target="_blank">track</a> page and enter this shortened link to get it's usage details.</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 blue-grey-text text-darken-3">
            <p><b>Q. Unique Visitors Vs. Total Hits</b></p>
            <p>A. The unique visitor count is incremented when an entity uses the link for the first time. Whereas total hits are incremented whenever an entity uses the link.</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 blue-grey-text text-darken-3">
            <p><b>Q. How are unique visitors measured.</b></p>
            <p>A. Whenever an entity uses the link for the first time, a cookie is placed in the client machine to mark their visit. This cookie is later used to recognize the client machine when it uses the link again. The cookie expires every 30 days, renewing the machine to be 'unique' again to get more rational statistics.</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 blue-grey-text text-darken-3">
            <p><b>Q. Why do I get a 'Invalid Link' message?</b></p>
            <p>A. A valid link starts with a protocol name followed by '://', like 'https://', 'ftp://', etc. Without these prefixes a URL is invalid. Make sure to paste the entire copied URL correctly.</p>
        </div>
    </div>
    <div class="row center-align">
        <div class="col s12">
            <h6>More Questions? <a href="./help.php">Click Here</a></h6>
        </div>
    </div>
</div>
<?php include "foot.php" ?>