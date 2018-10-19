<?php
    $home='';
    $track='active';
    $about='';
    $help='';
    $title='Track';
?>
<?php include "head.php" ?>

<div class="container">
    <div class="row">
        <div class="col s12 blue-grey-text text-darken-4">
            <h5><span class="logo-font">URL Shortner</span> | Track URL</h5>
        </div>
    </div>
    <div class="row center-align">
        <div class="col s12 blue-grey-text text-darken-4">
            <p>Enter a shortened Link below to get usage details.</p>
        </div>
    </div>
    <div class="row center-align blue-grey-text text-darken-4">
        <div class="input-field col s10 offset-s1">
            <i class="material-icons prefix">link</i>
            <input id="url" type="url" class="validate">
            <label for="url" data-error="Invalid URL" data-success="">Shortened Link</label>
        </div>
    </div>
    <div class="row center-align">
        <div class="col s12">
            <button class="waves-effect waves-light btn blue-grey darken-3" id="get-usage">Get Usage<i class="material-icons right">list</i></button>
        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row center-align blue-grey-text text-darken-4">
        <div class="col m6 offset-m3 s10 offset-s1">
            <table>
                <thead>
                    <tr>
                        <th>Unique Visitors</th>
                        <th>Total Hits</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="uv">-</td>
                        <td id="th">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>        
    <div class="row center-align">
        <div class="col s12">
            <h6>Have Questions? <a href="about.php">Learn More</a></h6>
        </div>
    </div>
</div>
<?php include "foot.php" ?>