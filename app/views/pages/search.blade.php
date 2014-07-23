@extends('layouts.master')

@section('content')

<div class="jumbotron home-search" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br />
                <p class="main_description">Search for jobs in your community</p>

                <div class="well">
                {{ Form::open(array('action' => 'HomeController@search', 'method' => 'GET')) }}
                 <div class="input-group">
                      <input name="search" placeholder="Search posts" type="text" class="form-control">
                      <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                {{ Form::close() }}
                </div><!-- /input-group -->
            </div><!-- /well -->
            
                <br />
                <br />
                <div class="row">
                    <div class="col-sm-12" style="text-align: center">

                    	<!-- Revolving Text -->
                        <div id="quotes">
                            <div class="text-item" style="display: none;">Boom! <strong>Vince</strong> just mowed <strong>Mary T.</strong>'s lawn in <strong>Schertz</strong></div>
                            <div class="text-item" style="display: none;"><strong>Samuel</strong> is available for <strong>home cleaning</strong> in <strong>Boerne</strong></div>
                            <div class="text-item" style="display: none;">Success! <strong>Paul</strong> just washed <strong>Michael M.</strong>'s car in <strong>La Vernia</strong></div>
                            <div class="text-item" style="display: none;">Hey, <strong>Georgia W.</strong> is looking for somebody to walk her dogs in <strong>San Antonio</strong></div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-sm-12 col-md-8">

            <div class="row directory">
                <div class="col-sm-12 ">
                    <h2><span>Categories</span></h2>
                </div>
            </div>

            <div class="row directory">
                <div class="col-xs-12">
                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-tree"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Landscaping</h4></a>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-road"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Outdoor</h4><a/>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Indoor</h4><a/>
                            </div>
                        </div>
                    </div>
                                        <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-paw"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Pets</h4><a/>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Moving</h4><a/>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Other</h4><a/>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="col-xs-12 col-md-4 " >
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-12  col-lg-11 pull-right" >
                    <br class="hidden-sm hidden-xs"/>
                    <br class="hidden-sm hidden-xs"/>
                    <br class="hidden-sm hidden-xs"/>

                    <div class="panel panel-default">
                        <div class="panel-heading">Help guide</div>

                        <ul class="list-group">
                            <li class="list-group-item"><a href="typography">Staying Safe</a></li>
                            <li class="list-group-item"><a href="typography">Applying for jobs guide</a></li>
                            <li class="list-group-item"><a href="typography">Posting jobs guide</a></li>
                            <li class="list-group-item"><a href="typography">Help &amp; contact us</a></li>
                            <li class="list-group-item"><a href="typography">FAQ: Frequently asked questions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jobs Listing -->
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Jobs Listings</div>
                <div class="panel-body">

                    <!-- Headings -->
                    <table class="table">
                        <tr>
                            <th class="text-center">Category</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Due Date</th>
                            <th class="text-center">Apply</th>
                        </tr>

                        <!-- Available Jobs -->
                        @foreach ($jobs as $job)
                            <tr class="text-center">
                                <td>{{ $job->category }}</td>
                                <td>{{ $job->description }}</td>
                                <td>{{ $job->price }}</td>
                                <td>{{ $job->required_date }}</td>
                                <td><a href="{{ action('HomeController@showLogin') }}" class="btn btn-warning btn-md">View</a></td>
                            </tr>
                        @endforeach
                    </table>

                    <div class="col-sm-12 text-center">{{ $jobs->links() }}</div>
                </div>
            </div>
        </div>
    </div>				
</div>

@stop