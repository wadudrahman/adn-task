<div class="tab-pane fade" id="billings" role="tabpanel"
     aria-labelledby="billings">
    <h5>Payments Receiver</h5>
    <p>
        Add detailed billing information to receive payments.
        <br>You can only add a payment method when you reach the payment thresholdof
        <em>${{ env('PAYMENT_THRESHOLD') }}.</em>
    </p>
    <form class="theme-form" method="post" action="{{ url('/update-billings') }}">
        @csrf
        <div class="form-group">
            <label class="col-form-label">First Name</label>
            <input class="form-control" type="text" id="firstName" name="firstName"
                   placeholder="John" value="{!! optional($billingDetails)->first_name !!}" required>
            @error('firstName')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Last Name</label>
            <input class="form-control" type="text" name="lastName" id="lastName"
                   placeholder="Doe" value="{!! optional($billingDetails)->last_name !!}" required>
            @error('lastName')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">House Number</label>
            <input class="form-control" type="text" name="houseNumber" id="houseNumber"
                   placeholder="16" value="{!! optional($billingDetails)->house_number !!}" required>
            @error('houseNumber')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Street</label>
            <input class="form-control" type="text" name="street" id="street"
                   placeholder="Example Street" value="{!! optional($billingDetails)->street !!}" required>
            @error('street')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Postal Code</label>
            <input class="form-control" type="text" name="postalCode" id="postalCode"
                   placeholder="1212" value="{!! optional($billingDetails)->postal_code !!}" required>
            @error('postalCode')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">City</label>
            <input class="form-control" type="text" name="city" id="city"
                   placeholder="Dhaka" value="{!! optional($billingDetails)->city !!}" required>
            @error('city')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">State or region</label>
            <input class="form-control" type="text" name="state" id="state"
                   placeholder="Bangladesh" value="{!! optional($billingDetails)->state !!}" required>
            @error('state')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <hr>
        <div class="form-group">
            <div class="mb-2">
                <div class="col-form-label">Country</div>
                <select class="form-control form-control-primary btn-square" id="country" name="country">
                    <option selected disabled>Select Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country['name'] }}" {{ (isset(optional($billingDetails)->country) && $country['name'] === optional($billingDetails)->country) ? 'selected' : '' }}>{{ $country['name'] }}</option>
                    @endforeach
                </select>
                @error('country')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-2">
                <div class="col-form-label">Currency</div>
                <input class="form-control" type="text" value="U.S Dollar (USD)" readonly>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit" id="saveBilings">Save</button>
        </div>
    </form>
</div>
