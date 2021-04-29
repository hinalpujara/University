<nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(12, 12, 12)">
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active pl-3">
                    <a class="nav-link" href="index.php" style="color: white; font-size:25px;" ;><b >Home</b> <span
                            class="sr-only">(current)</span></a>
                </li>
                <?php
          if(isset($_SESSION["first_name"]))
          {
            echo "<li class='nav-item pl-3'>
            <a class='nav-link' href='#' style='color: white; font-size:25px;' ;><b>Dashboard</b> <span
                        class='sr-only'></span></a>
            </li>
            <li class='nav-item pl-3'>
            <a class='nav-link' href='#' style='color: white; font-size:25px;' ;><b>Profile</b> <span
                        class='sr-only'></span></a>
            </li>
            <li class='nav-item pl-3'>
                <a class='nav-link' href='logout.php' style='color: white; font-size:25px;' ;><b>Logout</b> <span
                            class='sr-only'></span></a>
                </li>";
            
           
          }
          else
           {
            echo "
            
                <li class='nav-item pl-3'>
                <a class='nav-link' href='login.php' style='color: white; font-size:25px;' ;><b >Login</b> <span
                            class='sr-only'></span></a>
                </li>";
        }
          ?>
                
            </ul>
           
        </div>
    </nav>
    