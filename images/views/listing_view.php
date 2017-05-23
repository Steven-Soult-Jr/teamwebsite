<html>

<style>
    body {
        color: black;
    }
    p{
        text-align: center;
    }

</style>
<body>
<div class="container">
    <div class="row">

        <!-- Main Page -->
        <div class="col-md-12">
            <!-- Header -->
            <h1>Search Results Found <?php
                echo count($results);
                ?> Items</h1>

            <!-- Listing Content -->
            <div class="col-sm-12 page-content">
                <div class="category-list">
                    <div class="tab-box ">

                        <!--Sorting Function -->
                        <div class="tab-filter pull-right">
                            <div class="selecter select-short-by closed" tabindex="0"><select
                                        class="selectpicker selecter-element" data-style="btn-select" data-width="auto"
                                        tabindex="-1">
                                    <option value="Sort by">Sort by</option>
                                    <option value="Price: Low to High">Price: Low to High</option>
                                    <option value="Price: High to Low">Price: High to Low</option>
                                </select></div>
                        </div>
                        <!--End of Sorting Function -->

                        <div class="menu-overly-mask"></div>
                    </div>
                </div>

            </div>

            <!-- Page Results -->
            <div class="row">

                <?php
                if (isset($results)) {
                    echo "<br>";
                    foreach ($results as $row) {
                        ?>
                        <div class="col-sm-3 col-lg-3 col-md-6">
                            <div class="thumbnail">
                                <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
                                <a href="<?php echo base_url()?>index.php/messaging">
                                <img src="<?php echo base_url('images/item_images/' . 'thumbnail_' . $row['image']); ?>"
                                     class="img-responsive" width="200px" height="200px" alt="Image not found"></a>
                                    <?php
                                    ?>
                                <br>
                                    <p margin="" class="center">
                                        <?php
                                        echo $row['name'] . "<br>";
                                        ?>
                                        <?php
                                        echo "$" . $row['price'] . "<br>";
                                        ?>
                                    </p>
                                    <?php
                                    ?>
                                <a class="btn btn-default" target="_blank" style="border: none;" href="<?php echo base_url()?>index.php/individual_listing"> More Info </a>
                                <a class="btn btn-primary pull-right" target="_blank" style="border: none;" href="<?php echo base_url()?>index.php/messaging"> Contact </a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <!-- End of Page Results -->

            <!--Pagination-->
            <div class="pagination-bar text-center">
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"> ...</a></li>
                    <li><a class="pagination-btn" href="#">Next »</a></li>
                </ul>
            </div>
            <!--/MainPage-->
        </div>
    </div>
</div>
</body>
</html>