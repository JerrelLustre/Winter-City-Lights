<?php 

    require('app/init.php');

    // Redirect users to the public site
    redirect('/index.php');

    // npx tailwindcss -i ./input.css -o ./public/css/output.css --watch