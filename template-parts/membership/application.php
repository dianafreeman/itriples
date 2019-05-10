 <?php
/**
 * Membership Application Snippet
 * @package itriples-theme
 * 
 * This form is submitted via assets/js/membership.js 
 */
?>

<hr>
<h2 class="undo-uppercase text-center"> We're excited to welcome new members to the growing ISSS Community.
</h2>

<p class="text-left">The International Society for the Study of Self-Injury (ISSS) is an international trans-disciplinary organization that welcomes applications for membership from researchers, clinicians, students, advocates, educators and policy makers across diverse disciplines and from around the world. Membership in the International Society for the Study of Self-Injury is by application and review.<br>
Annual membership dues are $50 (US) for regular members (faculty, clinicians, advocates), and $25 (US) for student members. Dues will be collected annually, and will be requested at the completion of the application review process.</p>

<h2 class="text-center"><?php the_title(); ?></h2>
<p class="text-left">All applications are reviewed by the Membership Board of the ISSS. ISSS is committed to increasing membership; application review is to ensure that every member identifies self-injury as a substantial focus of their activities (research, clinical, advocacy).</p>

<p>To begin, complete the application below.<br> After your application has been successfully submitted, you will be prompted to pay your relevant dues, and complete your 


<form id="membership-app">
  <fieldset class="all-members">
    <legend>Applicant Information</legend>
    <div class="form-group input-name">
      <div class="row">
        <label class="col-sm-2" for="name-prefix">Prefix
          <input id="name-prefix" name="name-prefix" type="text" placeholder="Dr/Ms/Mrs/Mr" class="form-control input-md"></label>
          <label for="name-first" class="col-sm-4">First Name
            <input id="name-first" name="name-first" type="text" placeholder="First" class="form-control" required></label>
            <label for="name-middle" class="col-sm-3">Middle Name
              <input id="name-middle" name="name-middle" type="text" placeholder="Middle" class="form-control input-md"></label>
              <label for="name-last" class="col-sm-3">Last Name
                <input id="name-last" name="name-last" type="text" placeholder="Last" class="form-control input-md"></label>
              </div><!-- end name form input-->
              <label for="applicant-email" class="col-sm-12">Contact E-Mail Address
                <br><small class="form-text text-muted">We will never share your e-mail with anyone else. <a href="#">Privacy Policy</a></small>
                <input id="applicant-email" name="applicant-email" type="email" placeholder="anyone@anything.com" class="form-control input-md"></label>
              </div><!-- end name input --> 
              <div class="form-group">
                <label for="street-address-1">Address</label>
                <input name="street-address-1" type="text" class="form-control" id="street-address-1" placeholder="1234 Main St">
                <label for="street-address-2">Address 2</label>
                <input name="street-address-2" type="text" class="form-control" id="street-address-2" placeholder="Apartment, studio, or floor">
              </div><!-- end form group address-->
              <div class="form-group">
                <label for="country" class="col-sm-6">Country
                  <select class="form-control crs-country" id="applicant-country" name="applicant-country" data-region-id="applicant-state-province">
                    <option>Choose a country</option>
                  </select>
                </label>
                <label for="country" class="col-sm-5">State/Province
                  <select class="form-control"  id="applicant-state-province" name="applicant-state-province">
                    <option>Choose a state or province</option>
                  </select>
                </label>
              </div><!-- end country form group --> 
              <hr>
              <div id="membership-selection" class="btn-group btn-group-toggle col-sm-12" data-toggle="buttons">
                <div class="col-sm-3">
                  <p>Choose a Membership Type:</p>
                </div>

                <label class="col-md-6 btn btn-outline-primary active">Professional Membership
                  <input type="radio" name="membership-type" id="selectProfApp" autocomplete="off" value="professional-membership" hidden> 
                </label>
                <label class="col-md-6 btn btn-outline-primary">Student Membership
                  <input type="radio" name="membership-type" id="selectStudentApp" autocomplete="off" value="student-membership" hidden> 
                </label>
              </div>
            </fieldset>

            <div id="professional-app">
              <fieldset class="professional col-sm-12">
                <legend> Professional Information</legend>
                <div class="row">
                  <div class="degrees form-group col-sm-3">
                    <label class="form-text">Degree(s)
                      <small class="form-text text-muted">Check all that apply</small></label>

                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="prof-degree-phd" name="prof-degree-phd" checked="">
                        <label class="custom-control-label" for="prof-degree-phd">Ph.D</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="prof-degree-ma-ms" name="prof-degree-ma-ms" >
                        <label class="custom-control-label" for="prof-degree-ma-ms">MA/MS</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="prof-degree-ba-bs" name="prof-degree-ba-bs">
                        <label class="custom-control-label" for="prof-degree-ba-bs">BA/BS</label>
                      </div>
                    </div><!--end Degrees Form group-->
                    <label for="length-of-employment" class="col-sm-3">Current Employer
                      <input class="form-control" type="text" name="prof-current-employer">
                    </label>
                    <label for="length-of-employment" class="col-sm-3">Current Position
                      <input class="form-control" type="text" name="prof-current-position" >
                    </label>
                    <label for="length-of-employment" class="col-sm-3">Length of Employment
                      <input class="form-control" type="text" name="prof-length-of-employment" id="prof-length-of-employment">
                    </label>
                  </div><!-- end row-->
                </fieldset>
                </div><!-- end professional app--> 
                <div id="student-app">
                  <fieldset class="student">
                    <legend> Student Application</legend>
                    <div class="form-group">
                      <label for="student-current-school" class="col-md-4">Current School
                        <input id="student-current-school" name="student-current-school" type="text" placeholder="Example University" class="form-control input-md">
                      </label> 
                      <label for="anticipated-degree" class="col-md-4">Anticipated Degree
                        <select name="" class="form-control" id="anticipated-degree">
                          <option value="">...</option>
                          <option value="phd">Ph.D</option>
                          <option value="masters">Masters</option>
                          <option value="other">Other</option>
                        </select>
                        <div class="hidden degree-specify">
                          <label for="degree-specify" class="form-control col-sm-12">Please Specify
                            <input id="degree-specify"  name="degree-specify" type="text" class="form-control">
                          </label>
                        </div>
                      </label>
                      <label for="grad-date" >Anticipated Graduation Date
                        <input class="form-control" type="date" id="grad-date" name="anticipated-grad-date">
                      </label>
                    </div>
                    <hr> 
                    <legend>Other Graduate Information</legend>
                    <label for="other-graduate-school" class="col-md-4">School
                      <input id="other-graduate-school" type="text" class="form-control" >
                    </label>
                    <label for="other-graduate-degree" class="col-md-4">Degree
                      <select id="other-graduate-degree" class="form-control" >
                        <option value="">...</option>
                        <option value="phd">Ph.D</option>
                        <option value="masters">Masters</option>
                        <option value="other">Other</option>
                      </select>
                      <div class="hidden other-grad-degree-specify">
                        <label for="other-grad-degree-specify" class="form-control">Please Specify
                          <input id="other-grad-degree-specify" type="text" class="form-control">
                        </label>
                      </div>
                    </label>
                    <label for="other-field-of-study" class="col-md-4">Field of Study
                      <input type="text" class="form-control" id="other-field-of-study" name="other-field-of-study">
                    </label>
                  </fieldset><!-- end professional student information --> 

                </div><!-- end student app tab--> 

                <fieldset id="related-work" class="all-members">
                  <legend>Related Work History
                    <small class="form-text text-muted">Include up to 3 positions</small>
                  </legend>
                  <div class="work-history1 form-group row">
                    <label for="related-job-title1" class="col-md-4">Job Title
                      <input class="form-control" type="text" name="prof-related-job-title1" id="prof-related-job-title1">
                    </label>
                    <label for="job-duties1" class="col-md-4">Duties
                      <textarea class="form-control" type="text" name="prof-related-job-duties1" id="prof-related-job-duties1"></textarea>
                    </label>
                    <label for="selected-accomplishments1" class="col-md-4">Selected Accomplishments
                      <textarea class="form-control" type="text" name="prof-selected-accomplishments1" id="prof-selected-accomplishments1"></textarea>

                    </label>
                  </div><!-- end related work history form group -->

                  <div class="work-history2 form-group row">
                    <label for="related-job-title2" class="col-md-4">Job Title
                      <input class="form-control" type="text" name="prof-related-job-title2">
                    </label>
                    <label for="job-duties2" class="col-md-4">Duties
                      <textarea class="form-control" type="textarea" name="prof-related-job-duties2"></textarea>
                    </label>
                    <label for="selected-accomplishments2" class="col-md-4">Selected Accomplishments
                      <textarea class="form-control" type="textarea" name="prof-selected-accomplishments2"></textarea>
                    </label>
                  </div><!-- end related work history form group -->
                  <div class="work-history3 form-group row">
                    <label for="related-job-title3" class="col-md-4">Job Title
                      <input class="form-control" type="text" name="prof-related-job-title3">
                    </label>
                    <label for="job-duties3" class="col-md-4">Duties
                      <textarea class="form-control" type="text" name="prof-related-job-duties3"></textarea>
                    </label>
                    <label for="selected-accomplishments3" class="col-md-4">Selected Accomplishments
                      <textarea class="form-control" type="text" name="prof-selected-accomplishments3"></textarea>
                    </label>
                  </fieldset><!-- end professional app --> 

                  <fieldset>
                    <legend>Supporting Information</legend>
                    <div class="form-group">
                      <label for="cv-upload" class="custom-file btn-secondary">
                        <i class="fas fa-upload" ></i><span>
                        Please upload your C.V or Resume</span>
                        <input id="cv-upload" type="file" class="form-control-file" hidden>
                      </label>
                    </div><!-- end cv upload form group --> 


                    <div class="prof-references">
                      <hr>
                      <legend>Professional Reference(s)</legend>
                      <small class="form-text text-muted">You may include up to 3 references.</small>
                      <br>
                      <div class="form-group row" id="ref1">
                        <label for="ref1-full-name" class="col-md-4">Reference 1: Full Name
                          <input type="text" class="form-control" id="ref1-full-name" name="ref1-full-name">
                        </label>
                        <label for="ref1-phone" class="col-md-4">Reference 1: Contact Phone
                          <input type="tel" class="form-control" id="ref1-phone">
                        </label>
                        <label for="ref1-full-name" class="col-md-4">Reference 1: Contact E-Mail
                          <input type="email" class="form-control" id="ref1-email">
                        </label>
                      </div>
                      <div class="form-group row" id="ref2">
                        <label for="ref2-full-name" class="col-md-4">Reference 2: Full Name
                          <input type="text" class="form-control" id="ref2-full-name">
                        </label>
                        <label for="ref2-phone" class="col-md-4">Reference 2: Contact Phone
                          <input type="tel" class="form-control" id="ref2-phone">
                        </label>
                        <label for="ref2-full-name" class="col-md-4">Reference 2: Contact E-Mail
                          <input type="email" class="form-control" id="ref2-email">
                        </label>
                      </div>
                      <div class="form-group row" id="ref1">
                        <label for="ref3-full-name" class="col-md-4">Reference 3: Full Name
                          <input type="text" class="form-control" id="ref3-full-name">
                        </label>
                        <label for="ref3-phone" class="col-md-4">Reference 3: Contact Phone
                          <input type="tel" class="form-control" id="ref3-phone">
                        </label>
                        <label for="ref3-full-name" class="col-md-4">Reference 3: Contact E-Mail
                          <input type="email" class="form-control" id="ref3-email">
                        </label>
                      </div>
                    </fieldset><!-- end professional references --> 
                  </div>
                  <div class="col-sm-12 text-center">
                    <input type="submit" class="btn btn-outline-primary btn-lg" id="submit-application" aria-valuetext="Submit this Application">
                    <div id="loader"></div>

                  </div>

