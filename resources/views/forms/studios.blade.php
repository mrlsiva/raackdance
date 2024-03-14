@php 
use App\Http\Controllers\DanceController;
@endphp
<!--=============================== REGISTER US FORM START =======================-->
<form id="contactus-form" class="contactus-form" action="{{route('contactusmail.store')}}" method="POST">
	@csrf	
	<input type="hidden" name="form_id" value="003" />
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
	             
	<div class="form-field {{ $errors->has('location') ? 'has-error' : ''}}">
		<div class="form-textarea-top-spacing">
			@php 
				$studiosList = DanceController::getStudiosList();
				$studiosCount = count($studiosList);
				$i = 0;
			@endphp
			<select name="location" id="location" class="form-input @error('location') is-invalid @enderror" required>
				@php 						
					$optselected = isset($studioName) & $studioName == 'NULL' ? 'selected="true"' : '';
				@endphp
				<option value="" disabled="disabled" {{ $optselected }}>Location</option>
				<hr>
				@foreach($studiosList as $key => $studio)
					@php 
						$i++; 
						$optselected = isset($studioName) & $studioName == $key ? 'selected' : '';
					@endphp
					<option value="{{ $key }}" {{ $optselected }}>{{ $studio }}</option>
					@if( $studiosCount < $i ) 
					 <hr/> 
					@endif	
				@endforeach				
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
             
