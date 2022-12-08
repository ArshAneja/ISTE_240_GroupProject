<?php
    // echo $page;
    //$page = 'testDir'; // this is just a test to see
    $valid_hmtl = 'HTML_FILL';
    $base = 'http://validator.w3.org/check?uri=http://solace.ist.rit.edu/~nlg9323/240/groupProj/';
    if ($page == 'home'){
        $valid_hmtl = 'http://validator.w3.org/check?uri=http://solace.ist.rit.edu/~nlg9323/240/groupProj/';
    }

    else{
        $valid_hmtl = $base . $page;
    }
    

    $valid_css = 'CSS_FILL';
    $css_base = 'http://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=';
    $site_home = 'http://solace.ist.rit.edu/~nlg9323/240/groupProj/';

    if ($page == 'home'){
        $valid_css = $css_base . $site_home;
    }

    else{
        $valid_css = $css_base . $site_home . $page;
    }

    


?>

</div> <!-- end of page_content -->
</div> <!-- end of no_foot -->
    <footer>

        <!-- <p>This is the name of the page: <?php echo $page;?></p>
        <p>This is the base link: <?php echo $base;?></p>
        <p>This is the valid html: <?php echo $valid_hmtl;?></p> -->

        <!-- <a href="<?php echo $valid_hmtl;?>">This checks current page</a> -->

        <!-- <p>this is the css base <?php echo $css_base;?></p>
        <p>this is the valid css <?php echo $valid_css;?></p>
        <p>this is the big cheese <?php echo $site_home;?></p> -->

        <!-- need to make the "./" part of the path to "$path" -->
        <a href="<?php echo $valid_hmtl;?>" target="_blank"><img src="./assets/img/RESIZED_HTML5_Badge.png" alt="html_badge_for_validation"></a>
        <a href="<?php echo $valid_css;?>" target="_blank"><img src="./assets/img/RESIZED_CSS3_logo.png" alt="css_logo_for_validation"></a>
    </footer>

</body>
</html>