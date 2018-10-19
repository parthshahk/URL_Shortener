<?php $title = "Homepage"; include "head.php"; ?>
<div class="container">
    <div class="row center-align blue-grey-text text-darken-3">
        <div class="col s12">
            <h5>Measure your links with <span class="logo-font">URL Shortener</span>, a simple link tracking platform.</h5>
        </div>
        <div class="col s12"><h6><a href="about.php">What is <span class="logo-font">URL Shortener</span>?</a></h6></div>
    </div>
    <div class="row"></div>
    <div class="row center-align blue-grey-text text-darken-3">
        <div class="col s12">
            <p>Paste a URL/Link below to Shorten.</p>
        </div>
    </div>
    <div class="row"></div>
    <div class="row center-align blue-grey-text text-darken-4">
        <div class="input-field col s12">
            <i class="material-icons prefix">link</i>
            <input id="url" type="url" class="validate">
            <label for="url" data-error="Invalid URL" data-success="">URL/Link</label>
        </div>
    </div>
    <div class="row center-align">
        <div class="col s12">
            <button class="waves-effect waves-light btn blue-grey darken-3" id="shorten">Shorten<i class="material-icons right">arrow_forward</i></button>
        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>    
    <div class="row"></div>
    <div class="row">
        <div class="col s10 input-field offset-s1">
            <textarea id="shortened" class="materialize-textarea" placeholder="Your shortened URL/Link will appear here."></textarea>
            <label for="shortened">Your shortened URL</label>
        </div>
    </div>
    <div class="row"></div>
    <div class="row blue-grey-text text-darken-4">
        <div class="col s12 m4">
            <div class="center">
                <i class="material-icons promo-ico">link</i>
                <p>Shorten</p>
                <p class="light center">Shorten and optimize your links across devices, channels and platforms. Share them to get insights.</p>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="center">
                <i class="material-icons promo-ico">graphic_eq</i>
                <p>Measure</p>
                <p class="light center">Track individual link analytics and measure usage in one location.</p>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="center">
                <i class="material-icons promo-ico">autorenew</i>
                <p>Optimize</p>
                <p class="light center">Collect insights on your performance and optimize your marketing efforts to better fit your audience needs.</p>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="row center-align">
        <div class="col s12">
            <h6><a href="about.php">Learn More</a></h6>
        </div>
    </div>
</div>
<?php include "foot.php" ?>