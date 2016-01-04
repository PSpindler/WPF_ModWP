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
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/js/foundation.min.js"></script>
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

        <!-- >> CONTENT << -->  
        <div class="row" id="content-start">
            <div class="large-12 columns sub-site-head">
                <h2>All Animals</h2>
                <p>All the unkown Animals we have in our database.</p>
            </div>
        </div>
        
        <div class="row">            
                <ul class="gallery large-block-grid-4 medium-block-grid-3  small-block-grid-2">
                    <?php
                    // run through Dir
                    if ($handle = opendir('./img/animals')) {
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {
                                ?>
                                <li>
                                    <a href="./single.php?animal=<?php echo $entry;?>">
                                        <img class="th" src="./img/animals/<?php echo $entry;?>/th.jpg" alt="<?php echo $entry;?>">
                                    </a>
                                        <div class="gallery-text">
                                            <p><?php echo ucwords(strtolower(str_replace("-"," ",$entry))); ?></p>
                                            
                                            <?php
                                                // read intro.txt
                                                $file = "./img/animals/" . $entry . "/intro.txt";
                                                $f = fopen($file, "r");
                                                $content = fgets($f);
                                                $pos=strpos($content,' ', 50); 
                                            
                                            ?>                                                                                           
                                            <p class="small"><?php echo substr($content,0,$pos); ?><a href="./single.php?animal=<?php echo $entry;?>"> [...]</a></p>   
                                            <?php
                                            fclose($f);
                                            ?>
                                    </div>
                                    
                                </li> 
                                <?php
                            }
                        }
                        closedir($handle);
                    }
                    ?>
                </ul>          
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
