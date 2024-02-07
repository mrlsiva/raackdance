@extends('layouts.base')
@section('content') 

	  <!--================================= HEADER START ==========================================-->
      <section class="animate-scroll studio-bg-img" data-animate="animate__animated animate__fadeInUp" style="background-image: url({{asset('/resources/images-raack/studio-bg-image/Keelkattalai.png') }}">
		   <div class="container">
			  <div class="text-right">
				 <h1 style="color: #ffffff;" class="font-weight400 rounded-box">KEELKATTALAI</span></h1>
			  </div>
		   </div>
      </section>
      <!--================================= HEADER END ==========================================-->
      <!--=============================== STUDIOS AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll pb-50" data-animate="animate__animated animate__fadeInUp">
         <div class="container text-center">
            <div class="client-logo-slider">
               <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
               <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">STUDIO<span class="theme-color font-weight400">DETAILS</span></h2>
               <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
            </div>
			<!-- <h3 class="theme-color fs-60">STUDIO <span class="font-weight400">DETAILS</span></h3> -->
         </div>
      </section>
      <!--=============================== STUDIOS AREA END ======================-->	  
      <!--================================= CLIENT LOGO AREA START =======================-->
      <section class="section-dark-bg studio-contact-bg section-space animate-scroll gallery-slider"  data-animate="animate__animated animate__fadeInUp">
         <div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<div class="section-heading">
						<img src="{{asset('/resources/images-raack/logo.png') }}" alt="Dance classes in Thoraipakkam">
					   <h3 class="section-margin-bottom text-white">KEELKATTALAI</h3>
					   <div style="display: flex; align-items: center; justify-content:center; margin-bottom: 5px;">
						   <img src="{{asset('/resources/images-raack/icon-phone.png') }}" alt="Dance classes in Mylapore" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px;">
							<p><a href="tel:+917550283439 " class="letter-spacing text-white">+91 7550283439</a> &nbsp; <a href="tel:+91994516090" class="letter-spacing text-white">+91 994516090</a></p>
						</div>
						 <div style="display: flex; align-items: center; justify-content:center; margin-bottom: 5px;">
						   <img src="{{asset('/resources/images-raack/icon-mail.png') }}" alt="Dance classes in old perungalathur" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px;">
							<p><a href="mailto:enquiry@raack.com" class="text-white">enquiry@raack.com</a></p>
						</div>
					</div>
					<iframe class="location-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1677470.1538642936!2d78.43768868053576!3d12.435734385246597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525e7624e90d9b%3A0xe6e79b7d2fb1b2ba!2sRaack%20Academy%20Of%20Dance%20Keelkattalai!5e0!3m2!1sen!2sin!4v1698991122230!5m2!1sen!2sin"></iframe>
				</div>
			</div>
         </div>
      </section>
      <!--================================ CLIENT LOGO AREA END ============================-->
	  
      <!--=============================== STUDIOS AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp" style="padding-bottom: 0%;">
         <div class="container text-center">
            <div class="client-logo-slider">
               <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img animate-scroll" data-animate="animate__animated animate__zoomIn">
               <h2 class="mx-auto text-dark text-center section-grp-margin-bottom">BRANCH <span class="theme-color font-weight400">HEAD</span></h2>
               <img src="{{asset('/resources/images-raack/Ascent-Short.png') }}" alt="Ascent-Short" class="img-fluid team-ul-img-right animate-scroll" data-animate="animate__animated animate__zoomIn">
            </div>
			<!-- <h3 class="theme-color section-padding-bottom">BRANCH <span class="font-weight400">HEAD</span></h3> -->
         <div class="row">
				<div class="col-lg-10 mx-auto">
					<div class="row double-head">
                  <div class="col-lg-3">
                        <div class="item text-center res-text-center">
                           <div class="res-team-circle res-team-area-width res-width-team-area res-mar-right res-team-area-right">
                              <div class="our-team">
                                  <div class="pic img-margin-bottom core-team-bg">
                                      <img src="https://dummyimage.com/500x554/000/fff" alt="Dance classes in Velachery" class="feature-circle-img img-fluid">
                                  </div>
                                  <button class="primary-btn">
                                    Saravan santhanakrishnan
                                  </button>
                              </div>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="item text-center res-text-center">
                        <div class="res-team-circle res-team-area-width res-width-team-area res-mar-right res-team-area-right">
                           <div class="our-team">
                               <div class="pic img-margin-bottom core-team-bg">
                                   <img src="{{asset('/resources/images-raack/core-team/Gugan.png') }}" alt="Dance classes in Neelankarai" class="feature-circle-img img-fluid">
                               </div>
                               <button class="primary-btn"> 
										   Gugan Gurubaran
                               </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
				</div>
			</div>
         
			<div class="pt-50 mx-auto text-center faq">
				<button class="primary-btn question">
				   View Class Schedule
				</button>
            <!--================================= HEADER START ==========================================-->
               <section class="calendar js-calendar " id="js-calendar" >
                 <div class="calendar-wrap hidden-md-down answer">
                    <table>
                       <thead>
                          <tr>
                             <th class="entry">
                                <span class="entry-head">
                                Time
                                </span>
                             </th>
                             <th class="day">
                                <span class="day-name">Monday</span>
                             </th>
                             <th class="day">
                                <span class="day-name">Tuesday</span>
                             </th>
                             <th class="day">
                                <span class="day-name">Wednesday</span>
                             </th>
                             <th class="day">
                                <span class="day-name">Thursday</span>
                             </th>
                             <th class="day">
                                <span class="day-name">Friday</span>
                             </th>
                             <th class="day">
                                <span class="day-name">Saturday</span>
                             </th>
                             <th class="day">
                                <span class="day-name">Sunday</span>
                             </th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td class="hour" rowspan="1">
                                <span>9:00</span>
                             </td>
                             <td style="border-bottom-width: 1px;"> </td>

                             <td style="border-bottom-width: 1px;">
                              <div class="item">                                  
                                 <div class="time">
                                    <p>4.30PM - 5.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">LITTLE LEGENDS</a></h5>
                                 </div>
                              </div>
                             </td>

                             <td style="border-bottom-width: 1px;"> </td>

                             <td style="border-bottom-width: 1px;">
                              <div class="item">                                  
                                 <div class="time">
                                    <p>4.30PM - 5.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">LITTLE LEGENDS</a></h5>
                                 </div>
                              </div>
                             </td>

                             <td style="border-bottom-width: 1px;"> </td>

                             <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>3.30PM - 4.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">LITTLE LEGENDS</a></h5>
                                 </div>
                              </div>
                             </td>
                             <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>9.30AM - 10.30AM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">LITTLE LEGENDS</a></h5>
                                 </div>
                              </div>
                             </td>
                          </tr>
                          
                          <tr>
                           <td class="hour" rowspan="1">
                              <span>9:00</span>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>5.30PM - 6.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 1 BATCH 1</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>5.30PM - 6.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 1 BATCH 1</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>4.30PM - 5.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">LITTLE LEGENDS</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>10.30PM - 11.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">LITTLE LEGENDS</a></h5>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr>
                           <td class="hour" rowspan="1">
                              <span>9:00</span>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;">
                              <div class="item">                                  
                                 <div class="time">
                                    <p>6.30PM - 7.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 1 BATCH 2</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>6.30PM - 7.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 1 BATCH 2</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>5.30PM - 6.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 1 BATCH 1</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>11.30AM - 12.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 1 BATCH 1</a></h5>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        
                        <tr>
                           <td class="hour" rowspan="1">
                              <span>9:00</span>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;">
                              <div class="item">                                  
                                 <div class="time">
                                    <p>7.30PM - 8.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">Choreolab SR</a></h5>
                                 </div>
                              </div>
                            </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;">
                              <div class="item">                                  
                                 <div class="time">
                                    <p>7.30PM - 8.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">Choreolab SR</a></h5>
                                 </div>
                              </div>
                            </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>6.30PM - 7.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 1 BATCH 2</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>12.30PM - 1.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 1 BATCH 2</a></h5>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        

                        <tr>
                           <td class="hour" rowspan="1">
                              <span>9:00</span>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>10.30AM - 11.30AM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">DANCE FITNESS</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>10.30AM - 11.30AM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">DANCE FITNESS</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>8.30PM - 9.30PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">DANCE FITNESS</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> 
                              
                           </td>
                        </tr>

                        <tr>
                           <td class="hour" rowspan="1">
                              <span>9:00</span>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>7PM - 8PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">DANCE FITNESS</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>7PM - 8PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">DANCE FITNESS</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>6PM - 7PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 2</a></h5>
                                 </div>
                              </div>
                           </td>
                           <td style="border-bottom-width: 1px;"> 
                           <td style="border-bottom-width: 1px;"> 
                              <div class="item">                                  
                                 <div class="time">
                                    <p>6PM - 7PM</p>
                                 </div>
                                 <div class="title">
                                    <h5><a href="#">RDEP LEVEL 2</a></h5>
                                 </div>
                              </div>
                           </td>
                        </tr>
                       </tbody>
                    </table>
                 </div>
                 <div class="calendar-wrap hidden-md-up">
                    <div class="container">
                       <div class="day " data-day="1">
                          <p class="title">Monday</p>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>18:10 - 19:10 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:15 - 20:15 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:15 - 20:15 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:20 - 20:20 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>20:20 - 21:20 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>20:25 - 21:25 </p>
                             </div>
                          </div>
                       </div>
                       <div class="day " data-day="2">
                          <p class="title">Tuesday</p>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>20:05 - 21:05 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>20:05 - 21:05 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>20:15 - 21:15 </p>
                             </div>
                          </div>
                       </div>
                       <div class="day " data-day="3">
                          <p class="title">Wednesday</p>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:05 - 20:05 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:10 - 20:10 </p>
                             </div>
                          </div>
                          <div class="item"> 
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:05 - 20:05 </p>
                             </div>
                          </div>
                       </div>
                       <div class="day " data-day="4">
                          <p class="title">Thursday</p>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>16:00 - 17:00 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>18:20 - 19:20 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:35 - 20:05 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:25 - 20:25 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>20:05 - 21:05 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>20:00 - 21:00 </p>
                             </div>
                          </div>
                       </div>
                       <div class="day " data-day="5">
                          <p class="title">Friday</p>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>17:05 - 18:05 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>18:10 - 19:10 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:15 - 20:15 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:15 - 20:15 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:15 - 20:15 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:50 - 20:50 </p>
                             </div>
                          </div>
                       </div>
                       <div class="day " data-day="6">
                          <p class="title">Saturday</p>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>09:30 - 10:30 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>16:00 - 20:00 </p>
                             </div>
                          </div>
                       </div>
                       <div class="day " data-day="7">
                          <p class="title">Sunday</p>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>16:30 - 18:00 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>17:00 - 18:00 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>17:00 - 18:00 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>17:00 - 18:00 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>18:05 - 19:05 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>18:05 - 19:05 </p>
                             </div>
                          </div>
                          <div class="item">
                             <div class="time">
                                <div class="title">
                                   <h5><a href="#">Heading</a></h5>
                                </div>
                                <p>19:10 - 20:10 </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
               </section>
            <!--================================= HEADER END ==========================================-->
			</div>
         </div>
      </section>
      <!--=============================== STUDIOS AREA END ======================-->
	  
      <!--=============================== EVENT DETAILS AREA START =======================-->
      <section class="section-space animate-scroll" style="padding-bottom: 50px;" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="">
               <div class="client-logo-slider">
                  <h1 class="mx-auto text-dark text-center"><span class="theme-color font-weight400">GALLERY</span></h1>
               </div>
            </div>
            
         </div> 
      </section>
      <!--=============================== EVENT DETAILS AREA END ======================-->

    
      <!--================================= CLIENT LOGO AREA START =======================-->
      <section class="section-dark-bg section-space animate-scroll gallery-slider"  data-animate="animate__animated animate__fadeInUp">
         <div class="container">
            <div class="section-heading">
               <h3 class="section-margin-bottom text-white">KEELKATTALAI</h3>
               <img src="{{asset('/resources/images-raack/gallery/arrow.png') }}" alt="Dance classes in Ramapuram" class="img-fluid gallery-ul float-right res-bot10" >
            </div>
         </div>
         <div class="container-fluid" style="overflow: hidden;">
            <div id="logo-slider" class="owl-carousel owl-theme " style="right: 50%; transform: translateX(56%); opacity: 1; display: block;">
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in saidapet" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in Avadi" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-kids-in-chennai.png') }}" alt="Dance classes in Mogappair" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-adults-in-chennai.png') }}" alt="Dance classes in Tambaram" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in kilpauk" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in Mugalivakkam" class="feature-circle-img img-fluid">
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div id="logo-slider2" class="owl-carousel owl-theme " style="left: 50%; transform: translateX(-60%);">
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in Keelkatalai" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in sholinganallur" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-kids-in-chennai.png') }}" alt="Dance classes in Pallikaranai" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-adults-in-chennai.png') }}" alt="Dance classes in Kolathur" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in Guduvanchery" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes for adults Chennai" class="feature-circle-img img-fluid">
               </div>
            </div>
         </div>
      </section>
      <!--================================ CLIENT LOGO AREA END ============================-->
	  
      <!--=============================== ACADEMY AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container">
			<div class="section-heading">
               <h2 class="section-margin-bottom">UNLOCK YOUR <br><span class="theme-color">DANCING POTENTIAL NOW!</span></h2>
               <img src="{{asset('/resources/images-raack/gallery/arrow.png') }}" alt="Dance classes for kids Chennai" class="img-fluid gallery-ul float-right res-bot10" >
            </div>
            <div class="row section-heading">
               <div  class="col-lg-6">
                  <p class="section-padding-bottom">Embark on your dance journey with Raack Dance Academy and discover the transformative power of movement-based art. Join us in celebrating the uniqueness of every individual through the powerful expression of dance. Enroll in your desired course today and let your dance story unfold.</p>
               </div>
               <div class="col-lg-5 offset-1  res-left-mar0"> 
				  @include('forms.studios', array('studioName' => 'Keelkattalai'))
               </div>
            </div>
         </div>
      </section>
      <!--=============================== ACADEMY AREA END ======================-->

@endsection
