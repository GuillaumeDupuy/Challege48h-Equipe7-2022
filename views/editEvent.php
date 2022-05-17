<?php 
require ('../Actions/users/Security.php');
require('../Actions/EventsActions/getInfoOfEditedEvent.php') ;
require('../Actions/EventsActions/editEventAction.php') ;
?>
<!doctype html>
<html lang="en">
<?php include '../includes/head.php'; ?>

<body style="background-image: url(../assets/images/header-bg.jpg)">
    <?php include '../includes/Navbar.php'; ?>
    <?php if (isset($error)) { ?>
        <h2 style="color:red;text-align:center;"><?= $error ?></h2>
    <?php } else { ?>
        <section class="login">
            <h1 style="color:white;text-align:center;">Création d'un évenement</h1>
            <form method="post">
            <?php if (isset($errorMsg)){ ?>
                <p style="color:red;text-align:center;"><?= $errorMsg ?></p>
            <?php } ?>
                <article class="eventInput">
                    <div class="form-group p-4">
                        <div class="form-control mx-auto w-50 text-center">
                            <div class="mb-3">
                                <label for="TitleID" class="form-label">Titre </label>
                                <input class="form-control" type="text" placeholder="Titre" name="Title" id="TitleID" value="<?=$Event_title;?>" />
                            </div>
                            <div class="mb-3">
                                <label for="DescriptionID" class="form-label">Description </label>
                                <textarea type="text" class="form-control" name="Description" id="DescriptionID" placeholder="Description" style="height: 125px;"><?=$Event_desc;?></textarea>
                            </div>
                            <div class="mb-3 p-2" style="display: flex;">

                                <input class="form-control" type="text" placeholder="Nombre de Places" name="nbPlaces" id="nbID" value="<?=$event_nbPlaces;?>" style="width: 25%;" />
                                <label for="DateID" class="form-label m-2">Date </label>
                                <input class="form-control" type="date" name="Date" id="DateID" value="<?= $Event_date; ?>" min="<?= $Event_date; ?>" max="2024-01-01" style="width: 75%;" />

                            </div>
                            <article class="eventButton">
                                <div class="p-4">
                                    <button type="submit" name="submit" class="btn btn-dark eventSubmit">
                                        Créer evenement
                                    </button>
                                </div>
                            </article>
                        </div>
                    </div>
                </article>



            </form>
        </section>
    <?php } ?>


</body>

</html>