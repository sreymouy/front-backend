<!DOCTYPE html>
<html lang="en">
@include("Includes.head")

<body>
	<!--header-->
	@include("Includes.header")
	@yield("content")
	@include("Includes.footer")

</body>
</html>