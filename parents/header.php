<div id="main">
    

	<!-- top bar navigation -->
	<div class="headerbar">


		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.html" class="logo">CHILD VACCINATION</a>

        </div>


        <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0"><li class="list-inline-item dropdown notif">

            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              Parent :  <?php echo $_SESSION['uname'];?>  <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="text-overflow"><small>Hello, <?php echo $_SESSION['uname'];?></small> </h5>
                </div>

                <!-- item-->
                

                <!-- item-->
			      <a href="change_password.php" class="dropdown-item notify-item">
                    <i class="fa fa-power-off"></i> <span>Change Password</span>
                </a>
                <a href="../logout.php" class="dropdown-item notify-item">
                    <i class="fa fa-power-off"></i> <span>Logout</span>
                </a>

			    
            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>
                    
      </nav>
<marquee width="80%" direction="left" behaviour="alternate" scrollamont="20">SAVE CHILD<i class="fa fa-fw fa-child"></i></marquee>                   


	</div>