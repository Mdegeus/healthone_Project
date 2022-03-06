<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            Sportcenter
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/home">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">sportapparaat</a>
                </li>
                <?php if (isset($_SESSION['user']) && $_SESSION['user']->id == 1): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">admin page</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="../contact">contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <?php if (isset($_SESSION['user'])): ?>
                        <label for="logoutButton"><?= $_SESSION['user']->username; ?></label>
                        <a id=logoutButton type="button" class="btn btn-primary block-btn" href="/logout">log uit</a>
                    <?php else: ?>
                        <button type="button" class="btn btn-primary block-btn review-form-show-btn" data-bs-toggle="modal" data-bs-target="#loginModal">inloggen</button>
                        <button type="button" class="btn btn-primary block-btn review-form-show-btn" data-bs-toggle="modal" data-bs-target="#registerModal">register</button>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>