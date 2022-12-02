
<ul class="nav flex-column pt-3 pt-md-0">
  <li class="nav-item">
    <a href="<?= $_SESSION['role'] == 'admin' ? '../../admin/dashboard' : '../../user/dashboard' ?>" class="nav-link d-flex align-items-center justify-content-center">
      <span class="sidebar-icon">
        <img src="../../assets/img/logo.png" height="140">
      </span>
    </a>
  </li>
  <li class="nav-item  active ">
    <a href="<?= $_SESSION['role'] == 'admin' ? '../../admin/dashboard' : '../../user/dashboard' ?>" class="nav-link">
      <span class="sidebar-icon">
        <i class="fa-solid fa-gauge-high"></i>
      </span> 
      <span class="sidebar-text">Dashboard</span>
    </a>
  </li>
  <?php if($_SESSION['role'] == 'admin'): ?>
  <li class="nav-item">
    <a href="../../admin/book" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-book"></i></span>
        <span class="sidebar-text">Daftar Buku</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../admin/category" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-list"></i></span>
        <span class="sidebar-text">Daftar Kategori</span>
      </span>
    </a>
  </li>
  <?php else: ?>
    <li class="nav-item">
    <a href="../../user/bookmark" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-bookmark"></i></span>
        <span class="sidebar-text">Bookmark</span>
      </span>
    </a>
  </li>
  <?php endif ?>
  
</ul>