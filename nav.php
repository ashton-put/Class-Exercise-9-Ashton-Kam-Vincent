<nav>
    <a  class="<?php
    if($pathParts['filename'] == 'index') {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>

<a  class="<?php
    if($pathParts['filename'] == 'index') {
        print 'activePage';
    }
    ?>" href="protected/index.php">Login</a>
</nav>