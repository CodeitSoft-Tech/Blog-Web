                                  <div class="post-item">
                                    <div class="image-holder">
                                     <img class="img-responsive" src="assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['post_title']; ?>">
                                        </div>
                                    
                                    <div class="text">
                                        <div class="inner">
                                            
                                            <h3><a href="blog-single.php?slug=<?php echo $row['post_slug']; ?>"><?php echo $row['post_title']; ?></a></h3>
                                            
                                            <ul class="status">
                                                
                                                <li><i class="fa fa-tag"></i><a href="category.php?slug=<?php echo $row['category_slug']; ?>"><?php echo $row['category_name']; ?></a></li>
                                               
                                                <li><i class="fa fa-calendar"></i><?php echo $row['post_date']; ?></li>

                                            </ul>

                                            <p>
                                                <?php echo substr($row['post_content'],0,200).' ...'; ?> 
                                            </p>

                                            <p class="button">
                                                <a href="blog-single.php?slug=<?php echo $row['post_slug']; ?>">Read More</a>
                                            </p>

                                        </div>
                                    </div>
                                </div>