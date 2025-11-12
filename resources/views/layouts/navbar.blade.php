<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aplikasi Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="home">Home</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('produk') ? 'active' : '' }}" href="produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('kategori') ? 'active' : '' }}" href="kategori">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('transaksi') ? 'active' : '' }}" href="transaksi">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('laporan') ? 'active' : '' }}" href="laporan">Laporan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>