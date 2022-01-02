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
                    <a class="dropdown-item" href="project.php?RenderPage=pastproject">Past Projects</a>
                    <a class="dropdown-item" href="project.php?RenderPage=currentproject">Current Projects</a>
                    <a class="dropdown-item" href="project.php?RenderPage=unfinishedproject">Unfinished Projects</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="ambition.php">Ambitions</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navDropMenuDesigns" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Galleries
                </a>
                <div class="dropdown-menu" aria-labelledby="navDropMenuDesigns">
                    <a class="dropdown-item" href="gallery.php?RenderPage=photography">Photography</a>
                    <a class="dropdown-item" href="gallery.php?RenderPage=designs">Designs</a>
                    <a class="dropdown-item" href="gallery.php?RenderPage=coolstuff">Something Cool</a>
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