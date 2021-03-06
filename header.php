<nav class="navbar navbar-default headNav">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Termin</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
        <ul class="nav navbar-nav navbar-right container-full topMenu">
          <li><a href="addTermin.php">Termin əlavə et <span class="sr-only">(current)</span></a></li>
          <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
          <li><a href="#" data-toggle="modal" data-target="#loginModal" id="signupli">Qeydiyyat</a></li>
          <li class="dropdown disable">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Yasin Elisli <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="profile.php">Profil</a></li>
              <li><a href="#">Çıxış</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left disable" role="search" action="search.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default topSearchIco"><span class="glyphicon glyphicon-search"></span></button>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
