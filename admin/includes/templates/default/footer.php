</div>
</div><!--.container-->
<? if ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') { ?>

<? if (!$this->is_bare()) { ?>
<div id="footer">
    Website by <a href="http://stuartolivera.com" target="_blank">Stuart Olivera</a> &nbsp;&nbsp; Optimized for <a href="http://www.google.com/chrome" target="_blank">Google Chrome</a>
</div><!--#footer-->
<? } ?>

<div class="modal fade" id="globalModal">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>

        <h3>Modal header</h3>
    </div>

	<div class="modal-error">
        <? $alert = new bootstrap_alert('Error', '[error details]', 'error', '', array('href' => "javascript:modal_handler('error', 'reset', '#globalModal')"));
        echo $alert->display(); ?>
	</div>

    <div class="modal-body">
        <p>One fine body…</p>
    </div>

    <div class="modal-footer">
        <a class="btn modal-close" data-dismiss="modal">Close</a> <a class="btn btn-primary modal-save">Save changes</a>
    </div>
</div>

<div class="modal fade" id="errorModal">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>

        <h4>Error</h4>
    </div>

	<div class="modal-error">
        <? $alert = new bootstrap_alert('Error', '[error details]', 'error', '', array('href' => "javascript:modal_handler('error', 'reset', '#errorModal')"));
        echo $alert->display(); ?>
	</div>

    <div class="modal-body">
        <p>[error details]</p>
    </div>

    <div class="modal-footer">
        <a class="btn modal-close" data-dismiss="modal">Close</a> <a class="btn btn-primary modal-save">Save changes</a>
    </div>
</div>

<div id="loader-holder">
    <i class="loader"></i>
</div>

<!-- Javascript goodies! -->

<?php

if (in_array($site->current_env(), array('LIVE', 'STAGE'))) {
	$testingMin = '.min';
} else {$testingMin = '';}

$testingMin = '';

?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
if (typeof jQuery == 'undefined')
{
    document.write(unescape("%3Cscript src='<? echo ADMIN_URL_PATH; ?>resources/js/jquery-1.8.3.min.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<script type="text/javascript" src="<? echo ADMIN_URL_PATH; ?>resources/js/jquery-ui-1.10.0.custom/js/jquery-ui-1.10.0.custom.min.js"></script>
<script type="text/javascript" src="<? echo ADMIN_URL_PATH; ?>resources/bootstrap-2.2.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<? echo ADMIN_URL_PATH; ?>resources/tinymce-3.5.8/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="<? echo ADMIN_URL_PATH; ?>resources/js/global.min.js"></script>

<? } /* if ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') */ ?>
</body>
</html>
