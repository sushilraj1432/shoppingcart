
<style type="text/css">
    
    #sam{ color:#fff; width:180p; }
    #sam1{ margin-left:0px; }
</style>

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="main.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> ORDERAPRONS
            </h3>
        </a>

             <a href="index.php"class="navbar-brand">
            <h6 class="px-5">
                <i class></i>
            </h6>
</a>
         <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a  href="index.php" class="nav-link  bg-dark" id="sam"> APRONS SHOPPIGN</a>
    </li>
    <li class="nav-item">
      <a href="#menu1" class="nav-link bg-dark" id="sam" >WOMANS APRONS</a>
    </li>
    <li class="nav-item">
      <a href="#menu2" class="nav-link bg-dark" id="sam">CHAID APRONS</a>
    </li>
  </ul>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
                                                >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php
                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning\">0</span>";
                        }
                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>
