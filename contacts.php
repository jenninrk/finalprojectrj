<?php

  include_once "header.php";

 ?>

        <div class="breadcrumbs1_wrapper">
            <div class="container">
                <div class="breadcrumbs1"><a href="index.php">Home</a><span>/</span>contact us</div>
            </div>
        </div>

        <!--<div id="google_map"></div>-->

        <div id="content">
            <div class="container">

                <h1>DON’T HESITATE TO CONTACT US</h1>

                <div class="row">
                    <div class="col-sm-8">

                        <div class="content-part">
                            <div id="note"></div>
                            <div id="fields">
                                <form action="contact.inc.php" class="form-horizontal" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputName">Your Name</label>
                                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputEmail">Email</label>
                                                <input type="text" class="form-control" id="inputEmail" name="email" placeholder="E-Mail">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="inputSubject">Subject</label>
                                                <input type="text" class="form-control" id="inputSubject" name="subject" value="Subject" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="inputMessage">Your Message</label>
                                                <textarea class="form-control" rows="10" id="inputMessage" name="content" placeholder="Message">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name = "submit" class="btn-default btn-cf-submit">Send message</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">

                        <div class="sidebar-part">
                            <h5>address</h5>
                            <p>
                                The Cirrus Group.<br>
                                60 Crosswicks Street.<br>
                                Bordentown, New Jersey 08505., USA
                            </p>

                            <div class="hl2"></div>

                            <h5>contact info</h5>

                            <p>
                                E-mail: support@thecirrusgroupllc.com<br>
                                Telephone: +1 (833) 55 Cirrus<br>
                                FAX: +1 (833) 55 Cirrus
                            </p>

                            <div class="hl2"></div>

                            <h5>working hours</h5>

                            <p>
                                Monday to Friday from 08.00AM to 5.00PM EST
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

<?php

  include_once "footer.php"

 ?>
