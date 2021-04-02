<div class="tab-pane fade" id="privacy" role="tabpanel"
     aria-labelledby="privacy">
    <h5>Contact details</h5>
    <form class="theme-form" method="post" action="{{ url('/update-contact-details') }}">
        @csrf
        <div class="form-group">
            <label class="col-form-label">First Name</label>
            <input class="form-control" type="text" name="firstName" id="firstName"
                   placeholder="John" value="{!! optional($userDetails)->first_name !!}" required>
        </div>
        <div class="form-group">
            <label class="col-form-label">Last Name</label>
            <input class="form-control" type="text" name="lastName" id="lastName"
                   placeholder="Doe" value="{!! optional($userDetails)->last_name !!}" required>
        </div>
        <div class="form-group mb-3">
            <label>Phone Number</label>
            <div class="input-group" id="phone" name="phone">
                <div class="input-group-prepend d-flex">
                    <select class="form-control form-control-primary btn-square"
                            id="callingCode" name="callingCode">
                        <option selected disabled>Choose calling code</option>
                        @foreach($countries as $country)
                            <option value="{{ $country['callingCode'] }}" {{ (isset(optional($userDetails)->calling_code) && $country['callingCode'] === optional($userDetails)->calling_code) ? 'selected' : '' }}>{{ $country['name'] }} (+{{ $country['callingCode'] }})</option>
                        @endforeach
                    </select>
                </div>

                <input class="form-control" type="text" id="phoneNumber" name="phoneNumber"
                       placeholder="797xxxxxxx" value="{!! optional($userDetails)->msisdn !!}">
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit" id="saveContact">Save</button>
        </div>
    </form>
    <hr>
    <h5>Receiving app notifications</h5>
    <p>Choose the types of notifications you want to receive about Zareklamy on your
        mobile application.</p>
    <form>
        <div class="form-group">
            <div class="checkbox checkbox-solid-primary">
                <input id="adsNotificationCheck" name="adsNotificationCheck" type="checkbox">
                <label for="adsNotificationCheck">Newly ads notification</label>
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox checkbox-solid-primary">
                <input id="paymentNotificationCheck" name="paymentNotificationCheck" type="checkbox">
                <label for="paymentNotificationCheck">Payment Confirmation notification</label>
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox checkbox-solid-primary">
                <input id="newRegistrationCheck" name="newRegistrationCheck" type="checkbox">
                <label for="newRegistrationCheck">New registration from Referral link</label>
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox checkbox-solid-primary">
                <input id="earningsCheck" name="earningsCheck" type="checkbox">
                <label for="earningsCheck">Earnings from Referral link</label>
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox checkbox-solid-primary">
                <input id="addsInfoCheck" name="addsInfoCheck" type="checkbox">
                <label for="addsInfoCheck">Weekly Adds information</label>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit"
                    id="saveNotificationSettings">Save</button>
        </div>
    </form>

    <hr>
    <h5>Receiving mails</h5>
    <p>Choose the types of emails you want to receive from us.</p>
    <form>
        <div class="form-group">
            <div class="checkbox checkbox-solid-primary">
                <input id="performanceSuggestionCheck" name="performanceSuggestionCheck" type="checkbox">
                <label for="performanceSuggestionCheck">Customized help and performance
                    suggestions </label>
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox checkbox-solid-primary">
                <input id="periodicNewslettersCheck" name="periodicNewslettersCheck" type="checkbox">
                <label for="periodicNewslettersCheck">Periodic newsletters with tips and best
                    practices </label>
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox checkbox-solid-primary">
                <input id="occasionalSurveyCheck" name="occasionalSurveyCheck" type="checkbox">
                <label for="input_4_check8"> Occasional surveys to help Zareklamy
                    improve this
                    website </label>
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox checkbox-solid-primary">
                <input id="specialOffersCheck" name="specialOffersCheck" type="checkbox">
                <label for="specialOffersCheck">Special offers - promotions, discount
                    codes</label>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit"
                    id="saveMailSettings">Save</button>
        </div>
    </form>
</div>
