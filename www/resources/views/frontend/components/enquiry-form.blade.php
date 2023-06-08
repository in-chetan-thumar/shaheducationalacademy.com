<div class="widget content-block">
    <h3 class="block-title">Enquire</h3>
    <div class="flash-success">
        Your Mail is sent successfully! We will get back to you.
    </div>
    <form method="POST" role="form" data-request="Enquiry::onSend"
        data-request-success="this.reset();$('.flash-success').show();">
        <div role="form" class="wpcf7" id="wpcf7-f885-p883-o1" lang="en-US" dir="ltr">
            <div class="screen-reader-response"></div>
            <div style="width: 252px;">
                <p>Name*
                    <br>
                    <span class="wpcf7-form-control-wrap your-name spancontact">
                        <input type="text" name="name" value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input_contact"
                            aria-required="true" aria-invalid="false" data-map-form-field="name">
                    </span>
                    <span style="color:red;"></span>
                </p>
                <p>Email*
                    <br>
                    <span class="wpcf7-form-control-wrap your-email spancontact">
                        <input type="email" name="email" value="" size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email input_contact"
                            aria-required="true" aria-invalid="false" data-map-form-field="email">
                    </span>
                    <span style="color:red;"></span>
                </p>
                <p>I am a*
                    <br>
                    <span class="wpcf7-form-control-wrap menu-805">
                        <div class="selector cotactselectors " id="uniform-i-am" style="width: 210px;">
                            <span style="width: 124.938px; user-select: none;display: none;">Please
                                choose one</span>
                            <select name="type"
                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required iam" id="i-am"
                                aria-required="true" aria-invalid="false">
                                <option value="">Please choose one</option>
                                <option value="Student">Student</option>
                                <option value="Parent">Parent</option>
                                <option value="Professor">Professor</option>
                            </select>
                        </div>
                    </span>
                    <br><span style="color:red;"></span>
                </p>
                <p>Contact No
                    <br>
                    <span class="wpcf7-form-control-wrap tel-249 spancontact">
                        <input type="tel" name="contact" value="" size="40" maxlength="10"
                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel input_contact"
                            id="phone" aria-invalid="false" data-map-form-field="phone"></span>
                    <span style="color:red;"></span>
                </p>
                <p>Query*
                    <br>
                    <span class="wpcf7-form-control-wrap your-message spancontact">
                        <textarea name="query" cols="40" rows="10"
                            class="wpcf7-form-control wpcf7-textarea usertextarea input_contact" aria-invalid="false"></textarea>
                    </span>
                    <span style="color:red;"></span>
                </p>
                <p>
                    <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit usercontactbtn">
                    <span class="ajax-loader"></span>
                </p>
            </div>
            <div class="wpcf7-response-output wpcf7-display-none"></div>
        </div>
    </form>
</div>
