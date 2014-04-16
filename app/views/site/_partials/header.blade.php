	<header>
		<section class="hd-top">
			<div class="row">
				<div class="large-10 small-6 columns">
					<p id="link-home"><a href="{{ URL::to('/') }}">HOME</a></p>
				</div>
				<div class="large-2 small-6 columns">
					<p id="best"><img src="{{ URL::asset('assets/site/img/best.png') }}"></p>
				</div>
			</div>
		</section>

		<section class="hd-mid">
			<div class="row">
				<div class="logo large-6 columns">
					<a href="{{ URL::to('/') }}">
						<img src="{{ URL::asset('assets/site/img/logo.png') }}">
					</a>
				</div>
				<div class="brand large-6 columns">
					<h1>Where Relationships Matter</h1>
				</div>
			</div>
		</section>

		<section class="hd-bot">
			<div class="row">
				<div class="large-12 columns">

					<div class="contain-to-grid">
					
					<nav class="top-bar" data-options="back_text:<< Back;">
					  <ul class="title-area">
					    <li class="name"></li>
					    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
					  </ul>

					  <section class="top-bar-section">

					    <ul class="left">

					      <li class="divider"></li>
					      <li class="has-dropdown"><a href="#"><span class="ex-pad">AGENT SERVICES</span></a>
					      	<ul class="dropdown">
					          <li class="divider"></li>
					          <li><a href="{{ URL::to('become-appointed') }}"><span>Become Appointed</span></a></li>
					          <li class="divider"></li>
					          <li><a href="{{ URL::to('forms') }}"><span>Forms</span></a></li>
					          <li class="divider"></li>
					          <li><a href="{{ URL::to('loss-control-services') }}">Loss Control Services</a></li>
					          <li class="divider"></li>
					          <li><a href="{{ URL::to('loss-run-request') }}"><span>Loss Run Request</span></a></li>
					          <li class="divider"></li>
					          <li><a href="{{ URL::to('class-codes') }}"><span>Class Codes</span></a></li>
					          <li class="divider"></li>
					          <li><a href="{{ URL::to('informative-links') }}"><span>Informative Links</span></a></li>
					          <li class="divider"></li>
					        </ul>
					      </li>
					      <li class="divider"></li>

					      <li class="has-dropdown"><a href="#">EMPLOYER SERVICES</a>
					      	<ul class="dropdown">
					          <li class="divider"></li>
					          <li><a href="{{ URL::to('payment-options') }}"><span>Payment Options</span></a></li>
					          <li class="divider"></li>
					          <li><a href="{{ URL::to('healthcare-network') }}"><span>Healthcare Network</span></a></li>
					          <li class="divider"></li>
					          <li><a href="{{ URL::to('loss-run-request') }}"><span>Loss Run Request</span></a></li>
					          <li class="divider"></li>
					        </ul>
					      </li>
					      <li class="divider"></li>

					      <li><a href="{{ URL::to('injured-worker-services') }}">INJURED WORKER SERVICES</a></li>
					      <li class="divider"></li>

					      <li><a href="{{ URL::to('report-claim') }}"><span class="ex-pad">REPORT A CLAIM</span></a></li>
					      <li class="divider"></li>

					      <li><a href="{{ URL::to('our-team') }}">CONTACT OUR TEAM</a></li>
					      <li class="divider"></li>

					      <li><a href="{{ URL::to('press-room') }}"><span class="ex-pad">PRESS ROOM</span></a></li>
					      <li class="divider"></li>

					      <li><a href="{{ URL::to('request-information') }}">REQUEST INFORMATION</a></li>
					      <li class="divider"></li>

					    </ul>

					  </section>
					</nav>

					</div>

				</div>
			</div>
		</section>

		<section class="hd-bot2">
			<div class="row">
				<div class="large-12 columns">

					<ul>
					      <li class="has-dropdown"><a href="#">AGENT<br>SERVICES</a>
					      	<ul class="dropdown">
					          <li><a href="{{ URL::to('become-appointed') }}">Become Appointed</a></li>
					          <li><a href="{{ URL::to('forms') }}">Forms</a></li>
					          <li><a href="{{ URL::to('loss-control-services') }}">Loss Control Services</a></li>
					          <li><a href="{{ URL::to('loss-run-request') }}">Loss Run Request</a></li>
					          <li><a href="{{ URL::to('class-codes') }}">Class Codes</a></li>
					          <li><a href="{{ URL::to('informative-links') }}">Informative Links</a></li>
					        </ul>
					      </li>

					      <li class="has-dropdown"><a href="#">EMPLOYER<br>SERVICES</a>
					      	<ul class="dropdown">
					          <li><a href="{{ URL::to('payment-options') }}">Payment Options</a></li>
					          <li><a href="{{ URL::to('healthcare-network') }}">Healthcare Network</a></li>
					        </ul>
					      </li>

					      <li><a href="{{ URL::to('injured-worker-services') }}">INJURED WORKER<br>SERVICES</a></li>

					      <li><a href="{{ URL::to('report-claim') }}">REPORT<br>A CLAIM</a></li>

					      <li><a href="{{ URL::to('our-team') }}">CONTACT<br>OUR TEAM</a></li>

					      <li><a href="{{ URL::to('press-room') }}">PRESS<br>ROOM</a></li>

					      <li><a href="{{ URL::to('request-information') }}">REQUEST<br>INFORMATION</a></li>

					</ul>

				</div>
			</div>
		</section>

	</header>