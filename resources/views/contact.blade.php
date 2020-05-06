@extends('layouts.mainmaster')
@section('content')

        <!-- Start Contact Area -->
        <section class="wn_contact_area bg--white pt--80 pb--80">
			{{-- <div class="google__map pb--80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div id="googleMap"></div>
						</div>
					</div>
				</div>
        	</div> --}}
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-12">
                        {{-- @if (\Session::has('success'))
                        <div>
                            <p>{{ \Session::get('success')}}</p>
                        </div>
                        @endif --}}
        				<div class="contact-form-wrap">
        					<h2 class="contact__title">ارتباط با ما</h2>
        					<p>شما میتوانید با پر کردن فرم زیر با ما ارتباط برقرار کنید.</p>
                            <form id="contact-form" action="{{'/checkCommentsData'}}" method="post">
                                {{ csrf_field() }}
                                <div class="single-contact-form space-between">
                                    <input type="text" name="firstname" placeholder="نام*">
                                    {{-- @if ($errors->has('firstname'))
                                    <div class="text-danger">
                                        {{$errors->first('firstname') }}
                                    </div>
                                    @endif --}}
                                    <input type="text" name="lastname" placeholder="نام خانوادگی*">
                                    {{-- @if ($errors->has('lastname'))
                                    <div class="text-danger">
                                        {{$errors->first('lastname') }}
                                    </div>
                                    @endif --}}
                                </div>
                                <div class="single-contact-form space-between">
                                    <input type="email" name="email" placeholder="ایمیل*">
                                    {{-- @if ($errors->has('email'))
                                    <div class="text-danger">
                                        {{$errors->first('email') }}
                                    </div>
                                    @endif --}}
                                    <input type="number" name="phonenumber" placeholder="شماره تلفن">
                                    {{-- @if ($errors->has('phonenumber'))
                                    <div class="text-danger">
                                        {{$errors->first('phonenumber') }}
                                    </div>
                                    @endif --}}
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="subject" placeholder="موضوع*">
                                    {{-- @if ($errors->has('subject'))
                                    <div class="text-danger">
                                        {{$errors->first('subject') }}
                                    </div>
                                    @endif --}}
                                </div>
                                <div class="single-contact-form message">
                                    <textarea name="message" placeholder="متن پیام خود را اینجا بنویسید..."></textarea>
                                    {{-- @if ($errors->has('message'))
                                    <div class="text-danger">
                                        {{$errors->first('message') }}
                                    </div>
                                    @endif --}}
                                </div>
                                <div class="contact-btn">
                                    <button type="submit">ارسال پیام</button>
                                    {{-- <input type="submit" value="ارسال پیام"> --}}
                                </div>
                            </form>
                        </div>
                        <div class="form-output">
                            <p class="form-messege">
                        </div>
        			</div>
        			<div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__address">
        					<h2 class="contact__title">اطلاعات دفتر مرکزی</h2>
        					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
        					<div class="wn__addres__wreapper">

        						<div class="single__address">
        							<i class="icon-location-pin icons"></i>
        							<div class="content">
        								<span>نشانی:</span>
        								<p>خیابان کریم خان زند، نرسیده به میدان هفتم تیر، خردمند جنوبی، پلاک ۶۲</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-phone icons"></i>
        							<div class="content">
        								<span>شماره تماس:</span>
        								<p>716-298-1822</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-envelope icons"></i>
        							<div class="content">
        								<span>آدرس ایمیل:</span>
        								<p>716-298-1822</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-globe icons"></i>
        							<div class="content">
        								<span>آدرس وب سایت:</span>
        								<p>716-298-1822</p>
        							</div>
        						</div>

        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Contact Area -->
@endsection
	    {{-- <!-- Google Map js -->
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
	    <script>
	        // When the window has finished loading create our google map below
	        google.maps.event.addDomListener(window, 'load', init);

	        function init() {
	            // Basic options for a simple Google Map
	            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	            var mapOptions = {
	                // How zoomed in you want the map to start at (always required)
	                zoom: 12,

	                scrollwheel: false,

	                // The latitude and longitude to center the map (always required)
	                center: new google.maps.LatLng(23.7286, 90.3854), // New York

	                // How you would like to style the map.
	                // This is where you would paste any style found on Snazzy Maps.
	                 styles:
					[

					    {
					        "featureType": "administrative",
					        "elementType": "labels.text.fill",
					        "stylers": [
					            {
					                "color": "#444444"
					            }
					        ]
					    },
					    {
					        "featureType": "landscape",
					        "elementType": "all",
					        "stylers": [
					            {
					                "color": "#f2f2f2"
					            }
					        ]
					    },
					    {
					        "featureType": "poi",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "all",
					        "stylers": [
					            {
					                "saturation": -100
					            },
					            {
					                "lightness": 45
					            }
					        ]
					    },
					    {
					        "featureType": "road.highway",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "simplified"
					            }
					        ]
					    },
					    {
					        "featureType": "road.arterial",
					        "elementType": "labels.icon",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "transit",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "off"
					            }
					        ]
					    },
					    {
					        "featureType": "transit.station.bus",
					        "elementType": "labels.icon",
					        "stylers": [
					            {
					                "saturation": "-16"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "all",
					        "stylers": [
					            {
					                "color": "#04b7ff"
					            },
					            {
					                "visibility": "on"
					            }
					        ]
					    }
					]
	            };

	            // Get the HTML DOM element that will contain your map
	            // We are using a div with id="map" seen below in the <body>
	            var mapElement = document.getElementById('googleMap');

	            // Create the Google Map using our element and options defined above
	            var map = new google.maps.Map(mapElement, mapOptions);

	            // Let's also add a marker while we're at it
	            var marker = new google.maps.Marker({
	                position: new google.maps.LatLng(23.7286, 90.3854),
	                map: map,
	                title: 'Dcare!',
	                icon: 'images/icons/map.png',
	                animation:google.maps.Animation.BOUNCE

	            });
	        }
	    </script>

	<script src="js/active.js"></script>

</body>
</html> --}}
