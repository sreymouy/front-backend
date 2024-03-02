<!DOCTYPE html>
<html lang="en">
@include("Includes.head")

<body>
	<!--header-->
	@include("Includes.header")
	<!--slider deleted script slideshow-->
	
	<section>
		<div class="container">
			<div class="row">
				<!--sidebar-->
				@include("Includes.sidebar")
				<!--Home(layout)-->
				<!--here we not include-->
				@yield("content")<!--ដាក់អីក៏បាន-->
			</div>
		</div>
	</section>
	<!--Footer-->
	<!--java script-->
	<!--noted here we cut both is footer and java script move input just a file is name footer.blade.php-->
	@include("Includes.footer")

</body>
</html>