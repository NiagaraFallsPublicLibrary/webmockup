<?php
include '../header.html';
?>
<div class="centre" style="width:1204px; margin: auto;min-height: 75%;overflow: auto;"">
<?php
$ebooks = 'selected';
include 'sidebar.php';
?>
<div style="margin-left:236px">
    <h1 style="padding: 1em 1em 0em 1em;margin-bottom: 0px;">eBooks</h1>
    <p>These are the services that provide eBooks</p>
</div>

<?php
include 'cloudLibrary.html';
include 'hoopla.html';
?>
</div>
<?php
include '../footer.html';
?>