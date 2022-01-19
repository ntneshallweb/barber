@extends('front.layouts.header')

@section('title')
            Contact
@endsection()

@section('content')
		<section class="page-banner-section menu">
			<div class="container">
				<h1>Contact Us</h1>
			</div>
		</section>
	<!-- contact-section 
			================================================== -->
		<section class="contact-section">
			<div class="container">
				<div class="title-section white-style">
					<h1>Contact with Us</h1>
				</div>
				<form id="contact-form" action="{{url('/admin/contact/store')}}" method="POST">
					@csrf
					<div class="row">
						<div class="col-sm-6">
							<input name="name" id="name" type="text" required placeholder="Name*">
						</div>
						<div class="col-sm-6">
							<input name="mail" id="mail" type="text" required placeholder="Email*">
						</div>
						<div class="col-sm-6">
							<input name="subject" id="subject" type="text" required placeholder="Subject">
						</div>
						<div class="col-sm-6">
							<input name="website" id="website" type="text" required placeholder="Website">
						</div>
					</div>							
					<textarea name="message" id="message" required placeholder="Message*"></textarea>
					<div class="center-area">
						<input type="submit" id="submit_contact" value="Send Message">
					</div>
					<div id="msg" style="color:green" class="message alert">
					
					</div>
				</form>
				<div class="contact-info">
					<div class="row">
						<div class="col-md-4">
							<div class="info-box">
								<span aria-hidden="true" class="icon_pin_alt"></span>
								<h2>Our Location</h2>
								<p>#125, Kuber Siddhi-2 <br> Atak Pardi, Valsad 396007 </p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="info-box">
								<span aria-hidden="true" class="icon_mobile"></span>
								<h2>Our Phones</h2>
								<p>+916354425147 </p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="info-box">
								<span aria-hidden="true" class="icon_mail_alt"></span>
								<h2>Our Mail</h2>
								<p>info@neshallweb.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    @endsection()
@section('insta')
            
	<ul>
	    @foreach ($Restroyinstagrams as $Restroyinstagram)
	        <li>
	            <img src="{{ ($Restroyinstagram->image) ? URL::to('/public/uploads/'.$Restroyinstagram->image ) : '' }}" alt="">
	            <div class="hover-box">
	                <a href="#">
	                    <i aria-hidden="true" class="fa fa-heart-o"></i><span class="numb-like">144</span>
	                    <span class="numb-comm">21</span><i aria-hidden="true" class="fa fa-comment-o"></i>
	                </a>
	            </div>
	        </li>
	    @endforeach
	</ul>
@endsection()
@section('script')
 	<script type="text/javascript">
	 	$(function () {

	        $(document).ready(function() {
				$("#submit_contact").click(function(e){
		 		 	$.ajaxSetup({
				        headers: {
				            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        }
				    });
				    e.preventDefault();
				    var name = $("#name").val();
				    var email = $("#mail").val();
				    var subjects = $("#subject").val();
				    var website = $("#website").val();
				    var message = $("#message").val();
				    $.ajax({
						type:'POST',
						url:"{{url('/admin/contact/ajaxstore')}}",
						data:{name:name, email:email, subjects:subjects, website:website, message:message},
						success:function(data){
							$("#msg").html(data);
							setTimeout(function() {
							    
							    location.reload();
							  }, 5000);
							
						}
				    });
				});
			});
		});
	</script>
@endsection()