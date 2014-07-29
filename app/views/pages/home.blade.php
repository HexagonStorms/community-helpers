@extends('layouts.master')

@section('content')

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h2>COMMUNITY HELPERS</H2>
                        <p>Community Helpers is an online service that connects seniors (givers) who need odd-jobs done around their home to the youth (helpers) in their community who want to earn money.</p>
                        <p>We envision a world where communities are strong, resourceful, and where neighbors help neighbors like in generations past .</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="register"><button type="button" class="btn btn-warning">Register</button></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="search"><button type="button" class="btn btn-primary">Search Jobs</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <iframe width="100%" height="315" src="//www.youtube.com/embed/3MehcITS9zo" frameborder="0" allowfullscreen></iframe>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sidekick">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Something for Everyone</h2>
                <div class="row">
                        <div class="col-sm-4 text-center">
                            <h3 class="text-center">Parents</h3>
                            <img class="adjustable-width" src="/css/images/parent.jpg" />
                            <p>Your kids are safe with Community Helpers. We know that our helpers are the most important clients. We want to make sure they have all the support they need to complete their jobs and are recieving great experiences at each new opportunity. We have safety guidelines to make sure both helper and giver are being honest and fair with expectations and that they can come to our support team for any reason. If you have any concerns please <a href="http://community-helpers.dev/contact" alt="Contact Us form">contact us</a>.</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3 class="text-center">Youth</h3>
                            <img class="adjustable-width" src="/css/images/teen.jpg" />
                            <p> Saving up for a new Xbox or bicycle? Tired of being bored and broke? There are always new opportinities to earn some cash in our <a href="{{ action('HomeController@search') }}">listings</a> area. Maybe there will be a job that is right for you. You can also earn community service hours for your middle or high school.  At the end of the day, you can feel proud that you are lending a helping hand to someone that really needs it.  What are you waiting for?  <a href="/register">Register</a> today!</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3 class="text-center">Seniors</h3>
                            <img class="adjustable-width" src="/css/images/seniors3.jpg" />
                            <p>If you need jobs around the house completed, let the youth in the community work for you. Post jobs in our easy-to-use listings page. Set the desired due date, time, and price you're willing to pay for the work. You'll be able to review applications from helpers who apply for your job by browsing their work history, reviews made from other givers, and more. Once you choose a helper, sit back and wait for them to complete the work!</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2> Strengthening Communities</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <img class="adjustable-width" src="/css/images/str_comm.png" />
                    </div>
                    <div class="col-sm-6">
                        <p>Community Helpers give residents a better opportunity to connect with neighbors, parents, and senior citizens. By encouraging members to participate, volunteer, and work, we are developing a better environment where our youth can grasp the importance of hard work. Organizations can come together and hire many helpers to improve the park or clean up a highway. Youth are also encouraged to get out of the house and contribute to their community in a way that is beneficial for both parties. What are you waiting for? <a href="/register">Sign up</a> and start helping today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sidekick">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2> About Us </h2>
                <div class="row">

                        <!-- Frank -->
                        <div class="col-sm-4 text-center">

                            <img class="adjustable-width-75 img-circle" src="/css/images/Frank1_250.png" />

                            <br /><br />
                            <div class="row">
                                    <div class="col-sm-4"><a href="https://www.linkedin.com/in/frankpigeonjr"><span class="fa fa-linkedin-square fa-3x"></span></a></div>
                                    <div class="col-sm-4"><a href="https://github.com/fpigeon"><span class="fa fa-github-square fa-3x"></span></a></div>
                                    <div class="col-sm-4"><a href="https://twitter.com/fpigeonjr"><span class="fa fa-twitter-square fa-3x"></span></a></div>
                            </div>

                            <p><strong>Frank Pigeon</strong> is serving at Joint Base San Antonio, Ft. Sam Houston as an IT Specialist. Frank has over 15 years experience in the IT field. Frank is a U.S. Army veteran, has a Bachelor's Degree in Management, (CIS), and is excited to take on new challenges that combine his creativity and business sense.</p>
                        </div>

                        <!-- Jon -->
                        <div class="col-sm-4 text-center">

                            <img class="adjustable-width-75 img-circle" src="/css/images/jon_head.png" />
                            <br /><br />
                            <div class="row">
                                    <div class="col-sm-4"><a href="https://www.linkedin.com/in/jonathanbrobinson"><span class="fa fa-linkedin-square fa-3x"></span></a></div>
                                    <div class="col-sm-4"><a href="https://github.com/jonbrobinson"><span class="fa fa-github-square fa-3x"></span></a></div>
                                    <div class="col-sm-4"><a href="https://twitter.com/jonbrobinson"><span class="fa fa-twitter-square fa-3x"></span></a></div>
                            </div>

                            <p><strong>Jonathan Robinson</strong> is a Full Stack Web Developer with a solid foundation of front-end and back-end programming. Before developing Jonathan worked as a sales rep for a Fortune 500 company and worked in a high school school helping students find community service activites.</p>
                        </div>

                        <!-- Josue -->
                        <div class="col-sm-4 text-center">

                            <img class="adjustable-width-75 img-circle" src="/css/images/Josue_Codeup_1_250.png" />
                            <br /><br />
                            <div class="row">
                                    <div class="col-sm-4"><a href="https://www.linkedin.com/in/josueplaza"><span class="fa fa-linkedin-square fa-3x"></span></a></div>
                                    <div class="col-sm-4"><a href="https://github.com/HexagonStorms"><span class="fa fa-github-square fa-3x"></span></a></div>
                                    <div class="col-sm-4"><a href="https://twitter.com/PlazaJosue"><span class="fa fa-twitter-square fa-3x"></span></a></div>
                            </div>

                            <p><strong>Josue Plaza</strong> is a 21 year-old senior at Texas State University majoring in electronic media. Before becoming a full stack web developer, Josue was the production director for KTSW 89.9FM. In his free time, Josue produces electronic music and composes orchestral score.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop