
   <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">Main</a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if($page!="aboutDSBA"){echo "active";} ?>">
            <a class="nav-link" href="about.php">
            About DSBA</a>
          </li>
          <li class="nav-item <?php if($page!="login"){echo "active";} ?>">
            <a class="nav-link" href="login.php">Log in</a>
          </li>
        </ul>
    </nav>