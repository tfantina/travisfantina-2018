<!DOCTYPE html>
  <html <?php language_attributes(); ?>
    <head>
      <meta charset="<?php echo get_bloginfo('charset')?>" />
      <meta name="description" content="<?php echo get_bloginfo('description')?>" />
      <link href="<?php echo get_bloginfo('stylesheet_url')?>" rel="stylesheet"/>
      <link href="<?php echo get_bloginfo('stylesheet_directory')?>/home-style.css" rel="stylesheet"/>
      <script src="https://use.fontawesome.com/cf98cc2618.js"></script>



    </head>
    <body class=<?php body_class(); ?>>

        <div class="welcome-headder">
            <img src="/images/header-text.png" />
          </div>

              <div class="home-container">
              <a href="/projects/">
                <div class="card"><img src="/images/icons/work.png"/>
                  Projects
                </div>
              </a>
                <div class="card"><img src="/images/icons/about.png"/>
                  About
                </div>
                <a href="index.php/sample-page/"><div class="card"><img src="/images/icons/book.png"/>
                  Blog
                </div></a>
                <div class="card"><img src="/images/icons/phone.png"/>
                  Contact
                </div>
                <div class="card"><img src="/images/icons/camera.png"/>
                  Photos
                </div>
              <a href="https://github.com/tfantina">
                <div class="card"><img src="/images/icons/octocat.png"/>
                  GitHub
                </div>
              </a>
              </div>

    </body>
  </html>
