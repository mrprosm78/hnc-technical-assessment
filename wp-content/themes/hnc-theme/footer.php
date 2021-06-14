
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>

function changeclass1(element) {
	var element = document.getElementById("subscriptions");
  element.classList.remove("btn-outline-primary");
var element = document.getElementById("subscriptions");
  element.classList.add("btn-primary");
  
  var element = document.getElementById("one-off-pass");
  element.classList.remove("btn-primary");
var element = document.getElementById("one-off-pass");
element.classList.add("btn-outline-primary");

var element = document.getElementById("subscriptions-card");
element.style.display = "block";
var element = document.getElementById("one-off-pass-card");
element.style.display = "none";
  

}
function changeclass2(element) {
	var element = document.getElementById("one-off-pass");
  element.classList.remove("btn-outline-primary");
var element = document.getElementById("one-off-pass");
  element.classList.add("btn-primary");

  var element = document.getElementById("subscriptions");
    element.classList.remove("btn-primary");
var element = document.getElementById("subscriptions"); 
element.classList.add("btn-outline-primary");

var element = document.getElementById("subscriptions-card");
element.style.display = "none";
var element = document.getElementById("one-off-pass-card");
element.style.display = "block";
  
}
</script>
</body>
</html>
