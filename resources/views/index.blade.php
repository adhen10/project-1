<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body>
	<div class="main-wrapper">

		@include('layout.sidebar')
		<!-- partial -->
	
		<div class="page-wrapper">
					
			@include('layout.navbar')

			<div class="page-content">

				@yield('content')

			</div>

			@include('layout.footer')
		
		</div>
	</div>

	@include('layout.script')

</body>
</html>    