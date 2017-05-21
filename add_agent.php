<?php 
	include('common_head.php');	
	if($_SERVER['REQUEST_METHOD'] == "POST"){	
		if(empty($_REQUEST['fn'])||
			empty($_REQUEST['ln'])||
			empty($_REQUEST['em']) 		
		/*||
			empty($_REQUEST['mob'])||
			empty($_REQUEST['ph']) */
		)
		{
			$admin->url_return(array('add_agent.php','Some of fields is empty','error',Input::get('token')));
			}else{				
				 $fn = Input::get('fn');
				 $ln = Input::get('ln');
				 $abt = Input::get('abt');
				 $exp = Input::get('exp');
				 $sale = Input::get('sale');
				 $em = Input::get('em');
				 $mob = Input::get('mob');
				 $ph = Input::get('ph'); 
				 $ad1 = Input::get('ad1');
				 $ad2 = Input::get('ad2');	
				 $tw = Input::get('tw');	
				 $fb = Input::get('fb');	
				 $lkd = Input::get('lkd');	
				 $gl = Input::get('gl');	
				 $skp = Input::get('skp');
				 $token = Input::get('token');		
				 $agents->add_agent($fn,$ln,$abt,$exp,$sale,$em,$mob,$ph,$ad1,$ad2,$tw,$fb,$lkd,$gl,$skp,'a_img',$token);
				 }
	}
	include('header.php');
 ?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Add Agents
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Agents</a></li>
                        <li class="active"> Add Agents</li>
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
									<button type="button"  class="btn btn-success"><i class="fa fa-user"></i> Add Agents</button>
								</div>
								<div class="col-md-8">
									<header class="pull-right">
										<button type="button"  id="myButton" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
										<button type="button"  class="btn btn-danger" onclick="window.history.back()"><i class="fa fa-reply"></i> Cancel</button>
									</header>
								</div>
							</div>
                            <div class="row">
								<div class="panel-body">
									<div class="form">
										<form class="cmxform form-horizontal tasi-form" id="basic-form" method="post" action="<?php Config::get('site/action'); ?>" enctype="multipart/form-data">
                                        <input type="hidden" name="token" value="<?php echo $token; ?>" />
											<div class="form-group ">
												<label for="firstname" class="control-label col-lg-2"><b>Firstname *</b></label>
												<div class="col-lg-6">
													<input class=" form-control" id="firstname" name="fn" type="text" required />
												</div>
											</div>
											
											<div class="form-group ">
												<label for="lastname" class="control-label col-lg-2"><b>Lastname  *</b></label>
												<div class="col-lg-6">
													<input class=" form-control" id="lastname" name="ln" type="text" required/>
												</div>
											</div>
                                            <div class="form-group ">
												<label class="col-lg-2 control-label"><b>Image</b> </label>
												<div class="col-lg-4">
												<img  id="uploadPreview"  style="height:100px; width:115px;" data-placeholder="" class="image marginR10" src="images/defalt-image.png" alt="" >
												   <input id="uploadImage" class="file1" type="file" name="a_img" onChange="PreviewImage();" />
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>About </b></label>
												<div class="col-lg-6">
													<textarea name="about" class="form-control" id="" cols="30" rows="6"></textarea>
												</div>
											</div>											
											<div class="form-group ">
												<label for="email" class="control-label col-lg-2"><b>Experience</b></label>
												<div class="col-lg-6">
													<input class="form-control " id="exp" name="exp" type="email" required />
												</div>
											</div>											
											<div class="form-group ">
												<label for="email" class="control-label col-lg-2"><b>No of Sale</b></label>
												<div class="col-lg-6">
													<input class="form-control " id="exp" name="sale" type="text" required />
												</div>
											</div>											
											<div class="form-group ">
												<label for="email" class="control-label col-lg-2"><b>Email *</b></label>
												<div class="col-lg-6">
													<input class="form-control " id="email" name="em" type="email" required />
												</div>
											</div>
											<div class="form-group ">
												<label for="email" class="control-label col-lg-2"><b>Mobile *</b></label>
												<div class="col-lg-6">
													<input class="form-control " id="mob" name="mob" type="email" required />
												</div>
											</div>
											<div class="form-group ">
												<label for="email" class="control-label col-lg-2"><b>Phone *</b></label>
												<div class="col-lg-6">
													<input class="form-control " id="mob" name="ph" type="email" required />
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>Address</b> </label>
												<div class="col-lg-6">
													<textarea name="ad1" class="form-control" id="" cols="30" rows="6"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label"><b>Address2 </b></label>
												<div class="col-lg-6">
													<textarea name="ad2" class="form-control" id="" cols="30" rows="6"></textarea>
												</div>
											</div>
											<div class="form-group ">
												<label for="cname" class="control-label col-lg-2">Twitter</label>
												<div class="col-lg-6">
													<input class=" form-control" id="cname" name="tw" minlength="2" type="text" required />
												</div>
											</div>
											
											<div class="form-group ">
												<label for="cname" class="control-label col-lg-2">Facebook</label>
												<div class="col-lg-6">
													<input class=" form-control" id="cname" name="fb" minlength="2" type="text" required />
												</div>
											</div>
											<div class="form-group ">
												<label for="cname" class="control-label col-lg-2">Linkedin</label>
												<div class="col-lg-6">
													<input class=" form-control" id="cname" name="lkd" minlength="2" type="text" required />
												</div>
											</div>
											<div class="form-group ">
												<label for="cname" class="control-label col-lg-2">Google</label>
												<div class="col-lg-6">
													<input class=" form-control" id="cname" name="gl" minlength="2" type="text" required />
												</div>
											</div>
											<div class="form-group ">
												<label for="cname" class="control-label col-lg-2">Skype</label>
												<div class="col-lg-6">
													<input class=" form-control" id="cname" name="skp" minlength="2" type="text" required />
												</div>
											</div>
											<div class="form-group ">
												<label for="cname" class="control-label col-lg-2">SEO Keyword</label>
												<div class="col-lg-6">
													<input class=" form-control" id="seo" name="seo" type="text" placeholder="Disabled SEO Keyword�" disabled />
												</div>
											</div>

											<div class="form-group">
												<div class="col-lg-offset-2 col-lg-6">
												<input type="submit" style="display:none" />
													
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
			
<?php include('footer.php');?>