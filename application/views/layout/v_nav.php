<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">INFO COVID-19</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <!--<li class="nav-item active"><a href="#" class="nav-link">Application</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Report Something</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li>-->
          </ul>
        </div>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?=base_url()?>" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a>
            </li>

            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-cube"></i><span>API</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="https://api.kawalcorona.com" target="_blank" class="nav-link"><i class="fa fa-cube"></i> Kawal Corona</a></li>
                <li class="nav-item"><a href="https://covid19.mathdro.id/api" target="_blank" class="nav-link"><i class="fa fa-cube"></i> Mathdroid</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="https://www.vidokun.com" target="_blank" class="nav-link"><i class="fa fa-user"></i><span>Tentang</span></a>
            </li>

          </ul>
        </div>
      </nav>