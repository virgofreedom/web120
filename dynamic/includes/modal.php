<!-- Triggers the modals -->
<a href="#" data-reveal-id="firstModal" class="radius button">Contact me</a>

<!-- Reveal Modals begin -->
<div id="firstModal" class="reveal-modal contact" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
  <h2 id="firstModalTitle" class="title">Please leave me the message here.</h2>
  <?php
  	include 'contact.php';
  ?>

  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- Reveal Modals end -->