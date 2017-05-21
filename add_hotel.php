<?php
include('common_head.php');
if (($_SERVER['REQUEST_METHOD'] == "POST")) {
    if (empty($_REQUEST['hotelName'])) {
        $admin->url_return(array('add_hotel.php', 'Some of fields is empty', 'error', Input::get('token')));
    } else {
        $hotelName = Input::get('hotelName');
        $hotelAddress = Input::get('hotelAddress');
        $hotelManager = Input::get('hotelManager');
        $hotelContact = Input::get('hotelContact');
        $hotelrent = Input::get('hotelrent');
        $hotelTime = Input::get('hotelTime');
        $hotelLongitude = Input::get('hotelLongitude');
        $hotelLatitude= Input::get('latitude');
        $token = Input::get('token');
        $conditon = Input::get('conditon');

       // $hotel->add_hotel($hotelName, $hotelAddress, $hotelManager, $hotelContact,$hotelrent,$hotelTime,$hotelLongitude,$hotelLongitude,'hotel_img', $token);
        $hotel->add_hotel($hotelName,'h_img', $hotelAddress,$hotelManager,$hotelContact,$conditon,$hotelrent,$hotelTime,$hotelLongitude,$hotelLatitude,$token);
    }
}
include('header.php');
?>

    <!-- page head start-->
    <div class="page-head">
        <h3 class="m-b-less">
            Add Hotel
        </h3>
        <!--<span class="sub-title">Welcome to Static Table</span>-->
        <div class="state-information">
            <ol class="breadcrumb m-b-less bg-less">
                <li><a href="#">Hotel</a></li>
                <li class="active"> Add Hotel</li>
            </ol>
        </div>

    </div>
    <!-- page head end-->

    <!--body wrapper start-->
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="row">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-success"><i class="fa fa-shield"></i> Add Hotel
                            </button>
                        </div>
                        <div class="col-md-8">
                            <header class="pull-right">
                                <button type="button" id="myButton" class="btn btn-success"><i class="fa fa-save"></i>
                                    Save
                                </button>
                                <button type="button" class="btn btn-danger" onclick="window.history.back()"><i
                                            class="fa fa-reply"></i> Cancel
                                </button>
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal tasi-form" id="basic-form" method="post"
                                      action="<?php Config::get('site/action'); ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="token" value="<?php echo $token; ?>"/>
                                    <div class="form-group ">
                                        <label for="hotelName" class="control-label col-lg-2"><b> Name
                                                *</b></label>
                                        <div class="col-lg-9">
                                            <input class=" form-control" id="firstname" placeholder="Hotel Name" name="hotelName" type="text" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="hotelName" class="control-label col-lg-2"><b> Address
                                                </b></label>
                                        <div class="col-lg-9">
                                            <input class=" form-control" id="firstname" name="hotelAddress" placeholder="Hotel Address" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2"><b> Manager </b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control " id="hotelManager" placeholder="Hotel Manager " name="hotelManager"  />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2"><b>contacts </b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control " id="hotelContact" placeholder="Hotel Mobile or telephone" name="hotelContact"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"><b>Condition</b></label>
                                        <div class="col-lg-10">

                                            <select name="conditon">
                                                <option class="col-lg-10" value="AC">AC</option>
                                                <option class="col-lg-10"  value="NON-AC">NON-AC</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2"><b>Rent</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control " id="hotelContact" placeholder="Hotel Rent" name="hotelrent"  />
                                        </div>
                                    </div>


                                    <div class="form-group ">
                                        <label for="Hotel" class="control-label col-lg-2"><b>Rent Time </b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control " id="hotelRent" placeholder="Hotel Rent Time" name="hotelTime"  />
                                        </div>
                                    </div>



                                    <div class="form-group ">
                                        <label class="col-lg-2 control-label"><b>Image</b> </label>
                                        <div class="col-lg-4">
                                            <img id="uploadPreview" style="height:100px; width:160px;"
                                                 data-placeholder="" class="image marginR10"
                                                 src="images/defalt-image.png" alt="">
                                            <input id="uploadImage" class="file1" type="file" name="h_img"
                                                   onChange="PreviewImage();"/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2"><b>Longitude </b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control " id="hotelLongitude" placeholder="Example : 134.443.4" name="hotelLongitude"  />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2"><b>Latitude</b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control " id="tansportMobile" placeholder="Example: 134dd.443.4"name="latitude"  />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" style="display:none"/>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
    <!--body wrapper end-->

<?php include('footer.php'); ?>