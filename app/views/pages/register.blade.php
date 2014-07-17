@extends('layouts.master')

@section('content')

<hr class="topbar"/>
<div class="container">
    <br />
    <div class="row">
        <div class="col-sm-12">
            <h1>Create an account</h1>
            <hr />
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-vertical">
                    <fieldset>
                        <div class="row">  
                            <div class="col-sm-12" >
                                <div class="well">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label for="is_helper">I am a</label>
                                            <select class="form-control">
                                                <option>Giver / Looking for help</option>
                                                <option>Helper with parent</option>
                                            </select>
                                        </div>

                                        <h2> Parents </h2>

                                        <label for="first_name">Parent's Full name</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="parent_first_name" class="form-control " id="parent_first_name" placeholder="Parent first name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="parent_last_name" class="form-control " id="parent_last_name" placeholder="Parent last name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="parent_email">Parent Email address</label>
                                        <input type="email" class="form-control " id="parent_email" placeholder="Parent's email">
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_phone">Parent Phone Number</label>
                                        <input type="parent_phone" class="form-control " id="parent_phone" placeholder="###-####-####">
                                    </div>

                                    <h2> Helper </h2>

                                    <div class="form-group">
                                        <label for="first_name">Full name</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="first_name" class="form-control " id="first_name" placeholder="First name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="last_name" class="form-control " id="last_name" placeholder="Last name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Birth Date</label>
                                        <input type="date" class="form-control " id="birth_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Make sure your password is longer than 6 characters">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm your password">
                                    </div>

                                    <h2></h2>

                                    <br />
                                    <h2> Address </h2>	

                                    <div class="form-group">
                                        <label for="street">Street Address</label>
                                        <input type="street" class="form-control" id="street" placeholder="Street Address">
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="apt_num">Apt.#</label>
                                                <input type="apt_num" class="form-control" id="apt_num" placeholder="Apartment Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="city" class="form-control" id="city" placeholder="City">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <select class="form-control">
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
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="zip">Zipcode</label>
                                                <input type="zip" class="form-control" id="zip" placeholder="Zipcode">
                                            </div>
                                        </div>
                                    </div> 


                                    <h2> About You </h2>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="bio" class="control-label adjustable-width">Bio</label><br /><br />
                                            <textarea class="form-control col-sm-8 adjustable-width" rows="6"></textarea>
                                        </div>                        
                                    </div>  			  
                                    
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <a href="account_dashboard"><button type="button" class="margin-save btn btn-primary btn-lg">Create account</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop