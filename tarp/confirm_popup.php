<html>

<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
		<p>Are you sure you want to delete this element?</p>
		<ul class="cd-buttons">
			<li><a href="#0">Yes</a></li>
			<li><a href="#0">No</a></li>
		</ul>
		<a href="#0" class="cd-popup-close img-replace">Close</a>
	</div> <!-- cd-popup-container -->
</div>


<style type="text/css">
	
.cd-popup {
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
}
 
.cd-popup.is-visible {
  opacity: 1;
  visibility: visible;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}
 
.cd-popup-container {
  transform: translateY(-40px);
  transition-property: transform;
  transition-duration: 0.3s;
}
 
.is-visible .cd-popup-container {
  transform: translateY(0);
}

</style>

</html>