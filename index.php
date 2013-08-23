<?php

// load the config files. first check if the config directory is outside
// the www-data root. if not, load the local one.
//
if ( file_exists( '../config/default.php' ) ):
    require_once '../config/default.php';
else:
    require_once 'config/default.php';
endif;

if ( file_exists( '../config/local.php' ) ):
    require_once '../config/local.php';
else:
    require_once 'config/local.php';
endif;


// check for command line arguments
//
$compile = FALSE;

if ( isset( $argv ) && is_array( $argv ) ):
    $options = getopt( "c" );

    if ( array_key_exists( "c", $options ) ):
        $compile = TRUE;
    endif;
endif;

// if there's an asset version, load that into the asset url
//
$asset_path = $config->asset_path;

if ( $compile ):
    ob_start();
endif;

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Donate to The Silent Barn!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo $asset_path; ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo $asset_path; ?>css/main.css">
        <link rel="stylesheet" href="<?php echo $asset_path; ?>css/trunk.css">
        <link rel="stylesheet" href="<?php echo $asset_path; ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $asset_path; ?>css/app.css">

        <link href='http://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,700' rel='stylesheet' type='text/css'>

        <script src="js/app.js"></script>
    </head>
    <body>
        <!-- Header -->
        <header>
            <nav>
                <a class="round-3 section-link" href="javascript:;" data-target="about">About Donating</a>
                <a class="round-3 section-link" href="javascript:;" data-target="barnacles">Barnacle System</a>
                <a class="round-3 section-link" href="javascript:;" data-target="prizes">Current Prizes</a>
                <a class="green round-3 bold paypal-donate" href="javascript:;"><i class="icon-usd"></i>&nbsp;&nbsp;Donate!</a>
            </nav>

            <div id="banner" class="clearfix">
                <div id="video">
                    <div id="embed" class="round-3 relative">
                        <div class="callout">1</div>
                        <i class="icon-play-circle"></i>
                    </div>
                </div>
                <div id="cta">
                    <div class="wrapper">
                        <div class="support">Support The</div>
                        <div class="the-barn">Silent Barn</div>
                        <div class="buttons">
                            <a class="button round-3 green no-underline paypal-donate" href="javascript:;">
                                <i class="icon-usd"></i>&nbsp;
                                Donate!
                            </a>
                            <br />
                            <a class="button round-3 blue no-underline section-link" href="javascript:;" data-target="about">
                                Learn More&nbsp;
                                <i class="icon-level-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- About donating -->
        <section id="section-about">
            <h1>
                <div>About Donating</div>
            </h1>
            <div class="wrap two-cols clearfix relative">
                <div class="callout">2</div>
                <div class="col-one">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac congue diam, 
                    eget gravida neque. Fusce sodales ultricies erat eu consequat. Curabitur id 
                    elit lectus. Mauris sed interdum ligula, non scelerisque sapien. Phasellus 
                    consectetur sapien nec convallis dapibus. Nulla fermentum metus ultrices 
                    magna euismod, vitae dignissim mauris mattis.
                </div>
                <div class="col-two">
                    Donec ullamcorper nec arcu eget vulputate. Nullam quis augue quis metus 
                    blandit tincidunt. Aliquam id hendrerit lectus. Maecenas sed semper ante. 
                    Vestibulum dapibus, turpis sed venenatis commodo, libero magna fermentum eros, 
                    commodo eleifend ipsum leo in mi.
                </div>
            </div>
        </section>

        <!-- Barnacle system -->
        <section id="section-barnacles">
            <h1>
                <div>Barnacle System</div>
            </h1>
            <div class="wrap two-cols clearfix">
                <div class="col-one">
                    <div class="question bold">What are Barnacles?</div>
                    <div class="answer relative">
                        <div class="callout">3</div>
                        <div class="callout right">4</div>
                        <img class="float-right caption-right" src="<?php echo $asset_path; ?>images/coin_placeholder.jpeg" />
                        <p>
                            We'd like to thank you for your generous donation with a "Barnacle" prize 
                            produced by our residents and stewdios - everything from patches, mini-paintings, 
                            zines, and mixtapes to seedlings and sound experiences. Just bring your Barnacles 
                            to the Silent Barn to pick out your prize. Some of our current options are 
                            displayed below.
                        </p>
                        <p>
                            Each barnacle prize is handmade, and therefore only available in limited 
                            quantities &mbdash; so act fast and donate now!
                        </p>
                    </div>
                </div>
                <div class="col-two relative">
                    <div class="callout right">5</div>
                    <table>
                        <thead>
                            <tr>
                                <th class="round-tl-4">Barnacles</th>
                                <th class="round-tr-4">Donation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="centered round-tl-4 round-bl-4">1</td>
                                <td class="centered round-tr-4 round-br-4">$10</td>
                            </tr>
                            <tr class="alt">
                                <td class="centered round-tl-4 round-bl-4">5</td>
                                <td class="centered round-tr-4 round-br-4">$50</td>
                            </tr>
                            <tr>
                                <td class="centered round-tl-4 round-bl-4">10</td>
                                <td class="centered round-tr-4 round-br-4">$100</td>
                            </tr>
                            <tr  class="alt">
                                <td class="centered round-tl-4 round-bl-4">20</td>
                                <td class="centered round-tr-4 round-br-4">$200</td>
                            </tr>
                            <tr>
                                <td class="centered round-tl-4 round-bl-4">50</td>
                                <td class="centered round-tr-4 round-br-4">$500</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="caption">
                        Idea: Barnacles could get cheaper if you buy in bulk
                    </div>
                </div>
            </divh>
        </section>

        <!-- Current prizes -->
        <section id="section-prizes">
            <h1>
                <div>Current Prizes</div>
            </h1>
            <div id="prizes" class="clearfix">
                <div class="prize">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/01_stewdio_triamonds.jpg" width="239" height="239" />
                    <div class="img-caption">
                        Triangle Instinct, <em>Triamonds</em>
                    </div>
                </div>
                <div class="prize">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/02_stewdio_seedlings.jpg" width="239" height="239" />
                    <div class="img-caption">
                        CSAA, <em>Seedlings</em>
                    </div>
                </div>
                <div class="prize">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/03_resident_noise_friends.jpg" width="239" height="239" />
                    <div class="img-caption">
                        Kunal Gupta, <em>Noise Friends</em>
                    </div>
                </div>
                <div class="prize no-pad">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/04_stewdio_mutant_animals.jpg" width="239" height="239" />
                    <div class="img-caption">
                        (Scientific) Abstract Art, <em>Mutant Animals</em>
                    </div>
                </div>
                <!-- End of Row 1 -->

                <div class="prize">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/05_stewdio_espresso.jpg" width="239" height="239" />
                    <div class="img-caption">
                        Trough, <em>Espresso</em>
                    </div>
                </div>
                <div class="prize">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/06_resident_tea_blends.jpg" width="239" height="239" />
                    <div class="img-caption">
                        Lani Combier-Kapel, <em>Tea Blends</em>
                    </div>
                </div>
                <div class="prize">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/07_stewdio_aftermath.jpg" width="239" height="239" />
                    <div class="img-caption">
                        Aftermath, <em>Screen printed poster</em>
                    </div>
                </div>
                <div class="prize no-pad">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/08_stewdio_deep_cuts.jpg" width="239" height="239" />
                    <div class="img-caption">
                        Deep Cuts, <em>Mixtape: The Fade vol.</em>
                    </div>
                </div>
                <!-- End of Row 2 -->

                <div class="prize">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/09_intern_dave_albert.jpg" width="239" height="239" />
                    <div class="img-caption">
                        Dave Albert, <em>Comic Book</em>
                    </div>
                </div>
                <div class="prize">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/10_paesthetics_beer.jpg" width="239" height="239" />
                    <div class="img-caption">
                        Paesthetics LLC, <em>Beer</em>
                    </div>
                </div>
                <div class="prize no-pad">
                    <div class="price round-bl-4">1 <i class="icon-circle"></i></div>
                    <img src="<?php echo $asset_path; ?>images/prizes/239/11_residents_folk_to_folk.jpg" width="239" height="239" />
                    <div class="img-caption">
                        Mashurova &amp; McFarland, <em>Folk to Folk Mini-zine</em>
                    </div>
                </div>
                <!-- End of Row 3 -->
            </div>
        </section>

        <!-- Final CTA -->
        <section>
            <div id="final-cta">
                <a class="button round-3 green no-underline paypal-donate" href="javascript:;">
                    <i class="icon-usd"></i>&nbsp;
                    Donate to The Barn!
                </a>
                <a class="button round-4 no-underline return-top" href="javascript:;">
                    Return to Top&nbsp;
                    <i class="icon-level-up"></i>
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="wrap clearfix">
                <div class="float-left">&copy;&nbsp;Silent Barn, LLP</div>
                <div class="float-right">Design by <a href="https://particlebits.com">ParticleBits</a>.</div>
            </div>
        </footer>

        <div style="display: none;">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="paypal-form">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="SVH6MCF9VG8P4">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>

        <!-- Initialize Trunk JS (see trunkjs.com/docs) -->
        <script>
            App.extend({
                rootPath: '<?php echo $config->path; ?>',
                jsPath: '<?php echo $asset_path; ?>js/',
                env: '<?php echo $config->js_environment; ?>',
                pages: [ 
                    'home.js' ],
                libraries: []
            });

            App.init( function() {
                HomePage.load();
            });
        </script>
    </body>
</html>
<?php
    
if ( $compile ):
    // get the compiled output
    //
    $output = ob_get_contents();
    ob_end_clean();
    
    // write it to index.html
    //
    if ( file_put_contents( 'index.html', $output ) !== FALSE ):
        echo "Contents written to index.html.\n";
    else:
        echo "Error compiling index file.\n";
    endif;
endif; 

?>