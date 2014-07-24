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
                        <div class=" input-group-addon hidden-xs">
                                                        <div class="btn-group" >
                                                            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
                                                                Filter by category <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#"> <i class="fa fa-home"></i> Indoor</a></li>
                                                                <li><a href="#"><i class="fa fa-tree"></i> Landscaping</a></li>
                                                                <li><a href="#"><i class="fa fa-truck"></i> Moving</a></li>
                                                                <li><a href="#"><i class="fa fa-road"></i> Outdoor</a></li>
                                                                <li><a href="#"><i class="fa fa-paw"></i> Pets</a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i> Other</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        {{ Form::close() }}
                    </div><!-- /input-group -->
            </div><!-- /well -->
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
                                <a href="?filter=landscaping"><h4>Landscaping</h4></a>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-road"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="?filter=outdoor"><h4>Outdoor</h4><a/>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="?filter=indoor"><h4>Indoor</h4><a/>
                            </div>
                        </div>
                    </div>
                                        <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-paw"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="?filter=pets"><h4>Pets</h4><a/>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="?filter=moving"><h4>Moving</h4><a/>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="?filter=other"><h4>Other</h4><a/>
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
                            @if((Auth::check() && Auth::user()->is_helper == TRUE)|| Auth::guest())
                                <th class="text-center">Apply</th>
                            @endif
                        </tr>

                        <!-- Available Jobs -->
                        @foreach ($jobs as $job)
                            <tr class="text-center">
                                <td class="text-center">
                                    @if ( $job->category == 'Indoor')
                                        <i class="fa fa-home fa-3x"></i></a></li>
                                    @elseif ( $job->category == 'Landscaping')
                                        <i class="fa fa-tree fa-3x"></i></a></li>
                                    @elseif ( $job->category == 'Moving')
                                        <i class="fa fa-truck fa-3x"></i></a></li>
                                    @elseif ( $job->category == 'Outdoor')
                                        <i class="fa fa-road fa-3x"></i></a></li>
                                    @elseif ( $job->category == 'Pets')
                                        <i class="fa fa-paw fa-3x"></i></a></li>
                                    @elseif ( $job->category == 'Other')
                                        <i class="fa fa-star fa-3x"></i></a></li>
                                    @endif
                                </td>
                                <td>{{ $job->description }}</td>
                                <td>${{ $job->price }}</td>
                                <td>{{ date("d F Y",strtotime($job->required_date)) }}</td>
                                @if (Auth::check() && Auth::user()->is_helper == TRUE)
                                    <td><a href="{{ action('JobsController@show', $job->id) }}" class="btn btn-warning btn-md">Apply</a></td>
                                    <td><!-- Button trigger modal -->
                                    <button class="btn btn-primary btn-lg modalToggle" data-jobid="{{{ $job->id }}}">
                                      Demo Modal
                                    </button></td>
                                @elseif (Auth::guest())
                                    <td><a href="{{ action('HomeController@showLogin') }}" class="btn btn-warning btn-md">View</a></td>
                                @else
                                @endif
                            </tr>
                        @endforeach
                    </table>

                    <div class="col-sm-12 text-center">{{ $jobs->links() }}</div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Available Job</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h6>Category</h6>
                        <p id="jobCategory">Test</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h6>Description</h6>
                        <p id="jobDescription">Test2</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h6>Price</h6>
                        <p id="jobPrice">test3</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h6>Due Date</h6>
                        <p id="jobDueDate">New Date</p>
                    </div>

                    <div class="col-sm-6">
                        <h6>Time</h6>
                        <p id="jobTime">Its Time</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h6>Created At</h6>
                        <p id="jobCreatedAt">Date Created</p>
                    </div>

                    <div class="col-sm-6">
                        <h6>By</h6>
                        <p id="jobName">First Name Last Name</p>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn-apply" data-jobid="">Apply</button>
              </div>
            </div>
          </div>
        </div>
    </div>              
</div>

@stop

@section('bottomscript')

<script type="text/javascript">
    $(".modalToggle").on('click', function() {
        var jobId = $(this).data('jobid');

        $.get("/modal/" + jobId, {}, function(data) {
            // set your values from the data object
            $("#jobCategory").text(data.category);
            $("#jobDescription").text(data.description);
            $("#jobPrice").text(data.price);
            $("#jobDueDate").text(data.required_date);
            $("#jobTime").text(data.required_time);
            $("#jobName").text(data.first_name+' '+data.last_name);
            $("#btn-apply").data('jobid', data.job_id);
            $("#myModal").modal();
        });
    });

    $("#btn-apply").on('click', function() {

        var jobId = $(this).data('jobid');

        var toSend = {
            'id': jobId
        }

        $.ajax({
            url: "/applymodal",
            type: "POST",
            data: toSend,
            dataType: "json",
            success: function() {
                $("#myModal").modal('hide');
                window.location.reload();
            }
        });
    });
</script>

@stop