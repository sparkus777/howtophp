<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex">
            <div class="d-flex">
                <a href="index.php?message=from_home" class="navbar-brand d-flex">
                    <strong>Home</strong>
                </a>
                <a href="new_post.php" class="navbar-brand d-flex">
                    <strong>Create</strong>
                </a>
            </div>
            <div class="d-flex">
                <?php
                require $_SERVER['DOCUMENT_ROOT'] . '/task4/functions/auth.php';
                if (!isUserAuthorized()) { ?>
                <a href="login.php" class="navbar-brand d-flex">
                    <strong>Login</strong>
                </a>
                <a href="registration.php" class="navbar-brand d-flex">
                    <strong>Registration</strong>
                </a>
                <?php } else { ?>
                    <a href="#" class="navbar-brand d-flex">
                        <strong>Hello, <?= getUsernameByIdFromCookie() ?></strong>
                    </a>
                    <form action="api/logoff.php">
                        <button href="#"  type="submit">
                            LOG OFF
                        </button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</header>