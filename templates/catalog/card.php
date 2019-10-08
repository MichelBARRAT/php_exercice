<div class="col-lg-4 col-md-6 mb-4">
    <div class="card text-white bg-info h-100">
        <a><img class="card-img-top" src="<?php echo $item["item_image"] ?>" alt=""></a>
        <div class="text-center card-body">
            <h4 class="card-title">
                <?php echo $item["item_name"]; ?>
            </h4>
            <h5>
                <?php switch ($item["category_id"]) {
                    case 0:
                        echo "Stars";
                        break;
                    case 1:
                        echo "Black hole";
                        break;
                    case 2:
                        echo "Galaxy";
                        break;
                } ?>
            </h5>
            <p class="card-text">
                Discovery date: <br>
                <?php echo $item["item_creation_date"]; ?>
            </p>
        </div>
        <div class="text-center card-footer">
            <small>
                <?php echo $item["item_visible"] ? "Actif" : "Inactif"; ?>
            </small>
        </div>
    </div>
</div>