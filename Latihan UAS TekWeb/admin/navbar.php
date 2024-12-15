<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="dashboard.php">WELCOME! <?= $_SESSION['username']?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-secondary" aria-current="page" href="dashboard.php">Data Resi Pengiriman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-secondary" aria-current="page" href="user-settings.php">User Admin</a>
                </li>
            </ul>
            <form class="d-flex" role="search" action="../function/logout.php" method="POST">
                <button class="btn btn-outline-success" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>