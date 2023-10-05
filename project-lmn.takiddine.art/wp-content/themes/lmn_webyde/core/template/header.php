

<?php $home_url = home_url(); ?>


<header class="header">
    <div class="container-fluid-2">
        <nav class="navbar navbar-expand-lg navbar-light">                
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse col-md-auto justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $home_url; ?>"> ACCUEIL </a>
                    </li>
                    <li class="nav-item"> <span class="tachrit"></span> </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo $home_url; ?>/les-artistes/"> ARTISTES </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <img src="<?php echo $images; ?>/logo.svg" class="main-logo" alt="lmn-logo">
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo $home_url; ?>/label/"> LABEL </a>
                    </li>
                    <li class="nav-item"> <span class="tachrit"></span> </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo $home_url; ?>/contact/"> CONTACT </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>