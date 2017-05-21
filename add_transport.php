<?php
include('common_head.php');
if (($_SERVER['REQUEST_METHOD'] == "POST")) {
    if (empty($_REQUEST['transportName'])) {
        $admin->url_return(array('add_transport.php', 'Some of fields is empty', 'error', Input::get('token')));
    } else {
        $transportName = Input::get('transportName');
        $transportPlase = Input::get('transportPlase');
        $transportTime = Input::get('transportTime');
        $tansportRent = Input::get('tansportRent');
        $tansportMobile = Input::get('tansportMobile');
        $token = Input::get('token');
        $transport->add_transport($transportName, $transportPlase, $transportTime, $tansportRent,$tansportMobile, 'trans_img', $token);
    }
}
include('header.php');
?>

    <!-- page head start-->
    <div class="page-head">
        <h3 class="m-b-less">
            Add Partners
        </h3>
        <!--<span class="sub-title">Welcome to Static Table</span>-->
        <div class="state-information">
            <ol class="breadcrumb m-b-less bg-less">
                <li><a href="#">Transports</a></li>
                <li><a href="#">Transports</a></li>
                <li class="active"> Add Transport</li>
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
                            <button type="button" class="btn btn-success"><i class="fa fa-shield"></i> Add Transport
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
                                        <label for="transportName" class="control-label col-lg-2"><b>Transport Name
                                                *</b></label>
                                        <div class="col-lg-9">
                                            <input class=" form-control" id="firstname" name="transportName" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="transportplase" class="control-label col-lg-2"><b>Transport Place </b></label>
                                        <div class="col-lg-9">
                                            <input class=" form-control" id="transportPlase" name="transportPlase" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2"><b>Tansport Time </b></label>
                                        <div class="col-lg-9">

                                            <input class="form-control " id="email" name="transportTime" type="datetime" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2"><b>Tansport rent </b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control " id="tansportRest" name="tansportRent"  />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2"><b>Tansport Mobile </b></label>
                                        <div class="col-lg-9">
                                            <input class="form-control " id="tansportMobile" name="tansportMobile"  />
                                        </div>
                                    </div>

                                    <div class="form-group  gal-upload">
                                        <label class="col-lg-2 control-label"><b>Upload Image</b></label>
                                        <div class="col-lg-4">
                                            <input id="file-4" class="file" type="file" name="trans_img" multiple=true>
                                        </div>
                                    </div>

<!--                                    <div class="form-group ">-->
<!--                                        <label class="col-lg-2 control-label"><b>Image</b> </label>-->
<!--                                        <div class="col-lg-4">-->
<!--                                            <img id="uploadPreview" style="height:100px; width:160px;"-->
<!--                                                 data-placeholder="" class="image marginR10"-->
<!--                                                 src="images/defalt-image.png" alt="">-->
<!--                                            <input id="uploadImage" class="file1" type="file" name="trans_img"-->
<!--                                                   onChange="PreviewImage();"/>-->
<!--                                        </div>-->
<!--                                    </div>-->


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