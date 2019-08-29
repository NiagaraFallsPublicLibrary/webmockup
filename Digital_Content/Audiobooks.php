<?php
include '../header.html';
?>
<div class="centre" style="width:1204px; margin: auto;min-height: 75%;overflow: auto;"">
<?php
$audio = 'selected';
include 'sidebar.php';
?>
<div style="margin-left:236px">
    <h1 style="padding: 1em 1em 0em 1em;margin-bottom: 0px;">Audiobooks</h1>
    <p>These are the services that provide audiobooks</p>
</div>

<?php
include 'hoopla.html';
include 'cloudLibrary.html';
?>
</div>
<?php
include '../footer.html';
?>