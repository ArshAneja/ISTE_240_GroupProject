<?php
    // echo $page;
    $base = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Enlg9323%2F240%2FgroupProj%2F';
    if ($page == 'home'){
        $valid_hmtl = 'https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Enlg9323%2F240%2FgroupProj%2F';
    }

    else{
        $valid_hmtl = $base . $page;
    }
    //echo $valid_hmtl;
?>
<!-- $valid_hmtl is not recognized -->
<!-- <a href="<?php $valid_html;?>" target="_blank"><?php echo $valid_html;?></a> -->

</div> <!-- end of page_content -->
</div> <!-- end of no_foot -->
    <footer>
        <!-- need to make the "./" part of the path to "$path" -->
        <a href="#" target="_blank"><img src="./assets/img/RESIZED_HTML5_Badge.png" alt="html_badge_for_validation"></a>
        <a href="#" target="_blank"><img src="./assets/img/RESIZED_CSS3_logo.png" alt="css_logo_for_validation"></a>
    </footer>

</body>
</html>