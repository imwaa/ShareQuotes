<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active ml-4" href="<?php echo URLROOT; ?>"><i class="fas fa-quote-right"></i> Quotes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo URLROOT; ?>/posts/myposts"><i class="fas fa-feather-alt"></i></i> My Quotes</a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item active">
                        <a class="nav-link">Hi, <?php echo $_SESSION['user_name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>