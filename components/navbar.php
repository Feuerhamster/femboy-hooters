<div class="navbar">

    <h1 onclick="window.location.href = '<?= ViewRouter::getFullBasePath() ?>'">Femboy Hooters</h1>

    <span class="spacer"></span>

    <nav>
        <a href="<?= ViewRouter::getFullBasePath() ?>"
           class="<?= ViewRouter::getCurrentPath() == '' ? 'active' : '' ?>">
            Home
        </a>
        <a href="about"
           class="<?= ViewRouter::getCurrentPath() == 'about' ? 'active' : '' ?>">
            About
        </a>
        <a href="femboys"
           class="<?= ViewRouter::getCurrentPath() == 'femboys' ? 'active' : '' ?>">
            Femboys
        </a>
        <a href="ressources"
           class="<?= ViewRouter::getCurrentPath() == 'ressources' ? 'active' : '' ?>">
            Ressources
        </a>
    </nav>

    <div>
        <a id="toggle-nav">Navigation</a>
    </div>


</div>