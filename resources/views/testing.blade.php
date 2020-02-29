@extends('main')
@section('content')


<div id="mycount"></div>
@endsection

@section('script')
	<script>
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});


		$(document).ready(function(){
			getCount();
			function getCount() {

			    $.ajax({
			      type: "GET",
			      url: "{{ route('testing.index') }}"
			    })
			    .done(function( data ) {
			     
			     setInterval(function(){
				$('#mycount').reload(data);
					},3000)

		
			    });
			}


			
		})
	</script>
@endsection