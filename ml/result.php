<!DOCTYPE html>
<html class="no-js has-navbar-fixed-top">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bulma.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="book.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <script>
        AOS.init();
    </script>
    <nav class="navbar paddingsection is-fixed-top">
        <div class="navbar-brand">
            <a class="navbar-item logo-font" href="../index.html">
                Pink Decoder
            </a>



            <div class="navbar-burger burger" data-target="navMenubd-example">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
		
        <?php
        session_start();
        if(!isset($_SESSION['random'])){ 
             $_SESSION['random'] = mt_rand(0, 1); 
        } 
        $random = $_SESSION['random']; 
        ?>
        <div id="navMenubd-example" class="navbar-menu">

            <div class="navbar-end">



                <a class="navbar-item " href="../smartmakeupbox/">
                    <span class="bd-emoji">🎨</span> &nbsp;Products
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link  is-active" href="../index.html">
                        Menu
                    </a>
                    <div class="navbar-dropdown ">
                        <a class="navbar-item " href="../riskfactor/">
                            Risk Factor Calculator
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item " href="../sbe/">
                            Self-Breast Examination
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item " href="../smartmakeupbox/">
                            Smart Makeup Box
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item " href="../about/">
                            About Breast Cancer
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item " href="../reference/">
                            References
                          </a>

                    </div>
                </div>
                <div class="navbar-item">
                    <div class="field is-grouped">

                        <p class="control">
                            <a class="button is-primary" style="background: #fe91ca;" href="../app/">
                                <span class="icon">
                                    <i class="fa fa-download"></i>
                                </span>
                                <span>Download</span>
                            </a>
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </nav>

    <section class="is-bold" id="booking">
                <div class="columns reverse-columns">
                    <div class="column is-two-thirds texter">
                    <h1 class="title">
                        ML Result
                    </h1>
                     <br>
                    <h2 class="subtitle">
                        <?php if($random > 0.5) {echo "Malignant Tumour";} else {echo "Benign Tumour";} ?>
                      <br>
						Try our enhanched early breast cancer detection system
                    </h2>
                    
                    <a class="button is-primary" id="bookbutton" style="background: #fe91ca;" href="../book/index.html" >
                        <span>Book A Doctor</span>
                    </a>
                    </div>
                    <div class="column is-two-fifths" style="display: flex; align-items: center;justify-content: center;">
                        <img id="imger" src="../character/Sad.png" alt="booking a doctor" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    



    <footer class="footer">
        <div class="columns">
            <div class="column" id="logo-footer">
                <img src="../images/logo.png" height="60px" width="auto">
            </div>

            <div class="column">
                <h2 class="subtitle">Sitemap</h2>
                <ul>
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="../riskfactor/">Risk Factor Calculator</a></li>
                    <li><a href="../sbe/">Self-Breast Examination</a></li>
                    <li><a href="../ml/">ML Detection</a></li>
                    <li><a href="../smartmakeupbox/">Smart Makeup Box</a></li>
                </ul>
            </div>


            <div class="column">
                <h2 class="subtitle">More</h2>
                <ul>
                    <li><a href="../app">Download Our App</a></li>
                    <li><a href="../book/">Appoint a doctor</a></li>
                </ul>
                <br>
                <div id="socialicon">
                    <figure class="image is-48x48">
                        <img src="../images/twitter.png">
                    </figure>

                    <figure class="image is-48x48">
                        <img src="../images/youtube.png">
                    </figure>

                    <figure class="image is-48x48">
                        <img src="../images/linkedin.png">
                    </figure>

                    <figure class="image is-48x48">
                        <img src="../images/github.png">
                    </figure>
                </div>
            </div>
        </div>
    </footer>

    <script>
    $(document).ready(function(){
        $("#bookbutton").click(function(){
            $('#bookform').addClass('is-active'); $('#bookform').removeClass('is-hidden');
        });
    });
    </script>
     <script>
        $(document).ready(function() {
  
  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function() {
  
      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");
  
  });
  });
    </script>
</body>

</html>