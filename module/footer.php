<?php

	$var='	<footer class="section fp-auto-height">
                <a href="../about-us" class="about-rotate">About us</a>
                <div class="container">
                    <div class="contact">
                        <span>Follow us </span>
                        <a target="_blank" href=" https://twitter.com/404events" class="social-icon"><i class="ic-twitter2"></i></a>
                        <a target="_blank" href="https://www.facebook.com/404events/" class="social-icon"><i class="ic-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/404_events/" class="social-icon"><i class="ic-instagram"></i></a>
                        <a href="../#" class="contact-us">Contact us ></a>
                    </div>
                    <div class="lead">Get ready for the <span class="text-semi">ultimate tech meetup.</span></div>
                    <p style="font-family:"andale_mono"; font-size:16px;">Ticket registration is from 10am on Monday 11th September.<br>You can email us now at <a href="mailto:hello@404.ie" style="color:#fa2e70">hello@404.ie</a> and we’ll send you the link to register.</p>
                    <button type="button" class="btn btn-border btn-190 btn-register-interest"><span>I WANT TO GO</span></button>
                        <a href="https://www.eventbrite.ie/e/404-tickets-35232778188" target="_blank" type="button" class="btn btn-border btn-190"><span>I WANT TO GO</span></a>
                    <div class="about-contact visible-xs"><a href="../about-us">About us</a> | <a href="../#" class="contact-us-xs">Contact us</a></div>
                    <div class="crafted"><a href="../code-of-conduct">Code of Conduct</a>  |  crafted by <a href="http://www.artizan.ie/" target="_blank">Artizan</a></div>
                </div>
                <div class="footer-contact">
                    <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                    <div class="center-middle">
                        <div class="container">
                            <address>18 Eustace Street, Temple Bar, Dublin 2</address>
                            <div class="email">&lt;Email: <a href="mailto:hello@404.ie">hello@404.ie</a>&gt;</div>
                        </div>
                    </div>
                </div>
            </footer>
            
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5953d9c78d9f1eb5"></script> 
        </div>

                
        <div id="register-interest">
            <button type="button" class="close" data-dismiss="register-interest" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="register-interest-wrap">
                <div class="container narrow">
                    <div class="letters"><span class="letter text-danger">T</span><span class="letter text-danger">i</span><span class="letter text-danger">c</span><span class="letter text-danger">k</span><span class="letter text-danger">e</span><span class="letter text-danger">t</span><span class="letter text-danger">s</span></div>
                    <h2 class="title-45">Register your <strong>interest for 404.</strong></h2>
                    
                    <p>404 is a one-day, invitation-only event for experienced techies. <span class="text-primary">Tickets are priced at €25.00 each.</span></p>

                    <p>To ensure that 404 is the right event for you, and to give the best possible experience for all involved, we would appreciate if you could take a few seconds to answer the questions below. </p>
                     
                    <p>We will get back to you via email if your invitation request is accepted. We hope to see you at 404!</p>
                    <form id="register-interest-form" class="form-inverse" data-toggle="validator" method="post" action="experience">
                        <input type="hidden" name="nospamfield" value="" />
                        <input type="hidden" name="register" value="1" />
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>*First Name</label>
                                    <input type="text" class="form-control" required name="first-name" value="">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>*Last Name</label>
                                    <input type="text" class="form-control" required name="last-name" value="">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="email-label">*Email address</label>
                                    <input type="email" class="form-control" required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>*How long have you been working in tech?</label>
                                    <select class="form-control" required name="duration">
                                        <option>Please select a subject</option>
                                        <option value="5 years +"  >5 years +</option>
                                        <option value="3-5 years"  >3-5 years</option>
                                        <option value="1-3 years"  >1-3 years</option>
                                        <option value="Up to 1 year"  >Up to 1 year</option>
                                        <option value="I dont work in tech"  >I dont work in tech</option>
                                        <option value="I don’t work in tech but I’d like to"  >I don’t work in tech but I’d like to</option>
                                    </select>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>*What is your current role / job title?</label>
                            <input type="text" class="form-control" required name="job" value="">
                            <span class="help-block with-errors"></span>
                        </div>
                        <div class="form-group">
                            <label>*What programming languages (if any) do you use? </label>
                            <input type="text" class="form-control" required name="languages" value="">
                            <span class="help-block with-errors"></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-220"><span>REGISTER INTEREST</span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="register-interest-thanks">
                <div class="center-middle">
                    <div class="ri-inner">
                        <h3>Thank you!</h3>
                        <p>Thanks for registering your interest for 404.</p>
                       <p>We will get back to you via email if your invitation request is accepted.</p>
                        <p>Team 404</p>
                        <button type="button" class="btn btn-primary" id="btn-dissmiss-register"><span>OK</span></button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.fullpage.js"></script>
        <script src="../assets/js/mgGlitch.min.js"></script>
        <script src="../assets/js/iscroll.js"></script>
        <script src="../assets/js/validator.min.js"></script>
        <script src="../assets/js/cookie.min.js"></script>
        <script src="../assets/js/script.js"></script>
		<script src="../assets/js/jquery.matchHeight.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;key=AIzaSyCHnYfFsRTtW9ZuoghwV5dYGXcWebwYJMQ"></script>';
	echo  $var;
?>
