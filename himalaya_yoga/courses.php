<?php include "header.php" ?>

<div class="container-fuild bg-white py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-8 col-sm-6   text-center py-5 px-3">
            <h1 class="text-center py-5">Register For Yoga Courses</h1>
            
            <table class="table table-hover text-start pt-4">
                <thead>
                    <tr>
                    <th scope="col">TRAINING / COURSE </th>
                    <th scope="col">DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>TTC(Teachers Training / Yoga Instructors Course ) 1 MONTH</td>
                    <td>EVERY MONTH  IN ENGLISH & HINDI</td>
                    </tr>
                    <tr>
                    <td>HEALTH MANAGEMENT COURSE  10 DAYS</td>
                    <td>15 TO 30 EVERY MONTH</td>
                    </tr>
                    <tr>
                    <td>WEEK DAY  COURSE  7 DAYS</td>
                    <td>ALTERNATE WEEK  EVERY MONTH</td>
                    </tr>
                    </tr>
                    <tr>
                    <td>WEEKENDS RETREAT 3 DAYS</td>
                    <td>EVERY WEAKENDS</td>
                    </tr>
                </tbody>
            </table>
<!--table ends here-->
            <h3 class="text-center fw-bolder py-5">REGISTRAITON FORM </h3>
            <h4 class="text-center fw-bolder">FOR YOGA TRAINING</h4>

            <p>Himalaya Yoga Holistic Living Institute</p>
            <p>Bhimtal, Nainital, Uttarakhand, India, 263136</p>

<!--form starts from here-->
            <form class="py-5">
                <div class="row">
                    <label class="text-start fw-bold fs-5" for="first_name">Name *</label>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" id="first_name" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" required>
                    </div>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="diksha">Diksha: Mantra / Jignasu / Karma / Poorna (circle one) Given by: *</label>
                    <input type="text" class="form-control" id="diksha" required>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="spiritual_name">Spiritual Name: (if any)</label>
                    <input type="text" class="form-control" id="spiritual_name">
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="dob">Date of Birth </label>
                    <input type="date" class="form-control" id="dob" required>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label>Gender</label>
                    <div class="row"> 
                        <div class="col fw-lighter">
                            <input type="radio" name="gender" value="Male" required>Male    
                        </div>
                        <div class="col fw-lighter">
                        <input type="radio" name="gender" value="Female" required> Female
                        </div>                      
                    </div>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label>Martial Status</label>
                    <div class="row"> 
                        <div class="col fw-lighter">
                            <input type="radio" name="gender" value="" required>Married   
                        </div>
                        <div class="col fw-lighter">
                        <input type="radio" name="gender" value="" required> Unmarried
                        </div>                      
                    </div>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="phone_mobile">Phone Number: Mobile</label>
                    <input type="number" class="form-control" id="phone_mobile" required>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="phone_home">Phone Number: Home</label>
                    <input type="number" class="form-control" id="phone_home">
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="phone_work">Phone Number: Work</label>
                    <input type="number" class="form-control" id="phone_work">
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="perm_address">Permanent Address</label>
                    <textarea class="form-control" type="text" id="perm_address"></textarea>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="present_address">Permanent Address Pin/Zip</label>
                    <input class="form-control" type="number" id="present_address"></textarea>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="perm_address">Present Address (if different)</label>
                    <textarea class="form-control" type="text" id="perm_address"></textarea>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="present_address">Present Address Pin/Zip (if different)</label>
                    <input class="form-control" type="number" id="present_address"></textarea>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="course">Course that you want to Attend:</label>
                    <select class="form-select" id="course" required>
                        <option>TTC(Teachers Training / Yoga Instructors Course ) 1 MONTH</option>
                        <option>HEALTH MANAGEMENT COURSE  10 DAYS</option>
                        <option>WEEK DAY  COURSE  7 DAYS</option>
                        <option>WEEKENDS RETREAT 3 DAYS</option>
                    </select>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="driver_license">PERSONAL IDENTIFICATION – Driver's Licence</label>
                    <input type="text" class="form-control " id="driver_license" placeholder="driver's licence no:" required >
                    <br>
                    <input type="text" class="form-control" id="driver_license" placeholder="valid until:" required>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="voterID">PERSONAL IDENTIFICATION- Voter ID:</label>
                    <input type="text" class="form-control" id="voterID" required>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="aadhaar">PERSONAL IDENTIFICATION – AADHAAR UID </label>
                    <input type="number" class="form-control" id="aadhaar" required>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="website" required>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="Facebook">Facebook</label>
                    <input type="text" class="form-control" id="Facebook" required>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="TwitterID">Twitter ID</label>
                    <input type="text" class="form-control" id="TwitterID" required>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="nationality">Present Nationality *</label>
                    <input type="text" class="form-control" id="nationality" required>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="nationality_birth">Nationality At Birth *</label>
                    <input type="text" class="form-control" id="nationality_birth" required>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="email">Name, contact no. and/or email address of a Himalaya Yoga teacher as a reference:</label>
                    <input type="email" class="form-control" id="email" required>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="passport_no">Overseas applicants to provide Passport Number</label>
                    <input type="text" class="form-control" id="passport_no">
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="passport_no">Overseas applicants passport Issued by:</label>
                    <input type="text" class="form-control" id="passport_no">
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="passport_no">Overseas applicants passport valid until:</label>
                    <input type="date" class="form-control" id="passport_no" placeholder="">
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="passport_no">Overseas applicants Birthplace:</label>
                    <input type="text" class="form-control" id="passport_no" placeholder="Enter full address as on Passport">
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="native_language">Native language:</label>
                    <input type="text" class="form-control" id="native_language">
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label>English Proficiency </label>
                    <select class="form-select" required>
                        <option>Fluent</option>
                        <option>Average</option>
                        <option>Poor</option>
                    </select>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="other_languages">Other spoken languages</label>
                    <input type="text" class="form-control" id="other_languages">
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label>Level of proficiency in other languages:</label>
                    <select class="form-select" required>
                        <option>Fluent</option>
                        <option>Average</option>
                        <option>Poor</option>
                    </select>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label>Do you have any current physical health problems, allergies, illnesses, or diseases? *</label>
                    <textarea class="form-control" required></textarea>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="other_languages">If you have any current physical health problems, allergies, illnesses or diseases, give full details on a SEPARATE SHEET; including medication being taken, restrictions in and management of the condition, and provide below the contact details and phone number of your doctor in the case of an emergency: *</label>
                    <input type="text" class="form-control" id="other_languages">
                </div>


                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label>Have you suffered from any major illness in the past? *</label>
                    <select class="form-select" required>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="otherIllness">If yes, please give details</label>
                    <textarea class="form-control" id="otherIllness" ></textarea>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label>Do you have a history of any mental health issues, i.e., anxiety, panic attacks, depression, etc.?</label>
                    <select class="form-select" required>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="mentalHealthIssues">If yes, give details of symptoms, duration, treatment and present condition:</label>
                    <textarea class="form-control" id="mentalHealthIssues" ></textarea>
                </div>

                <div class="form-group text-start fw-bold pt-3 fs-5">
                    <label for="emotionalHealth">If you have any current mental or emotional health issues please give full details on a SEPARATE SHEET; including medication being taken, restrictions in management of the issue, and provide below the contact details and phone number of your doctor in the case of an emergency.</label>
                    <input type="text" class="form-control" id="emotionalHealth" ></textarea>
                </div>


                <div class="text-center pt-4">
                    <button type="submit" class="btn btn-warning bg-dark-hover px-3 py-2">Submit</button>
                </div>

            </form>


        </div>
    </div>
</div>

















<?php include "footer.php" ?>