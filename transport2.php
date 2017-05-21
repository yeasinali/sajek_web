<?php
include('common_head.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $transport->delete_transport($token);
}
include('header.php');

?>
    <!-- page head start-->
    <div class="page-head">
        <h3 class="m-b-less">
            Transports
        </h3>
        <!--<span class="sub-title">Welcome to Static Table</span>-->
        <div class="state-information">
            <ol class="breadcrumb m-b-less bg-less">
                <li><a href="#">Home</a></li>
                <li class="active">Transport</li>
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
                                Transport
                            </button>
                        </div>
                        <div class="col-md-8">
                            <header class="pull-right">
                                <a href="add_transport.php?token=<?php echo $token ?>" class="">
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
                                        <th class="hidden-xs"><i class="icon-user "></i> Transport image</th>
                                        <th><i class="fa fa-bookmark"></i> Transport Name</th>
                                        <th><i class="fa fa-envelope-o"></i> Transport Place</th>
                                        <th><i class="fa fa-envelope-o"></i> Transport Time</th>
                                        <th><i class="fa fa-envelope-o"></i> Transport Rent</th>
                                        <th><i class="fa fa-envelope-o"></i> Transport Mobile</th>
                                        <th class="hidden-xs"><i class="fa fa-cog"></i> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $row = $transport->transport_list();

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
                                                <?php echo $key['place']; ?>
                                            </td>
                                            <td><?php echo $key['time']; ?></td>
                                            <td><?php echo $key['rent']; ?></td>
                                            <td><?php echo $key['mobile']; ?></td>

                                            <td class="hidden-xs">
                                                <a class="btn btn-success btn-xs"
                                                   href="edit_transport.php?t_id=<?php echo $key['id']; ?>&token=<?php echo $token; ?>"><i
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