<div class="tab-pane fade" id="about" role="tabpanel"
     aria-labelledby="about">
    <h5>Basic information</h5>
    <p>Provide some information about yourself to show you more relevant ads to earn.</p>
    <form class="theme-form">
        <div class="form-group">
            <div class="mb-2">
                <div class="col-form-label">Country</div>
                <select class="form-control form-control-primary btn-square"
                        id="selectCountry" name="selectCountry">
                    <option value="opt1">Bangladesh</option>
                    <option value="opt2">India</option>
                    <option value="opt3">Type 3</option>
                    <option value="opt4">Type 4</option>
                    <option value="opt5">Type 5</option>
                    <option value="opt6">Type 6</option>
                    <option value="opt7">Type 7</option>
                    <option value="opt8">Type 8</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-2">
                <div class="col-form-label">Gender</div>
                <select class="form-control form-control-primary btn-square"
                        id="selectGender" name="selectGender">
                    <option value="opt1">Male</option>
                    <option value="opt2">Female</option>
                    <option value="opt3">Others</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-form-label">Birthday</div>
            <div class="row">
                <div class="col-sm-6">
                    <select class="form-control" id="selectBirthdayMonth"
                            name="selectBirthdayMonth">
                        <option value="January"> January</option>
                        <option value="February"> February</option>
                        <option value="March"> March</option>
                        <option value="April"> April</option>
                        <option value="May"> May</option>
                        <option value="June"> June</option>
                        <option value="July"> July</option>
                        <option value="August"> August</option>
                        <option value="September"> September</option>
                        <option value="October"> October</option>
                        <option value="November"> November</option>
                        <option value="December"> December</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select class="form-control" id="selectBirthdayDate" name="selectBirthdayDate">
                        @for($i = 1; $i <= 31; $i++)
                            <option value="{{ $i }}"> {{ $i }} </option>
                        @endfor
                    </select>
                </div>
                <div class="col-sm-4">
                    <select class="form-control" id="selectBirthdayYear" name="selectBirthdayYear">
                        @for($i = (now()->year - 12); $i >= 1948; $i--)
                            <option value="{{ $i }}"> {{ $i }} </option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit"
                    id="saveBasicInfo">Save</button>
        </div>
    </form>
    <hr>
    <h5>Experience</h5>
    <p>Add your work experience to get better paid monetization ads.</p>
    <form class="theme-form">
        <div class="form-group">
            <div class="mb-2">
                <div class="col-form-label">Specialization</div>
                <select class="form-control form-control-primary btn-square"
                        id="selectSpecialization" name="selectSpecialization">
                    <option value="opt1">Nothing selected</option>
                    <option value="opt2">Type 2</option>
                    <option value="opt3">Type 3</option>
                    <option value="opt4">Type 4</option>
                    <option value="opt5">Type 5</option>
                    <option value="opt6">Type 6</option>
                    <option value="opt7">Type 7</option>
                    <option value="opt8">Type 8</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-2">
                <div class="col-form-label">Education</div>
                <select class="form-control form-control-primary btn-square"
                        id="selectEducation" name="selectEducation">
                    <option value="opt1">Nothing selected</option>
                    <option value="opt2">Female</option>
                    <option value="opt3">Others</option>
                </select>
            </div>
        </div>

        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit"
                    id="saveExperiences">Save</button>
        </div>
    </form>
    <hr>
    <h5>Subcategories</h5>
    <p>Allow yourself to display ads based only on what you like and who you are.</p>
    <form class="theme-form">
        <div class="form-group">
            <div class="mb-2">
                <div class="col-form-label">Interests</div>
                <select class="form-control form-control-primary btn-square"
                        id="selectInterests" name="selectInterests">
                    <option value="opt1">Nothing selected</option>
                    <option value="opt2">Type 2</option>
                    <option value="opt3">Type 3</option>
                    <option value="opt4">Type 4</option>
                    <option value="opt5">Type 5</option>
                    <option value="opt6">Type 6</option>
                    <option value="opt7">Type 7</option>
                    <option value="opt8">Type 8</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-2">
                <div class="col-form-label">Adding personal information</div>
                <select class="form-control form-control-primary btn-square"
                        id="selectAdditionalInformation" name="selectAdditionalInformation">
                    <option value="opt1">Nothing selected</option>
                    <option value="opt2">Female</option>
                    <option value="opt3">Others</option>
                </select>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit" id="saveSubcategories">Save</button>
        </div>
    </form>
</div>
