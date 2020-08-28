<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="web.php">Bowlingcentrum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="Web.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="res.php">reserveren</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mijnres.php">Mijn reservering</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="over.php">over ons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menu.php">Ons menu</a>
            </li>

            
              
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="wachtwoord.php">wachtwoord wijzigen</a>
                    <a class="dropdown-item" href="informatie.php">informatie</a>
                    
                </div>
            </li>
    
            <form class="form-inline" action="info11.php" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="zoek op aantal uren" name="Zoek" autocomplete="off" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" name="Search" type="submit">Zoek</button>
            </form>
        </ul>
    </div>
    <form method="post" action="uitlogverwerk.php">
       <a href="uitlogverwerk.php"> uitloggen</a>
    </form>
</nav>

  