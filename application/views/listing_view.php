<html>

<style>
    body {
        color: black;
    }

</style>
<body>
<div class="container-fluid text-center">
    <div class="row content">

        <!--SideNavBar-->
<!--        <div class="col-sm-2 sidenav">-->
<!--            <p><a href="#">Books</a></p>-->
<!--            <p><a href="#">Clothes</a></p>-->
<!--            <p><a href="#">Stuffs</a></p>-->
<!--        </div>-->

        <!-- Main Page -->
        <div class="col-sm-12 text-center">
            <!-- Header -->
            <h1>Search Results Found <?php
                    echo count($results);
                ?> Items</h1>

            <!-- Listing Content -->
            <div class="col-sm-9 page-content col-thin-left">
                <div class="category-list">
                    <div class="tab-box ">

                        <!--Sorting Function -->
                        <div class="tab-filter">
                            <div class="selecter select-short-by closed" tabindex="0"><select class="selectpicker selecter-element" data-style="btn-select" data-width="auto" tabindex="-1">
                                    <option value="Sort by">Sort by</option>
                                    <option value="Price: Low to High">Price: Low to High</option>
                                    <option value="Price: High to Low">Price: High to Low</option>
                                </select><span class="selecter-selected">Sort by</span><div class="selecter-options scroller"><div class="scroller-bar" style="height: 100px;"><div class="scroller-track" style="height: 100px; margin-bottom: 0px; margin-top: 0px;"><div class="scroller-handle"></div></div></div><div class="scroller-content"><span class="selecter-item selected" data-value="Short by">Short by</span><span class="selecter-item" data-value="Price: Low to High">Price: Low to High</span><span class="selecter-item" data-value="Price: High to Low">Price: High to Low</span></div></div></div>
                        </div>

                        <div class="menu-overly-mask"></div>
                    </div>
                </div>

            </div>

            <p></p>

            <div>
                <?php
                if (isset($results)) {
                    echo "<br>";
                    foreach ($results as $row) {
                        ?>
                        <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
                        <img src="<?php echo base_url('images/item_images/' . 'thumbnail_' . $row['image']); ?>"
                             class="img-thumbnail" width="100px" height="100px" alt="Image not found">
                        <?php
                        echo $row['name'] . "<br>";
                        echo $row['description'] . "<br>";
                        echo "<br>";
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
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"> ...</a></li>
                    <li><a class="pagination-btn" href="#">Next »</a></li>
                </ul>
            </div>

            <!--Promo Ad-->
            <div class="post-promo text-center">
                <h2> Do you have anything to sell ? </h2>
                <h5>Sell your products online for free! Just register, post, meetup, and earn cash!</h5>
                <a href="<?php echo base_url() ?>index.php/upload_item"
                   class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
            </div>

        </div>
    </div>
</div>
</body>
</html>