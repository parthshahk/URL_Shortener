<?php
    $home='';
    $track='';
    $about='';
    $help='active';
    $title='Help';

    $msgSent=0;

    function validate_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message'])){

    
        $msg = validate_input($_POST['name'])."\n".validate_input($_POST['email'])."\n".validate_input($_POST['message']);
            
        $msg = wordwrap($msg,70);
        
        $headers = 'From: hello@parthshah.xyz' . "\r\n" .
        'Reply-To: hello@parthshah.xyz' . "\r\n";

        mail("parthshahk@gmail.com", "URL Help Message", $msg, $headers);

        $msgSent=1;
        
    }
?>
<?php include "head.php" ?>

<div class="container">
    <div class="row">
        <div class="col s12 blue-grey-text text-darken-4">
            <h5><span class="logo-font">URL Shortner</span> | Help</h5>
        </div>
    </div>
    <div class="row center-align">
        <div class="col s12 blue-grey-text text-darken-4">
            <p>Send me your questions/feedback. I'll get back to you as soon as possible if required :)</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="col m3 offset-m3 s6 input-field">
                    <input id="name" name="name" type="text" required>
                    <label for="name">Name</label>
                </div>
                <div class="col m3 s6 input-field">
                        <input id="email" name="email" type="email" required>
                        <label for="email">Email</label>
                </div>
                <div class="col s12 m6 offset-m3 input-field">
                    <textarea id="message" class="materialize-textarea" name="message" maxlength="255" required></textarea>
                    <label for="message">Message</label>
                </div>
                <div class="col center-align s12">
                    <input type="submit" class="btn waves-effect waves-light blue-grey darken-3" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "foot.php" ?>
<script>
        <?php        
            if($msgSent) echo "Materialize.toast('Message Sent! Thank You', 4000);";
        ?>
</script>