<?php
include('common_head.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $hotel->delete_hotel($token);
}
include('header.php');

?>
    <!-- page head start-->
    <div class="page-head">
        <h3 class="m-b-less">
            Hotels
        </h3>
        <!--<span class="sub-title">Welcome to Static Table</span>-->
        <div class="state-information">
            <ol class="breadcrumb m-b-less bg-less">
                <li><a href="#">Hotel</a></li>
                <li class="active">Hotels</li>
            </ol>
        </div>
    </div>
    <!-- page head end-->

    <!--body wrapper start-->
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <div class="row">
                        <div class="col-md-4">
                            <button type="button" style="" class="btn btn-success"><i class="fa fa-shield"></i> All
                                Hotel
                            </button>
                        </div>
                        <div class="col-md-8">
                            <header class="pull-right">
                                <a href="add_hotel.php?token=<?php echo $token ?>" class="">
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add
                                    </button>
                                </a>
                                <a href="#" onclick="confirm_delete()" id="delete">
                                    <button type="button" class="btn btn-danger "><i class="fa fa-trash-o"></i> Delete
                                    </button>
                                </a>
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form method="post" id="form-delete" action="<?php Config::get('site/aciton'); ?>">
                                <input type="hidden" name="token" value="<?php echo $token; ?>"/>
                                <table class="table responsive-data-table data-table" id="checkAll">
                                    <thead>
                                    <tr>
                                        <th id="masterCh" class="ch"><input type="checkbox" name="checkbox" value="all"
                                                                            id="selecctall"/></th>
                                        <th class="hidden-xs"><i class="icon-user "></i> Hotel image</th>
                                        <th><i class="fa fa-bookmark"></i> Hotel Name</th>
                                        <th><i class="fa fa-bookmark"></i> Hotel Condition</th>
                                        <th><i class="fa fa-envelope-o"></i> Hotel Address</th>
                                        <th><i class="fa fa-envelope-o"></i> Hotel Time</th>
                                        <th><i class="fa fa-envelope-o"></i> Hotel Rent</th>
                                        <th><i class="fa fa-envelope-o"></i> Hotel Mobile</th>
                                        <th class="hidden-xs"><i class="fa fa-cog"></i> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $row = $hotel->hotel_list();

                                    foreach ($row as $key) {
                                        ?>
                                        <tr>

                                            <td class="chChildren"><input type="checkbox" name="check_list[]"
                                                                          value="<?php echo $key['id']; ?>"
                                                                          class="checkbox1"/></td>
                                            <td class="hidden-xs"><img id="uploadPreview"
                                                                       style="height:50px; width:50px;"
                                                                       data-placeholder="" class="image marginR10"
                                                                       src="<?php echo $key['img']; ?>" alt="">
                                            <td>
                                                <?php echo $key['name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $key['condition']; ?>
                                            </td>
                                            <td>
                                                <?php echo $key['address']; ?>
                                            </td>
                                            <td><?php echo $key['rent_time']; ?></td>
                                            <td><?php echo $key['rent']; ?></td>
                                            <td><?php echo $key['contact']; ?></td>

                                            <td class="hidden-xs">
                                                <a class="btn btn-success btn-xs"
                                                   href="edit_hotel.php?h_id=<?php echo $key['id']; ?>&token=<?php echo $token; ?>"><i
                                                            class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--body wrapper end-->


<?php include('footer.php'); ?>