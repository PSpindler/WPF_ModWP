<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
    
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Animals that you didnt know existed</title>
        
        <!-- >> STYLESHEETS << --> 
            <!--NORMALIZE-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
            <!--FOUNDATION-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
            <!--FONT:MONTSERRAT-->
            <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
            <!--FONT:FONT-AWESOME-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <!--STYLE.CSS-->
            <link href='css/style.css' rel='stylesheet' type='text/css'>
        
        <!-- >> JAVASCRIPT << --> 
            <!--MODERNIZR-->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
            <!--JQUERY-->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
            <!--FOUNDATION-->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation/foundation.clearing.js"></script>
            <!--ACTIVATE FOUNDATION-->
            <script>
                $(document).ready(function(){
                    $(document).foundation();
                });
            </script>        
    </head>
    
    <body>
        
        <!-- SKIP NAV -->
        <div class="skipnav">
            <a href="#content-start">Skip to main content</a> 
        </div>
        
        <!-- >> WRAP FOR OFF-CANVAS << --> 
        <div class="off-canvas-wrap" data-offcanvas>
            <div class="inner-wrap">
                
                <!-- >> OFF-CANVAS-MENU << --> 
                <aside class="right-off-canvas-menu">
                    <ul>
                        <li class="active"><a href="browse.html">Browse</a></li>
                        <li><a href="ranking.html">Ranking</a></li>
                        <li><a href="new-animal.html">Submit New Unkown Animal</a></li>
                    </ul>
                </aside>
                    
                <!-- >> NAVIGATION << --> 
                <div class="contain-to-grid">
                    <nav class="top-bar" data-topbar role="navigation">
                       <!-- Left Nav Section -->
                       <ul class="title-area">
                        <li class="name">
                          <div class="logo">
                            <img src="img/kiwi_white.png" alt="logo" />
                            <a href="index.html">
                                <div class="logo-text pull-left">                      
                                    <div><h1><strong>Animals</strong></h1></div>
                                    <div>that you didn't know excisted</div>                        
                                </div>
                            </a>
                          </div>
                        </li>
                        <!-- Burger -->
                        <li class="toggle-topbar menu-icon"><a class="right-off-canvas-toggle" href="#"><span>Menu</span></a></li>
                       </ul>

                       <section class="top-bar-section show-for-medium-up">
                         <!-- Right Nav Section -->
                         <ul class="right">
                           <li class="active"><a href="browse.html">Browse</a></li>
                           <li><a href="ranking.html">Ranking</a></li>
                           <li><a href="new-animal.html">Submit New Unkown Animal</a></li>
                         </ul>
                       </section>
                    </nav>
                </div> 
                
            </div>
        </div>
                
        <!-- >> HEADING << -->  
        <div class="row" id="content-start">
            <div class="large-12 columns sub-site-head">
                <h2><?php echo ucwords(strtolower(str_replace("-"," ",$_GET['animal']))); ?></h2>
            </div>
        </div>
        
        <!-- >> CONTENT << --> 
        <div class="row"> 
            <div class="large-12 columns">
                <img class="single-img" src="./img/animals/<?php echo $_GET['animal'] . '/1.jpg'?>" alt="<?php echo $_GET['animal']; ?>"/>    
                <?php echo file_get_contents("./img/animals/" . $_GET['animal']. "/desc.txt"); ?>
            </div>
        </div>
        
        <!-- >> CLEARING << --> 
        <div class="row"> 
            <div class="large-12 columns clearing-gallery">
                <h3>More Photos of this amazing Animal</h3>
                <ul class="clearing-thumbs large-block-grid-8 medium-block-grid-6 small-block-grid-3" data-clearing="">
                    <?php
                    // run through dir
                    if ($handle = opendir('./img/animals/' . $_GET['animal'])) {
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {
                    
                              
                                if(is_array(getimagesize('./img/animals/' . $_GET['animal'] . '/' . $entry))){
                                ?>

                                    <li><a class="th" href="./img/animals/<?php echo $_GET['animal'] . '/' . $entry?>"><img src="./img/animals/<?php echo $_GET['animal'] . '/' . $entry?>" alt="<?php echo $_GET['animal']; ?>"></a></li>

                                <?php
                                } 
                            }
                        }
                        closedir($handle);
                    }
                    ?>
                </ul>
            </div>
        </div>         
        
         <!-- >> FOOTER << -->
        <footer class="footer">
            <div class="row">
                <div class="first-column large-9 medium-8 columns">
                    <h3>Animals that you didn't know excisted</h3>
                    <ul class="inline-list">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="browse.html">Browse</a></li>
                      <li><a href="ranking.html">Ranking</a></li>
                      <li><a href="new-animal.html">Submit New Unkown Animal</a></li>
                    </ul>
                </div>
                <div class="second-column large-3 medium-4 columns">
                    <p>WPF Web Programmieren<br/>
                        <small>(c) Philipp Spindler, 2015</small>
                    </p>
                </div>
            </div>      
        </footer>

    </body>
</html>