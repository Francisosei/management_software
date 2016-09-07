@extends('layouts.app')


@section('content')
<div id="main">


    <div class="row-fluid">
        <div class="span12">
            <div class="box">
                <div class="box-title">
                    <h3>
                        <i class="icon-reorder"></i>
                        REGISTERED MEMBERS
                    </h3>
                </div>


                <div class="box-content">
                    <form action="{{url('save')}}" method="POST" class='form-horizontal'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="row-fluid">
                            <div class="span5">
                                <div class="control-group">
                                    <label for="textfield" class="control-label">Enter Your Name</label>
                                    <div class="controls">
                                        <input type="text" name="Fullname" id="textfield"  class="input-xlarge">
                                        <span class="help-block">Please Enter Your Full Name</span>
                                    </div>
                                </div>
                                <!--<div class="control-group">
                                    <label for="textfield" class="control-label">Date of Birth</label>
                                    <div class="controls">
                                        <input type="text" name="birthdate" id="textfield"  class="input-xlarge">
                                        <span class="help-block">YEAR-MONTH-DAY</span>
                                    </div>
                                </div>-->
                                <div class="control-group">
                                    <label for="textfield" class="control-label">Work by Profession</label>
                                    <div class="controls">
                                        <input type="text" name="profession" id="textfield"  class="input-xlarge">
                                        <span class="help-block">Where do you work</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="textfield" class="control-label">Do You Have Health Issue</label>
                                    <div class="controls">
                                        <input type="text" name="health_status" id="textfield"  data-rule-dateISO="true" data-rule-required="true" class="input-xlarge">
                                        <span class="help-block">If Yes write something about it</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Marriage Status</label>
                                    <div class="controls">
                                        <label class='radio'>
                                            <input type="radio" name="marriage_status" value="Single"> Single 
                                        </label>
                                        <label class='radio'>
                                            <input type="radio" name="marriage_status" value="Married"> Married
                                        </label>
                                        <label class='radio'>
                                            <input type="radio" name="marriage_status" value="Searching"> Searching
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="textarea" class="control-label">Residential Address</label>
                                    <div class="controls">
                                        <textarea name="residential_address" id="textarea" class="input-block-level"> </textarea>
                                    </div>
                                </div>

                            </div>


                            <div class="span7">
                                <div class="control-group">
                                    <label for="textarea" class="control-label">Phone Number</label>
                                    <div class="controls">
                                        <input type="text" name="contact" id="textfield" class="input-xlarge mask_phone">
                                        <span class="help-block">Format: (999) 999-9999</span>
                                    </div>

                                </div>
                                <!--<div class="control-group">
                                    <label for="select" class="control-label">Select Group</label>
                                    <div class="controls">
                                        <select name="names" id="select" class='input-large'>
                                            <option value="Select Group">Church Fellowship</option>
                                            <option value="Men's Fellowship">Men's Fellowship</option>
                                            <option value="Women Fellowship ">Women Fellowship</option>
                                            <option value="Youth Fellowship">Youth Fellowship</option>
                                            <option value="Junior Youth Choir">Junior Youth Choir</option>
                                            <option value="Royal Generation">Royal Generation</option>
                                        </select><br >
                                        <span>Select The Group you belong to</span>
                                    </div>
                                </div>-->
                               <!-- <div class="control-group">
                                    <label for="select" class="control-label">Services</label>
                                    <div class="controls">
                                        <select name="services" id="select" class='input-large'>
                                            <option value="Select Group">Sunday Service</option>
                                            <option value="Choir">Choir</option>
                                            <option value="Sunday Teachers ">Sunday Teachers</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Bible Readers">Bible Readers</option>
                                            <option value="User">User</option>
                                            <option value="Pastor">Pastor</option>
                                            <option value="Bible Leaders">Bible Leaders</option>
                                            <option value="Cleaners">Cleaners</option>

                                        </select><br >
                                        <span>Select The Service you belong to</span>
                                    </div>
                                </div>-->

                                <!-- <div class="control-group">
                                     <label class="control-label">Checkboxes</label>
                                     <div class="controls">
                                         <label class='checkbox'>
                                             <input type="checkbox" name="checkbox"> Lorem ipsum eiusmod
                                         </label>
                                         <label class='checkbox'>
                                             <input type="checkbox" name="checkbox"> ipsum eiusmod
                                         </label>
                                         <label class='checkbox'>
                                             <input type="checkbox" name="checkbox"> Eiusmod lorem ipsum
                                         </label>
                                     </div>
                                 </div>-->
                                <div class="control-group">
                                    <label class="control-label">Baptism Status</label>
                                    <div class="controls">
                                        <label class='radio'>
                                            <input type="radio" name="baptism_status" value="Confirmed"> CONFIRMED
                                        </label>
                                        <label class='radio'>
                                            <input type="radio" name="baptism_status" value="Not Confrimed"> NOT CONFIRMED
                                        </label>
                                        <label class='radio'>
                                            <input type="radio" name="baptism_status" value="Ongoing"> ONGOING
                                        </label>
                                    </div>
                                </div>
                                <!--<div class="control-group">
                                    <label for="textfield" class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="email" name="email" id="textfield"  class="input-xlarge">
                                        <span class="help-block"></span>
                                    </div>
                                </div>-->

                                <!--<div class="control-group">
                                    <label class="control-label">Select Gender</label>
                                    <div class="controls">
                                        <label class='radio'>
                                            <input type="radio" name="gender" value="MALE"> MALE
                                        </label>
                                        <label class='radio'>
                                            <input type="radio" name="gender" value="FEMALE"> FEMALE
                                        </label>
                                        <label class='radio'>
                                            <input type="radio" name="gender" value> OTHER
                                        </label>
                                    </div>
                                </div>-->

                            </div>
                            <!--<div class="control-group">
                                <label for="file" class="control-label">Upload Photo</label>
                                <div class="controls">
                                    <input type="file" name="file" id="file" class="input-xlarge">
                                    <span class="help-block">Only .jpg (Max Size: 100MB)</span>
                                </div>
                            </div>-->


                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @stop