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
            <p class="pull-left">Search Results Found <?php
                echo count($results);
                ?> Items</p>

            <!-- Listing Content -->
            <div class="col-sm-12 page-content">
                <div class="category-list">
                    <div class="tab-box ">

<!--                        <!--Sorting Function -->-->
<!--                        <div class="tab-filter pull-right">-->
<!--                            <div class="selecter select-short-by closed" tabindex="0"><select-->
<!--                                        class="selectpicker selecter-element" data-style="btn-select" data-width="auto"-->
<!--                                        tabindex="-1">-->
<!--                                    <option value="Sort by">Sort by</option>-->
<!--                                    <option value="Price: Low to High"><a href="--><?php //echo base_url('/index.php/listing/sortLoToHi'); ?><!--"></a>Price: Low to High</option>-->
<!--                                    <option value="Price: High to Low">Price: High to Low</option>-->
<!--                                </select></div>-->
<!--                        </div>-->

                        <!-- Sort Form -->
                        <form>
                            <select name="Sort By" class="pull-right">
                                <option selected value="#">Sort By</option>
                                <option name="Price: Low to High">Price: Low to High</option>
                                <option name="Price: High to Low">Price: High to Low</option>
                            </select>
                        </form>
=======
                        <!--Sorting Function -->
                        <div class="tab-filter">
                            <form action="execute_search" method="post">
                                <?php if (isset($searchquery)) :?>
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <input type="hidden" value="<?php echo $searchquery?>" name="searchquery">
                                    <input type="hidden" value="<?php echo $condition?>" name="Condition">
                                    <input type="hidden" value="<?php echo $category?>" name="Category">
                                <?php endif; ?>

                                <select name ="sort-select" id="sort-select" onchange="this.form.submit()">
                                    <option value="Sort by">Sort by</option>
                                    <option value="ASC">Price: Low to High</option>
                                    <option value="DESC">Price: High to Low</option>
                                </select>
                            </form>

                        </div>

                        <div class="menu-overly-mask"></div>
                    </div>
                </div>

            </div>

            <br> <!--Needed Spacing -->


            <div class="row">

                <?php
                sort($results);
                if (isset($results)) {
                    echo "<br>";
                    foreach ($results as $row) {
                        $id = $row['itemid'];
                        $username = $row['username'];
                        ?>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
                                <img src="<?php echo base_url('images/item_images/' . 'thumbnail_' . $row['image']); ?>"
                                     class="img-responsive" width="200px" height="200px" alt="Image not found">
                                    <?php
                                    ?>
                                    <p>
                                        <?php
                                        echo $row['name'] . '<br>';
                                        ?>
                                        <?php
                                        echo "Condition: " . $row['condition'];
                                        ?>
                                    </p>
                                    <p2 class="pull-right">
                                        <?php
                                        echo "$" . $row['price'] . "<br>";
                                        ?>
                                    </p2>
                                    <?php
                                    echo "<br>";
                                    ?>

                                <a class="btn btn-primary pull-right" target="_blank" href="<?php echo base_url()?>index.php/messaging"> Contact </a>

                                <a class="btn btn-primary" target="_blank" href="<?php echo base_url()?>index.php/messaging/send/<?php echo $username;?>/<?php echo $row['name']; ?>""> Contact </a>


                                <!-- Creates a form with a hidden field that has the itemid number in it.
                                     When button is clicked, calls the load_details function in the Search
                                     controller -->

                                <form action = "load_details" method ="post">
                                    <input type="hidden" name=itemid value = "<?php echo $id ?>" />
                                    <button class="btn btn-default" type="submit" >More Info</button>
                                </form>

                                   <a href="<?php echo base_url()?>index.php/search/load_details/<?php echo $id?>"> <button class="btn btn-primary" type="submit" >More Info</button></a>


                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>


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