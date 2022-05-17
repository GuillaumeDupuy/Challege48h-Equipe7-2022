<?php
require ('../Actions/users/Security.php');
require('../Actions/admin/backofficeAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('../includes/head.php');
include('../includes/links.php');
?>

<body>
    <?php
    include('../includes/Navbar.php');
    ?>
    <div class="col-lg-12">
        <div class="event-tab mt-60">
            <ul class="nav align-items-center " id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="<?php if (isset($_GET['id']) and $_GET['id'] == "evenement") {
                                    echo "active";
                                } ?>" id="evenement-tab" data-toggle="tab" href="?id=evenement" role="tab" aria-controls="day-2">
                        <h4 class="nav-title">Evenements</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="<?php if (isset($_GET['id']) and $_GET['id'] == "utilisateurs") {
                                    echo "active";
                                } ?>" id="utilisateurs-tab" data-toggle="tab" href="?id=utilisateurs" role="tab" aria-controls="day-1">
                        <h4 class="nav-title">Utilisateurs</h4>
                    </a>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="evenement" role="tabpanel" aria-labelledby="evenement-tab">
                    <?php
                    while ($content = $req_admin_content->fetch()) {
                    ?>
                        <div class="event-content pt-40">

                            <div class="single-event d-md-flex mt-30">
                                <?php if ($idOfContent == "evenement") { ?>
                                    <div class="event-image">
                                        <img src="../assets/images/event-3.jpg" alt="Event">
                                    </div>
                                <?php } ?>
                                <div class="event-content media-body">

                                    <h4 class="event-title"><?php if ($idOfContent == "evenement") {
                                                                echo $content['titre'];
                                                            } else {
                                                                echo $content['identifiant'];
                                                            }  ?></h4>
                                    <p class="text"><?php if ($idOfContent == "evenement") {
                                                        echo $content['description'];
                                                    } else {
                                                        echo $content['mail'];
                                                    }  ?></p>
                                    <!-- <ul class="event-meta">
                                                <li>Start: 12.00 PM</li>
                                                <li>End: 15.00 PM</li>
                                                <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                            </ul>-->
                                </div>
                                <?php if ($idOfContent == "evenement") { ?>
                                <a href="editEvent.php?id=<?= $content['id'] ?>"><button type="submit" name="submit" class="btn btn-dark eventSubmit">
                                        edit
                                    </button></a> 
                                    <?php } ?>
                                <a href="<?php if ($idOfContent == "evenement") {
                                                echo "../Actions/EventsActions/deleteEventAction.php?id=".$content['id'];
                                            } else {
                                                echo "../Actions/admin/deleteUserAction.php?id=".$content['id'];
                                            }  ?>"><button type="submit" name="submit" class="btn btn-danger eventSubmit">
                                        delete
                                    </button></a>
                            </div>
                        </div>
                        <!-- event content -->
                    <?php } ?>
                </div>
            </div>
        </div> <!-- event tab -->
    </div>


</body>

</html>