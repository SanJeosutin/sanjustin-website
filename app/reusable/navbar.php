<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="index.php">San Justin</a>
    <!--Burger Menu START-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--Burger Menu END-->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navDropMenuProjects" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projects
                </a>
                <div class="dropdown-menu" aria-labelledby="navDropMenuProjects">
                    <a class="dropdown-item" href="project.php?renderPage=pastProject">Past Projects</a>
                    <a class="dropdown-item" href="project.php?renderPage=currentProject">Current Projects</a>
                    <a class="dropdown-item" href="project.php?renderPage=unfinisedProject">Unfinished Projects</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navDropMenuDesigns" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Galleries
                </a>
                <div class="dropdown-menu" aria-labelledby="navDropMenuDesigns">
                    <form action="gallery.php" method="POST">
                        <a class="dropdown-item" href="gallery.php?renderPage=photography" name="photography">Photography</a>
                        <a class="dropdown-item" href="gallery.php?renderPage=designs" name="designs">Designs</a>
                        <a class="dropdown-item" href="gallery.php?renderPage=coolStuff" name="coolStuff">Something Cool</a>
                    </form>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
            </div>
        </ul>
    </div>
</nav>
<!--Navbar END-->
<br>