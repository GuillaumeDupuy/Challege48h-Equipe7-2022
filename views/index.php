<?php require ('../Actions/EventsActions/loadEventsAction.php') ?>
<!DOCTYPE html>
<html lang="en">
    <?php 
    include ('../includes/head.php'); 
    include ('../includes/links.php'); 
    ?>
<body style="background-image: url(../assets/images/header-bg.jpg)">
<?php include ('../includes/Navbar.php'); ?>
<br>
<form method="GET">

<!-- <input type="search" name="search">
<button type="submit">Valider</button> -->

<div class="form-group row">
    <div class="col-8">
        <input type="search" name="search" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
    </div>
    <div class="col-4">
        <button class="btn btn-success" type="submit">Rechercher</button>
    </div>

</div>
</form>
<div class="row">
<?php
        while ($event = $getAllEvents->fetch()) {
        ?>

                <div class="col-lg-4 col-sm-6 p-4">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeIn;">
                        <div class="team-image">
                            <img src="../img/img_<?=$event['id'] ?>.png" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="event.php?id=<?= $event["id"];?>"><?= $event["titre"];?></a></h4>
                            <span class="sub-title"><?= $event["dateEvent"];?></span>
                            <br>
                            <?php if ($event["nbPlaceMax"]-$event["nbrInscrit"]>0){ ?>
                                <span class="sub-title" style="color:green;"><?= $event["nbPlaceMax"]-$event["nbrInscrit"];?> places</span>
                           <?php } else { ?>
                            <span class="sub-title" style="color:red;">No places left</span>
                          <?php } ?>
                        </div>
                    </div> <!-- single team -->
                </div>
                <?php } ?>
            </div>
</body>
</html>