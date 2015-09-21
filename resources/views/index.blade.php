<link rel="stylesheet" type="text/css" href="/css/zoomwall.css" />
<script type="text/javascript" src="/js/zoomwall.js"></script>
<script type="text/javascript">
window.onload = function() {
    zoomwall.create(document.getElementById('gallery'));
};
</script>

<div id="gallery" class="zoomwall">
@foreach($tweets as $image)
	<img src="<?php echo $image; ?>" data-highres="" />
@endforeach
</div>
