<?php
include('common_head.php');
$hotel_id = Input::get('h_id');
if (($_SERVER['REQUEST_METHOD'] == "POST")) {
    $hotelName = Input::get('hotelName');
    $hotelAddress = Input::get('hotelAddress');
    $hotelManager = Input::get('hotelManager');
    $hotelContact = Input::get('hotelContact');
    $hotelrent = Input::get('hotelrent');
    $hotelTime = Input::get('hotelTime');
    $hotelLongitude = Input::get('hotelLongitude');
    $hotelLatitude = Input::get('latitude');
    $token = Input::get('token');
    $conditon = Input::get('conditon');
    $hotel_id = Input::get('hotel_id');
    $hide_img = Input::get('hide_img');
    $token = Input::get('token');


    $hotel->hotel_update($hotelName,'h_img',$hide_img, $hotelAddress,$hotelManager,$hotelContact,$hotelrent,$hotelTime,$hotelLongitude,$hotelLatitude,$hotel_id,$token);
}
include('header.php');
?>

    <!-- page head start-->
    <div class="page-head">
        <h3 class="m-b-less">
            Update Hotel
        </h3>
        <!--<span class="sub-title">Welcome to Static Table</span>-->
        <div class="state-information">
            <ol class="breadcrumb m-b-less bg-less">
                <li><a href="#">Hotel</a></li>
                <li class="active"> Update  Hotel</li>
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
            <button type="button" class="btn btn-success"><i class="fa fa-shield"></i> Update Hotel
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
    <input type="hidden" name="hotel_id" value="<?php echo $hotel_id; ?>"/>
<?php $row = $hotel->update_show_hotel($hotel_id);
foreach ($row as $val) { ?>
    <input type="hidden" name="hide_img" value="<?php echo $val['img']; ?>"/>
    <div class="form-group ">
        <label for="hotelName" class="control-label col-lg-2"><b> Name
                *</b></label>
        <div class="col-lg-9">
            <input class=" form-control" id="firstname" value="<?php echo $val['name']; ?>" placeholder="Hotel Name"
                   name="hotelName" type="text" required/>
        </div>
    </div>

    <div class="form-group ">
        <label for="hotelName" class="control-label col-lg-2"><b> Address
            </b></label>
        <div class="col-lg-9">
            <input class=" form-control" id="firstname" name="hotelAddress"
                   placeholder="Hotel Address" value="<?php echo $val['address']; ?>" type="text" required/>
        </div>
    </div>
    <div class="form-group ">
        <label for="email" class="control-label col-lg-2"><b> Manager </b></label>
        <div class="col-lg-9">
            <input class="form-control " id="hotelManager"  value="<?php echo $val['manager']; ?>" placeholder="Hotel Manager "
                   name="hotelManager"/>
        </div>
    </div>
    <div class="form-group ">
        <label for="email" class="control-label col-lg-2"><b>contacts </b></label>
        <div class="col-lg-9">
            <input class="form-control " id="hotelContact"
                   placeholder="Hotel Mobile or telephone" value="<?php echo $val['contact']; ?>" name="hotelContact"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label col-lg-2"
               for="inputSuccess"><b>Condition</b></label>
        <div class="col-lg-10">

            <select name="conditon">
                <option class="col-lg-10" value="AC">AC</option>
                <option class="col-lg-10" value="NON-AC">NON-AC</option>
            </select>
        </div>
    </div>


    <div class="form-group ">
        <label for="email" class="control-label col-lg-2"><b>Rent</b></label>
        <div class="col-lg-9">
            <input class="form-control " id="hotelContact" value="<?php echo $val['rent']; ?>" placeholder="Hotel Rent"
                   name="hotelrent"/>
        </div>
    </div>


    <div class="form-group ">
        <label for="Hotel" class="control-label col-lg-2"><b>Rent Time </b></label>
        <div class="col-lg-9">
            <input class="form-control " id="hotelRent" value="<?php echo $val['rent_time']; ?>" placeholder="Hotel Rent Time"
                   name="hotelTime"/>
        </div>
    </div>


    <div class="form-group ">
        <label class="col-lg-2 control-label"><b>Image</b> </label>
        <div class="col-lg-4">
            <img id="uploadPreview" style="height:100px; width:160px;"
                 data-placeholder="" class="image marginR10"
                 src="<?php echo $val['img']; ?>" alt="">
            <input id="uploadImage" class="file1" type="file" name="h_img"
                   onChange="PreviewImage();"/>
        </div>
    </div>

    <div class="form-group ">
        <label for="email" class="control-label col-lg-2"><b>Longitude </b></label>
        <div class="col-lg-9">
            <input class="form-control " id="hotelLongitude"
                   placeholder="Example : 134.443.4" value="<?php echo $val['longitude']; ?>" name="hotelLongitude"/>
        </div>
    </div>
    <div class="form-group ">
        <label for="email" class="control-label col-lg-2"><b>Latitude</b></label>
        <div class="col-lg-9">
            <input class="form-control " id="tansportMobile"
                   placeholder="Example: 134dd.443.4" value="<?php echo $val['latitude']; ?>" name="latitude"/>
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <input type="submit" style="display:none"/>

        </div>
    </div>
    <?php } ?>
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