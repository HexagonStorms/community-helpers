@extends('layouts.master')

@section('content')

<hr class="topbar"/>
<div class="container">

    <div class="row">
        <div class="col-sm-3">
            <br><br><br><br>
            <div class="sidebar-account">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                My account
                            </div>
                            <div class="panel-body">
                                <ul class="nav">
                                    <li>
                                        <a class="active" href="/../account_settings">Account Settings</a>
                                    </li>
                                    @if($user->is_helper == True)
                                    <li>
                                        <a class="active" href="{{ action('UsersController@dashboard_helper', $user->id) }}">Dashboard</a>
                                    </li>
                                    @elseif($user->is_helper == False)
                                    <li>
                                        <a class="active" href="{{ action('UsersController@dashboard_creator', $user->id) }}">Dashboard</a>
                                    </li>
                                    @endif
                                    <li>
                                        <a class="active" href="{{ action('UsersController@edit', $user->id) }}">Edit Profile</a>
                                    </li>
                                    <li>
                                        <a class="active" href="{{ action('UsersController@show', $user->id) }}">View Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-9">
            <h1 >Update Account</h1>
            <hr />
            <div class="row">
                <div class="col-sm-12">
                    {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'files' => true)) }}
                        <div class="row">
                            <div class="col-sm-12" >
                                <div class="well">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{ Form::label('image', 'Add Image') }}<br>
                                                {{ Form::file('image') }}
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="is_helper" class="form-control">
                                                    <option value="NULL">Choose Account Type</option>
                                                    <option value="0">Giver / Looking for help</option>
                                                    <option value="1">Helper with parent</option>
                                                    {{ $errors->first('is_helper', '<span class="help-block">:message</span>')}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) }}
                                                {{ $errors->first('first_name', '<span class="help-block">:message</span>')}}
                                            </div>
                                            <div class="col-sm-6">
                                                {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
                                                {{ $errors->first('last_name', '<span class="help-block">:message</span>')}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::text('birth_date', null, ['class' => 'form-control', 'placeholder' => 'Birth Date: YYYY-MM-DD']) }}
                                        {{ $errors->first('birth_date', '<span class="help-block">:message</span>')}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                                        {{ $errors->first('email', '<span class="help-block">:message</span>')}}
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{ Form::text('parent_first_name', null, ['class' => 'form-control', 'placeholder' => 'Parent: First Name']) }}
                                                {{ $errors->first('parent_first_name', '<span class="help-block">:message</span>')}}
                                            </div>
                                            <div class="col-sm-6">
                                                {{ Form::text('parent_last_name', null, ['class' => 'form-control', 'placeholder' => 'Parent: Last Name']) }}
                                                {{ $errors->first('parent_last_name', '<span class="help-block">:message</span>')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{ Form::email('parent_email', null, ['class' => 'form-control', 'placeholder' => 'Parent: email']) }}
                                                {{ $errors->first('parent_email', '<span class="help-block">:message</span>')}}
                                            </div>
                                            <div class="col-sm-6">
                                                {{ Form::text('parent_phone', null, ['class' => 'form-control', 'placeholder' => 'Parent: Phone']) }}
                                                {{ $errors->first('parent_phone', '<span class="help-block">:message</span>')}}
                                            </div>
                                        </div>
                                    </div>


                                    <h2></h2>

                                    <h2> Address </h2>

                                    <div class="form-group">
                                        <label for="street">Street Address</label>
                                        {{ Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Street Address']) }}
                                        {{ $errors->first('street', '<span class="help-block">:message</span>')}}
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::text('apt_num', null, ['class' => 'form-control', 'placeholder' => 'Apartment Number #']) }}

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) }}
                                            {{ $errors->first('city', '<span class="help-block">:message</span>')}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" name="state" id="state">
                                                    <option value="NULL">Choose State</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                                {{ $errors->first('state', '<span class="help-block">:message</span>')}}
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Zipcode']) }}
                                                {{ $errors->first('zip', '<span class="help-block">:message</span>')}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">

                                            {{ Form::submit('Update', ['class' => 'margin-save btn btn-primary btn-lg']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@stop