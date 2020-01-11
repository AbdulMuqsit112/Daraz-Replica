<nav class="navbar navbar-expand-sm py-0 navbar-light " style="background-color:#F0F0F0;" id="navbar">
                
                 <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link py-0" href="#">SAVE MORE <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active py-0 ">
                      <a class="nav-link py-0" href="#">SELL ON DARAZ</a>
                    </li>
                    <li class="nav-item active py-0">
                      <a class="nav-link py-0" href="#">CUSTOMER CARE</a>
                    </li>
                    <li class="nav-item active py-0">
                            <a class="nav-link py-0" href="#">TRACK MY ORDER</a>
                          </li>
                          <?php if (!empty($_SESSION['name'])) { ?>
                              <li class="nav-item active py-0">
                                <a class="nav-link py-0" href="#"><?php echo $_SESSION['name'];?></a>
                              </li>      
                              <li class="nav-item active py-0">
                                    <a class="nav-link py-0" href="home.php" onclick="<?php $_SESSION['name']=null; sleep(1);?>">Log out</a>
                                  </li>
                                  <?php } else { ?>
                                  <li class="nav-item active py-0">
                                <a class="nav-link py-0" href="login.php">LOGIN</a>
                              </li>      
                              <li class="nav-item active py-0">
                                    <a class="nav-link py-0" href="signup.php">SIGNUP</a>
                                  </li>    
                                  <?php } ?>
                     </ul>
                </div>
              </nav>
