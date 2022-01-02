<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        
        <title>Auto Update Copyright Year in a Website Dynamically (2022)</title>
    </head>
    <body>
        <div class="footer-dark">
            <footer>
                <div class="fcontainer">
                    <div class="row">
                        <div class="column left">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Categorie 1</a></li>
                                <li><a href="#">Categorie 2</a></li>
                                <li><a href="#">Categorie 3</a></li>
                            </ul>
                        </div>
                        <div class="column middle">
                            <h3>Information</h3>
                            <ul>
                                <li><a href="#">Info 1</a></li>
                                <li><a href="#">Info 2</a></li>
                                <li><a href="#">Info 3</a></li>
                            </ul>
                        </div>
                        <div class="column right">
                            <h3>Company Name</h3>
                            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                        </div>
                        <div class="col item social">
                          <!-- <a target="_blank" href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a> -->
                          <!-- <a href="#"><i class="icon ion-social-twitter"></i></a> -->
                          <!-- <a href="#"><i class="icon ion-social-snapchat"></i></a> -->
                          <a target="_blank" href="https://www.instagram.com/denishotiii/"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <?php
                        $started_year = 2021;
                        $year_now = date('Y');
                    if($started_year == $year_now){
                    ?>
                    <p class="copyright" id="copyright"><?php echo "Your Comp. © ".$started_year ?></p>
                    <?php 
                    }else{
                    ?>
                    <p class="copyright" id="copyright"><?php echo "Your Comp. © ".$started_year."-".$year_now ?></p>
                    <?php
                    }
                    ?>
                </div>
            </footer>
          </div>
    </body>
</html>