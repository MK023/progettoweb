<h1 class="header__icon"> NON-VERBAL COMMUNICATION </h1>

    <header class="header clearfix">
        <img src="immagini_sito/logo.png" alt="logo" class="header__logo">

        <ul class="header__menu">
            <li class="header__menu__item"><a href="Homepage.php">HOMEPAGE</a></li>
            <li class="header__menu__item"><a href="Gallery.php">GALLERY</a></li>
            <li class="header__menu__item"><a href="Training.php">TRAINING</a></li>
        </ul>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

        <div id="id01" class="modal">

            <?php include('signup.php'); ?>

        </div>

        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>
        <div id="id02" class="modal">

            <?php include('login.php'); ?>

        </div>
    </header>

