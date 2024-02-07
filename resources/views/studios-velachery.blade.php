@extends('layouts.base')
@section('content') 

	<!--================================= HEADER START ==========================================-->
      <section class="animate-scroll studio-bg-img" data-animate="animate__animated animate__fadeInUp" style="background-image: url({{asset('/resources/images-raack/studio-bg-image/velachery.png') }}">
		   <div class="container">
			  <div class="text-right">
				 <h1 style="color: #ffffff;" class="font-weight400 rounded-box">VELACHERY</span></h1>
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
					   <h3 class="section-margin-bottom text-white">VELACHERY</h3>
					   <div style="display: flex; align-items: center; justify-content:center; margin-bottom: 5px;">
						   <img src="{{asset('/resources/images-raack/icon-phone.png') }}" alt="Dance classes in Mylapore" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px;">
							<p><a href="tel:+919003024113" class="letter-spacing text-white">+91 9003024113</a> &nbsp; <a href="tel:+919841429355" class="letter-spacing text-white">+919543345345</a></p>
						</div>
						 <div style="display: flex; align-items: center; justify-content:center; margin-bottom: 5px;">
						   <img src="{{asset('/resources/images-raack/icon-mail.png') }}" alt="Dance classes in old perungalathur" class="img-fluid" style="width: 24px; height: 24px; margin-right: 10px;">
							<p><a href="mailto:enquiry@raack.com" class="text-white">enquiry@raack.com</a></p>
						</div>
					</div>
					<iframe class="location-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d295858.60132218956!2d80.06105741068215!3d13.017317760505847!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d90d4674d77%3A0xb3fda63ee24a2fab!2sRaack%20Academy%20Of%20Dance!5e0!3m2!1sen!2sin!4v1698926927117!5m2!1sen!2sin"></iframe>
				</div>
			</div>
         </div>
      </section>
      <!--================================ CLIENT LOGO AREA END ============================-->
	  
      <!--=============================== STUDIOS AREA START =======================-->
      <section class="section-space section-white-bg animate-scroll" data-animate="animate__animated animate__fadeInUp">
         <div class="container text-center">
            <h3 class="theme-color section-padding-bottom">HEAD <span class="font-weight400">OFFICE </span>STUDIO</h3>
			<div class="pt-50 mx-auto text-center faq">
				<button class="primary-btn question">
				   View Class Schedule
				</button>

            <!--================================= HEADER START ==========================================-->
    <div class="section-space">
      <div class="container">
          <div class="js-schedule" data-route="https://www.rdsartgroup.sk/en/schedule/async" id="rozvrh-hodin-zoznam"><style>
              .calendar .item.active
              {
                  background-color: #D3104D;
              }
          
              .calendar .item
              {
                  border-left-color: #D3104D;
              }
          
              .calendar .item .badge
              {
                  color: #D3104D;
              }
          
              .calendar .item .time p
              {
                  color: #D3104D;
              }
          
              .calendar .item.active .time p
              {
                  color: white;
              }
          
              .calendar .item .lector ul li
              {
                  color: #D3104D;
              }
          
              .calendar .item.active .lector ul li
              {
                  color: white;
              }
          
              .calendar .item.active .cta a
              {
                  color: #D3104D;
              }
          </style>
          
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
                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>4PM - 5PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>
                           </td>

                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>4PM - 5PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>
                           </td>
                          </td>

                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>4PM - 5PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>
                           </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>4PM - 5PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>   
                          </td>
                          <td style="border-bottom-width: 1px;">
                           
                          </td>

                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>3PM - 4PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>9AM - 10AM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>
                         </td>
                       </tr>

                       <tr>
                          <td class="hour" rowspan="1">
                             <span>16:00</span>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>5PM - 6PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>
                         </td>

                          <td style="border-bottom-width: 1px;"></td>

                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>5PM - 6PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>
                          </td>

                          <td style="border-bottom-width: 1px;"></td>

                          <td style="border-bottom-width: 1px;"></td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>4PM - 5PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>
                          </td>
                         </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>10AM - 11AM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Little Legend</a></h5>
                              </div>
                           </div>
                          </td>
                       </tr>
                       <tr>
                        <td class="hour" rowspan="1">
                           <span>16:00</span>
                        </td>
                        <td style="border-bottom-width: 1px;">
                         <div class="item">
                            <div class="time">
                               <p>6PM - 7PM </p>
                            </div>
                            <div class="title">
                               <h5><a href="#">RDEP LEVEL 1</a></h5>
                            </div>
                         </div>
                        </td>
                        <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>5PM - 6PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">RDEP LEVEL 1</a></h5>
                              </div>
                           </div>
                          </td>
                        <td style="border-bottom-width: 1px;">
                           <div class="item">
                              <div class="time">
                                 <p>6PM - 7PM </p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">RDEP LEVEL 1</a></h5>
                              </div>
                           </div>
                         </div>
                        </td>
                        <td style="border-bottom-width: 1px;">
                         <div class="item">
                            <div class="time">
                               <p>5PM - 6PM </p>
                            </div>
                            <div class="title">
                               <h5><a href="#">RDEP LEVEL 1</a></h5>
                            </div>
                         </div>
                        </td>
                        <td style="border-bottom-width: 1px;">
                         
                        </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>5PM - 6PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">RDEP LEVEL-1</a></h5>
                              </div>
                           </div>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>11AM - 12PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">RDEP LEVEL-1</a></h5>
                              </div>
                           </div>
                          </td>
                       </tr>
                       <tr>
                          <td style="border-bottom-width: 1px;">
                          
                          </td>
                          
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>7PM - 8PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Dance Fitness</a></h5>
                              </div>
                           </div>
                         </td>
                          <td style="border-bottom-width: 1px;">
                           
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>7PM - 8PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Dance Fitness</a></h5>
                              </div>
                           </div>
                         </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>7PM - 8PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Dance Fitness</a></h5>
                              </div>
                           </div>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>6PM - 7PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">RDEP LEVEL-2</a></h5>
                              </div>
                           </div>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>12PM - 1PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">RDEP LEVEL-2</a></h5>
                              </div>
                           </div>
                          </td>
                       </tr>

                       <tr>
                        <td style="border-bottom-width: 1px;">
                        
                        </td>
                        
                        <td style="border-bottom-width: 1px;">
                         <div class="item">                                  
                            <div class="time">
                               <p>10.30AM - 11.30AM</p>
                            </div>
                            <div class="title">
                               <h5><a href="#">Dance Fitness</a></h5>
                            </div>
                         </div>
                       </td>
                        <td style="border-bottom-width: 1px;">
                         
                        </td>
                        <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>10.30AM - 11.30AM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Dance Fitness</a></h5>
                              </div>
                           </div>
                       </td>
                        <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>10.30AM - 11.30AM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Dance Fitness</a></h5>
                              </div>
                           </div>
                        </td>
                        <td style="border-bottom-width: 1px;">
                         
                        </td>
                        <td style="border-bottom-width: 1px;">
                         
                        </td>
                     </tr>

                       <tr>
                          <td class="hour" rowspan="2">
                             <span>18:00</span>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>7PM - 8PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Choreo LAB (Sr/Teens)</a></h5>
                              </div>
                           </div>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>6PM - 7PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Choreo LAB Juniors</a></h5>
                              </div>
                           </div>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>7PM - 8PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Choreo LAB (Sr/Teens)</a></h5>
                              </div>
                           </div>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>6PM - 7PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Choreo LAB  Juniors</a></h5>
                              </div>
                           </div>
                          </td>
                          <td style="border-bottom-width: 1px;"></td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>7PM - 8PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Choreolab Junior</a></h5>
                              </div>
                           </div>
                          </td>
                          <td style="border-bottom-width: 1px;">
                           <div class="item">                                  
                              <div class="time">
                                 <p>1PM - 2PM</p>
                              </div>
                              <div class="title">
                                 <h5><a href="#">Choreolab Junior</a></h5>
                              </div>
                           </div>
                          </td>
                       </tr>


                     <tr>
                      <td class="hour" rowspan="2">
                         <span>18:00</span>
                      </td>
                      <td style="border-bottom-width: 1px;"></td>
                      <td style="border-bottom-width: 1px;"></td>
                      <td style="border-bottom-width: 1px;"></td>
                      <td style="border-bottom-width: 1px;"></td>
                      <td style="border-bottom-width: 1px;"></td>
                      <td style="border-bottom-width: 1px;">
                       <div class="item">                                  
                          <div class="time">
                             <p>8PM - 9PM</p>
                          </div>
                          <div class="title">
                             <h5><a href="#">Choreolab Teens</a></h5>
                          </div>
                       </div>
                      </td>
                      <td style="border-bottom-width: 1px;">
                        <div class="item">                                  
                           <div class="time">
                              <p>2PM - 3PM</p>
                           </div>
                           <div class="title">
                              <h5><a href="#">Choreolab Teens</a></h5>
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
           </div>
          </section>
           </div>
           </div>
           
   </div>
      
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
               <h3 class="section-margin-bottom text-white">VELACHERY</h3>
               <img src="{{asset('/resources/images-raack/gallery/arrow.png') }}" alt="Dance classes in Velachery" class="img-fluid gallery-ul float-right res-bot10" >
            </div>
         </div>
         <div class="container-fluid" style="overflow: hidden;">
            <div id="logo-slider" class="owl-carousel owl-theme " style="right: 50%; transform: translateX(56%); opacity: 1; display: block;">
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in Neelankarai" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in Ramapuram" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-kids-in-chennai.png') }}" alt="Dance classes in saidapet" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-adults-in-chennai.png') }}" alt="Dance classes in Avadi" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in Mogappair" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in Tambaram" class="feature-circle-img img-fluid">
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div id="logo-slider2" class="owl-carousel owl-theme " style="left: 50%; transform: translateX(-60%);">
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in kilpauk" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in Mugalivakkam" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-kids-in-chennai.png') }}" alt="Dance classes in Keelkatalai" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-for-adults-in-chennai.png') }}" alt="Dance classes in sholinganallur" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-classes-in-chennai.png') }}" alt="Dance classes in Pallikaranai" class="feature-circle-img img-fluid">
               </div>
               <div class="item text-center">
                  <img src="{{asset('/resources/images-raack/gallery/dance-academy-in-chennai.png') }}" alt="Dance classes in Kolathur" class="feature-circle-img img-fluid">
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
               <img src="{{asset('/resources/images-raack/gallery/arrow.png') }}" alt="Dance classes in Guduvanchery" class="img-fluid gallery-ul float-right res-bot10" >
            </div>
            <div class="row section-heading">
               <div  class="col-lg-6">
                  <p class="section-padding-bottom">Embark on your dance journey with Raack Dance Academy and discover the transformative power of movement-based art. Join us in celebrating the uniqueness of every individual through the powerful expression of dance. Enroll in your desired course today and let your dance story unfold.</p>
               </div>
               <div class="col-lg-5 offset-1  res-left-mar0">                   
				  @include('forms.studios', array('studioName' => 'Velachery'))
               </div>
            </div>
         </div>
      </section>
      <!--=============================== ACADEMY AREA END ======================-->
	  

@endsection
