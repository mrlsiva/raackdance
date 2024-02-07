<!--=============================== REGISTER US FORM START =======================-->
<form id="contactus-form" class="contactus-form" action="{{route('contactusmail.store')}}" method="POST">
	@csrf	
	<div class="form-field {{ $errors->has('fname') ? 'has-error' : ''}}">                        
		<input id="fname" type="text" name="fname" class="form-input @error('fname') is-invalid @enderror"  placeholder="Name" value="{{ old('fname') }}" maxlength="50" required autocomplete="off" />
	</div>
	<div class="form-field {{ $errors->has('phone') ? 'has-error' : ''}}">
		<div class="mobile-input-container">
			<div class="input-container">
				<input type="text" id="countryCode" placeholder="Country Code" value="+91" readonly>
			</div>
			<div class="input-container ph-container">
				<input id="phone" type="text" name="phone" class="form-input @error('phone') is-invalid @enderror"  placeholder="Mobile No" value="{{ old('phone') }}" maxlength="10" required autocomplete="off" />
			</div>
		</div> 
	</div>
	<div class="form-field {{ $errors->has('email') ? 'has-error' : ''}}">
		<div class="form-textarea-top-spacing">
		   <input id="email" type="email" name="email" class="form-input @error('email') is-invalid @enderror"  placeholder="Email ID" value="{{ old('email') }}" required autocomplete="off" />
		</div>
	</div>     
	<div class="form-field {{ $errors->has('course') ? 'has-error' : ''}}">
		<div class="form-textarea-top-spacing">
		   <select name="position" id="position" class="form-input @error('course') is-invalid @enderror" required>
				<option value="" disabled="disabled" selected="true">Position</option>
				<hr>
				<option value="Instructor">Instructor</option>
				<hr>
				<option value="Counsellor">Counsellor</option>
				<hr>
				<option value="Branch Manager">Branch Manager</option>
				<hr>
				<option value="Designer">Designer</option>
				<hr>
				<option value="Editor">Editor</option>
		   </select>
		</div>
	</div>               
	<div class="form-field {{ $errors->has('location') ? 'has-error' : ''}}">
		<div class="form-textarea-top-spacing">
			<select name="location" id="location" class="form-input @error('location') is-invalid @enderror" required>
				<option value="" disabled="disabled" selected="true">Location</option>
				<hr>
				<option value="Tambaram">Tambaram</option>
				<hr>
				<option value="Mylapore">Mylapore</option>
				<hr>
				<option value="Velachery">Velachery</option>
				<hr>
				<option value="Perungalathur">Old Perungalathur</option>
				<hr>
				<option value="Mogappair">Mogappair</option>
				<hr>
				<option value="Avadi">Avadi</option>
				<hr>
				<option value="Sholinganallur">Sholinganallur</option>
				<hr>
				<option value="Thoraipakkam">Thoraipakkam</option>
				<hr>
				<option value="Neelankarai">Neelankarai</option>
				<hr>
				<option value="Ramapuram">Ramapuram</option>
				<hr>
				<option value="Mugalivakkam">Mugalivakkam</option>
				<hr>
				<option value="Keelkattalai">Keelkattalai</option>
				<hr>
				<option value="Saidapet">Saidapet</option>
				<hr>
				<option value="Pallikaranai">Pallikaranai</option>
				<hr>
				<option value="Kilpauk">Kilpauk</option>
				<hr>
				<option value="Kolathur">Kolathur</option>
				<hr>
				<option value="Guduvanchery">Guduvanchery</option>
				<hr>
				<option value="Pondicherry">Pondicherry</option>
				<hr>
				<option value="Cuddalore">Cuddalore</option>
			</select>
		</div>
	</div>
	<div class="btn-wrapper" style="margin-top: 40px;">
		<button class="primary-btn" type="submit">Submit</button>
	</div>
	<div class="messageDiv d-flex pt-3"> 
		<span class="form-loader d-none"><img src="{{asset('/resources/images-raack/gallery/arrow.png')}}" alt="Loading..." class="img-fluid team-ul-img-right animate__animated animate__fadeOutRight animate__infinite infinite" width="100"></span>
		<span class="successMessage" style="display: none;"><span class="alert alert-success d-block"></span></span>    					 
		<span class="failMessage" style="display: none;"><span class="alert alert-danger d-block"></span></span> 
	</div>
</form>
<!--=============================== REGISTER FORM END =======================-->
             
