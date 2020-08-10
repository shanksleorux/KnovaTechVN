<section class="blog-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mosh-blog-posts">
                        <div class="row">
                            <!-- Single Blog Start -->
                            <?php foreach ($viewmodel as $items) : ?>

                            <div class="col-12">
                                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Post Title -->
                                    <h2><?php echo $items['PostTitle']; ?></h2>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <h5><font color="blue">Posted At <?php echo $items['PostDate']; ?></font></h5>
                                    </div>
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb">
                                        <img src="<?php echo $items['PostImage']; ?>" alt="" width="50%" height="50%">
                                    </div>

                                    <!-- Post Excerpt -->
                                    <p><h4>
                                    <?php
                                    $string = html_entity_decode($items['PostBody']);
                                    if (strlen($string) > 100) {
                                      // truncate string
                                      $stringCut = substr($string, 0, 100);
                                      $endPoint = strrpos($stringCut, ' ');
                                      //if the string doesn't contain any space then it will cut without word basis.
                                      $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                                      $string .= '... <a href="/NewsEvents/NewsDetails/'.$items['ID'].'"><font color="blue"> Read More</font></a>';
                                      echo $string;
                                    }
                                    ?>
                                    </h4></p>
                                    <hr/>
                                </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="mosh-pagination-area">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1.</a></li>
                                <li class="page-item"><a class="page-link" href="#">2.</a></li>
                                <li class="page-item"><a class="page-link" href="#">3.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="mosh-blog-sidebar">

                        <div class="blog-post-search-widget mb-100">
                            <form action="#">
                                <input type="search" name="search" id="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>


                        <div class="blog-post-categories mb-100">
                            <h3>Categories</h3> <hr/>
                            <ul>
                                <li><a href="#">Enterprise Management</a></li><hr/>
                                <li><a href="#">API Management</a></li><hr/>
                                <li><a href="#">Testing Solution</a></li><hr/>
                                <li><a href="#">System Integration</a></li><hr/>
                                <li><a href="#">Uncategory</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
