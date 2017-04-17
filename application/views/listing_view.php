<html>

<style>
    body{
        color: black;
    }

</style>
<body>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Books</a></p>
            <p><a href="#">Clothes</a></p>
            <p><a href="#">Stuffs</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Search Results Found</h1>

            <div class="col-sm-9 page-content col-thin-left">
                <div class="category-list">
                    <div class="tab-box ">

                        <ul class="nav nav-tabs add-tabs" id="ajaxTabs" role="tablist">
                            <li class="active"><a href="ajax/1.html" data-url="ajax/1.html" role="tab" data-toggle="tab">All Ads <span class="badge">...</span></a>
                            </li>
                            <li><a href="ajax/2.html" data-url="ajax/2.html" role="tab" data-toggle="tab">School
                                    <span class="badge">...</span></a></li>
                            <li><a href="ajax/3.html" data-url="ajax/3.html" role="tab" data-toggle="tab">Personal
                                    <span class="badge">...</span></a></li>
                        </ul>
                        <div class="tab-filter">
                            <div class="selecter select-short-by closed" tabindex="0"><select class="selectpicker selecter-element" data-style="btn-select" data-width="auto" tabindex="-1">
                                    <option value="Short by">Sort by</option>
                                    <option value="Price: Low to High">Price: Low to High</option>
                                    <option value="Price: High to Low">Price: High to Low</option>
                                    <option value="#">Relevance</option>
                                </div>
                    </div>

                    <div class="listing-filter">
                        <div class="pull-left col-xs-6">
                            <div class="breadcrumb-list"><a href="#" class="current"> <span>All ads</span></a>
                                in

                                <span class="cityName"> San Francisco State University </span> <a href="#selectRegion" id="dropdownMenu1" data-toggle="modal"> <span class="caret"></span> </a></div>
                        </div>
                        <div class="pull-right col-xs-6 text-right listing-view-action"><span class="list-view active"><i class="  icon-th"></i></span> <span class="compact-view"><i class=" icon-th-list  "></i></span> <span class="grid-view"><i class=" icon-th-large "></i></span></div>
                        <div style="clear:both"></div>
                    </div>


                    <div class="mobile-filter-bar col-lg-12  ">
                        <ul class="list-unstyled list-inline no-margin no-padding">
                            <li class="filter-toggle">
                                <a class="">
                                    <i class="  icon-th-list"></i>
                                    Filters
                                </a>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle"><i class="caret "></i> Sort
                                        by </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-overly-mask"></div>
                                   <p><?php
                                        if (isset($results))
                                        {
                                            echo "<br>";
                                            foreach ($results as $row)
                                            {
                                                ?>
                                                <!-- I added the link here for the images. It's really a rough draft, but it is working on my machine. -->
                                                <img src="<?php echo base_url('images/item_images/' . 'thumbnail_' . $row['image']); ?>" class="img-thumbnail" width="100px" height="100px" alt="Image not found">
                                                <?php
                                                echo $row['name'] . "<br>";
                                                echo $row['description'] . "<br>";
                                                echo "<br>";
                                            }
                                        }
                                        ?>
                                    </p>
                        </div>
                    </div>

                    <div class="tab-box  save-search-bar text-center"><a href=""> <i class=" icon-star-empty"></i>
                            Save Search </a></div>
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
                    <a href="<?php echo base_url()?>index.php/upload_item" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
                </div>

            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>AD Spce</p>
                </div>
                <div class="well">
                    <p>AD Space</p>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>