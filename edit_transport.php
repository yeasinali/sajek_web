<?php
include('common_head.php');
$transport_id = Input::get('t_id');
if (($_SERVER['REQUEST_METHOD'] == "POST")) {
    $transportName = Input::get('transportName');
    $transportPlase = Input::get('transportPlase');
    $transportTime = Input::get('transportTime');
    $tansportRent = Input::get('tansportRent');
    $tansportMobile = Input::get('tansportMobile');
    $transport_id= Input::get('transport_id');
    $h_img= Input::get('h_img');
    $token = Input::get('token');

    $transport->transport_update($transportName, $transportPlase, $transportTime, $tansportRent, $tansportMobile,'t_img', $h_img, $transport_id, $token);
}
include('header.php');

?>

    <!-- page head start-->
    <div class="page-head">
        <h3 class="m-b-less">
            Updated Transports
        </h3>
        <!--<span class="sub-title">Welcome to Static Table</span>-->
        <div class="state-information">
            <ol class="breadcrumb m-b-less bg-less">
                <li><a href="#">Transport</a></li>
                <li class="active"> updated Transport</li>
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
                            <button type="button" style="" class="btn btn-success"><i class="fa fa-shield"></i> Updated
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
                                      action="<?php Config::get('site/aciton'); ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="token" value="<?php echo $token; ?>"/>
                                    <input type="hidden" name="transport_id" value="<?php echo $transport_id; ?>"/>
                                    <?php $row = $transport->update_show_transport($transport_id);
                                    foreach ($row as $val) { ?>
                                        <input type="hidden" name="h_img" value="<?php echo $val['img']; ?>"/>
                                        <div class="form-group ">
                                            <label for="transportName" class="control-label col-lg-2"><b>Transport
                                                    Name</b></label>
                                            <div class="col-lg-9">
                                                <input class=" form-control" id="firstname" name="transportName"
                                                       type="text" value="<?php echo $val['name']; ?>" required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="transportplase" class="control-label col-lg-2"><b>Transport
                                                    Place </b></label>
                                            <div class="col-lg-9">
                                                <input class=" form-control" id="transportPlase" name="transportPlase"
                                                       value="<?php echo $val['place']; ?>" type="text" required/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="email" class="control-label col-lg-2"><b>Tansport
                                                    Time </b></label>
                                            <div class="col-lg-9">

                                                <input class="form-control " id="transportTime" name="transportTime"
                                                       type="datetime" value="<?php echo $val['time']; ?>"/>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <label for="email" class="control-label col-lg-2"><b>Tansport
                                                    rent </b></label>
                                            <div class="col-lg-9">
                                                <input class="form-control " id="tansportRent" name="tansportRent"
                                                       value="<?php echo $val['rent']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="email" class="control-label col-lg-2"><b>Tansport
                                                    Mobile </b></label>
                                            <div class="col-lg-9">
                                                <input class="form-control " id="tansportMobile" name="tansportMobile"
                                                       value="<?php echo $val['mobile']; ?>"/>
                                            </div>
                                        </div>


                                        <div class="form-group ">
                                            <label class="col-lg-2 control-label">Image </label>
                                            <div class="col-lg-4">
                                                <img id="uploadPreview" style="height:100px; width:160px;"
                                                     data-placeholder="" class="image marginR10"
                                                     src="<?php echo $val['img']; ?>" alt="">
                                                <input id="uploadImage" class="file1" type="file" name="t_img"
                                                       onChange="PreviewImage();"/>
                                            </div>
                                        </div>

                                    <?php } ?>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-success" type="submit" style="display:none;">Save
                                            </button>
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