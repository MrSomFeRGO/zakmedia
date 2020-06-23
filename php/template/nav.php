<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
      <a href="#" class="navbar-brand waves-effect">
        <strong class="blue-text">Zak Media</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">

          <!-- First nav-->
          <li <?php 
            if ((stripos($_SERVER['REQUEST_URI'],index)!=FALSE)or($_SERVER['REQUEST_URI']=='/')) {
              echo 'class="nav-item active"';
            }else {
              echo 'class="nav-item"';
            }
          ?>>
            <a href="index.php" class="nav-link waves-effect">Главная</a>
          </li>

          <!-- Second nav-->
          <li <?php 
            if (stripos($_SERVER['REQUEST_URI'],records)!=FALSE) {
              echo 'class="nav-item active"';
            }else {
              echo 'class="nav-item"';
            }
          ?>>
            <a href="records.php" class="nav-link waves-effect">Все записи</a>
          </li>

          <!-- Thrid nav-->
          <li <?php 
            if (stripos($_SERVER['REQUEST_URI'],about)!=FALSE) {
              echo 'class="nav-item active"';
            }else {
              echo 'class="nav-item"';
            }
          ?>>
            <a href="about.php" class="nav-link waves-effect">О нас</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>