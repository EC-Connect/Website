<?php
$content = <<<EOF
<!-- Content Container -->
<div class="container">
    <br/>
    <br/>
    <br/>

    <div>
        <h1>About Us</h1>
        <hr>
        <div id="team_bio">
            <div class="row">
                <div class="col-md-3"><img src="media/bio-nancy_grden.jpg" width="125px"/></div>
                <div class="col-md-9">
                    <h4>Nancy Grden - Team Mentor</h4>
                    <p>Nancy L. Grden, general manager for Genomind and a long-time entrepreneur, has been hired as the
                        first executive director for the Strome Entrepreneurial Center, beginning in January.</p>
                    <p>Grden, a strong supporter of Old Dominion University and its efforts to create a campus-wide
                        entrepreneurial culture, previously served as chair of the Executive Advisory Council for Old
                        Dominion's Strome College of Business, and was appointed to the Board of Trustees of the ODU
                        Educational Foundation.</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3"><img src="media/bio-chris_bliss.jpg" width="125px"/></div>
                <div class="col-md-9">
                    <h4>Christopher "Chris" Bliss</h4>
                    <p>Favourite colour is green. I do indeed spell words with the old 'ou' instead of the new age 'o'. I
                also prefer 'grey' over 'gray'. I enjoy cold days in doors with a glass of whiskey and good literature.
                Warm days indoors with rum and a good book. I like art, photography and newer glitching. Stage plays,
                operas, punk concerts, and tattoos. And if I know they got pocket aces and they value bet me in, any
                hand is good.</p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-3"><img src="media/bio-shawn_casey.jpg" width="125px"/></div>
                <div class="col-md-9">
                    <h4>Shawn Casey</h4>
                    <p>Howdy y'all! My name is Shawn Casey. I am a Computer Science major. This is one of the last few
                classes required for graduation for me so I'm excited to be finishing up. I'm looking forward to having
                a more hands on experience on how the things we've learned thus far are applied in real world working
                environments. I am not currently employed and haven't been for 3 years, but am ready to start working
                again. Out of high school I worked for a high end cabinetry company doing all their design work on CAD.
                When the economy crashed so did my field. I've also done a good bit of masonry work and started a stone
                masonry company. My most recent job was doing graphic arts and web upkeep for a Carhartt distributor. I
                am from the Raleigh area but have lived in Al Ain (an hour south of Dubai) since August 2012. My wife is
                a teacher out here and I'm a stay-at-home father and student (hence not working for almost 3 years).
                Looking forward to this class!</p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-3"><img src="media/bio-pat_ferate.jpg" width="125px"/></div>
                <div class="col-md-9">
                    <h4>Patrick Ferate</h4>
                    <p>My name is Pat Ferate and I am a distance learning student from Washington State. I've been working
                as a System Engineer for Northrop Grumman for 4 years. Before that I was a System Administrator and
                Developer for a small private company for 7 years. I have experience in a wide range of technologies,
                but I love working with Linux and Python.</p>

                <p>I have 3 daughters (1, 4, and 6) to keep me plenty busy. I love listening to independent hip-hop
                    music. I also contribute to a few open source projects and have some personal software projects that
                    I've been working off and on for a while.</p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-3"><img src="media/bio-matthew_payne.jpg" width="125px"/></div>
                <div class="col-md-9">
                    <h4>Matthew Payne</h4>
                    <p>My name is Matthew Payne. I'm a Computer Science major in my senior year of study. I'm taking this
                course as a part of my required curriculum and hope it helps me in my future endeavors as a software
                engineer in knowing how to present a product I want to pitch to someone. I'm currently working part time
                as a knife salesman. I enjoy playing video games, watching shows, and reading comics. I'm a pretty
                stereotypical nerd to say the least. Either way I hope this is a good semester, and I hope to do well in
                this class.</p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-3"><img src="https://s.gravatar.com/avatar/ccf00de89ec54577fb9fd612358a9808?s=125" width="125px"/></div>
                <div class="col-md-9">
                    <h4>John Spaetzel</h4>
                    <p>I'm hoping to gain more hands on experience with the project/development lifecycle, particularly more
                insight into the planning phases of a new project.
                I am currently employed as a junior software engineer with Outsite Networks in Norfolk, VA. I work with
                C#, T-SQL, and related technologies for our customer loyalty services. I previously worked at
                InMotionHosting as an expert support technician, I provided front line support for our unix based
                services primarily related to website hosting.</p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-3"><img src="media/bio_picture_wstrong.jpg" width="125px"/><</div>
                <div class="col-md-9">
                    <h4>Will Strong</h4>
                    <p>My name is William Strong and I’m a CS undergraduate student. I’m taking this class to meet the
                requirements for my degree. I’m currently employed at HRSD as a programmer analyst. I mostly work on
                systems integration, but do some application development from time to time. Before HRSD I worked as a
                programmer at Amerigroup (which was bought out by Well Point) doing application and report development.
                In my spare time (for which I have little of) I like to spend with my wife and kids and attempting to
                play the guitar.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content Container -->
EOF;
require_once('display.php');