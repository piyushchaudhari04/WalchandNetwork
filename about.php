<?php 
require_once("./include/membership_config.php");
if(!$wnm->CheckLogin())
{
	$wnm->RedirectToURL("testlogin.php");
}


?>
<div class="cover overlay cover-image-full height-300-lg">

            <img src="images/profile-cover.jpg" alt="cover" />
            <div class="overlay overlay-full">
              <div class="v-top">
                <a href="#" class="btn btn-cover"><i class="fa fa-pencil"></i></a>
              </div>
            </div>
          </div>

          <div class="container-fluid">
          	<div class="row">
          	<div class="col-sm-6">
            <div class="timeline-block">
                  <div class="panel panel-default share clearfix-xs">
                    <div class="panel-heading panel-heading-gray title">
                      What&acute;s new
                    </div>
                    <div class="panel-body">
                      <textarea name="status" class="form-control share-text" rows="4" placeholder="Share your status..."></textarea>
                    </div>
                    <div class="panel-footer share-buttons">
                      <a href="#"><i class="fa fa-map-marker"></i></a>
                      <a href="#"><i class="fa fa-photo"></i></a>
                      <a href="#"><i class="fa fa-video-camera"></i></a>
                      <button type="submit" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
                    </div>
                  </div>
                </div>
               </div>
            <div class="col-sm-6">
            <div class="tabbable">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-fw fa-picture-o"></i> Photos</a></li>
                <li class=""><a href="#profile" data-toggle="tab"><i class="fa fa-fw fa-folder"></i> Albums</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade active in" id="home">
                  <img src="images/place1.jpg" alt="image" />
                  <img src="images/place2.jpg" alt="image" />
                  <img src="images/food1.jpg" alt="image" />
                </div>
                <div class="tab-pane fade" id="profile">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                    letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown.
                    Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                </div>
                <div class="tab-pane fade" id="dropdown1">
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy
                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably
                    haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                </div>
                <div class="tab-pane fade" id="dropdown2">
                  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo
                    park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial
                    keffiyeh echo park vegan.</p>
                </div>
              </div>
            </div>
            </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div id="aboutDiv" class="panel panel-default">
                  <div class="panel-heading panel-heading-gray">
                    <a href="#editAbout" onclick="editAbout()" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                    <i class="fa fa-fw fa-info-circle"></i> About
                  </div>
                  <div class="panel-body">
                    <ul class="list-unstyled profile-about margin-none">
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Date of Birth</span></div>
                          <div class="col-sm-8"><?php echo $wnm->UserDOB(); ?></div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Gender</span></div>
                          <div class="col-sm-8"><?php echo $wnm->UserGender(); ?></div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Lives in</span></div>
                          <div class="col-sm-8"><?php echo $wnm->UserCity(); ?></div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">From</span></div>
                          <div class="col-sm-8"><?php echo $wnm->UserHometown(); ?></div>
                        </div>
                      </li>

                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Department</span></div>
                          <div class="col-sm-8"><?php echo $wnm->UserDept(); ?></div>
                        </div>
                      </li>

                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Year</span></div>
                          <div class="col-sm-8"><?php echo $wnm->UserYear(); ?></div>
                        </div>
                      </li>

                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Batch </span></div>
                          <div class="col-sm-8"><?php echo $wnm->UserBatchFrom()." - ".$wnm->UserBatchTo(); ?></div>
                        </div>
                      </li>

                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Email</span></div>
                          <div class="col-sm-8"><?php echo $wnm->UserEmail(); ?></div>
                        </div>
                      </li>

                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Contact</span></div>
                          <div class="col-sm-8"><?php echo $wnm->UserContact(); ?></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading panel-heading-gray">
                    <div class="pull-right">
                      <a href="#" class="btn btn-primary btn-xs">Add <i class="fa fa-plus"></i></a>
                    </div>
                    <i class="icon-user-1"></i> Friends
                  </div>
                  <div class="panel-body">
                    <ul class="img-grid">
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-6.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/woman-3.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-2.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-9.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/woman-9.jpg" alt="image" />
                        </a>
                      </li>
                      <li class="clearfix">
                        <a href="#">
                          <img src="images/people/110/guy-4.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-1.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/woman-4.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-6.jpg" alt="image" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading panel-heading-gray">
                <i class="fa fa-w icon-ship-wheel"></i> My Timeline
              </div>
              <div class="panel-body">
              <?php 
              $query = array("PRN"=>$wnm->Username());
              $result = $wnm->db->posts->find($query);
              foreach ($result as $post =>$row)
              {
                ?>

                <div class="col-xs-12 col-md-6 col-lg-4 item">
                <div class="timeline-block">
                  <div class="panel panel-default">

                    <div class="panel-heading">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img src="images/people/50/woman-6.jpg" class="media-object">
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>

                          <a href="#"><?php echo $wnm->UserFullName(); ?></a>


                          <span><?php $date = $row['post_date']; echo date('Y-M-d h:i',$date->sec); ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="panel-body">
                      <p><?php if($row['status_flag']>0){echo $row['Status'];} ?></p>
                      <?php if($row['image_flag']>0){ ?>
                      <div class="timeline-added-images">
                        <img src="images/social/100/1.jpg" width="80" alt="photo" />
                        <img src="images/social/100/2.jpg" width="80" alt="photo" />
                        <img src="images/social/100/3.jpg" width="80" alt="photo" />
                      </div>
                      <?php } ?>
                    </div>
                    <div class="view-all-comments">
                      <a href="#">
                        <i class="fa fa-comments-o"></i> View all
                      </a>
                      <span>10 comments</span>

                    </div>
                    <ul class="comments">
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img src="images/people/50/guy-5.jpg" class="media-object">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="pull-right dropdown" data-show-hover="li">
                            <a href="#" data-toggle="dropdown" class="toggle-button">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Delete</a></li>
                            </ul>
                          </div>
                          <a href="#" class="comment-author pull-left">Bill D.</a>
                          <span>Hi Mary, Nice Party</span>
                          <div class="comment-date">21st September</div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img src="images/people/50/woman-5.jpg" class="media-object">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="pull-right dropdown" data-show-hover="li">
                            <a href="#" data-toggle="dropdown" class="toggle-button">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Delete</a></li>
                            </ul>
                          </div>
                          <a href="#" class="comment-author pull-left">Mary</a>
                          <span>Thanks Bill</span>
                          <div class="comment-date">2 days</div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img src="images/people/50/guy-5.jpg" class="media-object">
                          </a>
                        </div>
                        <div class="media-body">
                          <div class="pull-right dropdown" data-show-hover="li">
                            <a href="#" data-toggle="dropdown" class="toggle-button">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Delete</a></li>
                            </ul>
                          </div>
                          <a href="#" class="comment-author pull-left">Bill D.</a>
                          <span>What time did it finish?</span>
                          <div class="comment-date">14 min</div>
                        </div>
                      </li>
                      <li class="comment-form">
                        <div class="input-group">

                          <span class="input-group-btn">
                   <a href="#" class="btn btn-default"><i class="fa fa-photo"></i></a>
                    </span>

                          <input type="text" class="form-control" />

                        </div>
                      </li>
                    </ul>
                      </div>
                    </div>
                </div>
              <?php } ?>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading panel-heading-gray">
                <i class="fa fa-bookmark"></i> Bookmarks
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <a href="#" class="h5 margin-none">Climb a Mountain</a>
                        <div class="text-muted">
                          <small><i class="fa fa-calendar"></i> 24/10/2014</small>
                        </div>
                      </div>
                      <a href="#">
                        <img src="images/place1-full.jpg" alt="image" class="img-responsive" />
                      </a>
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum laborum maiores tempore veritatis....</p>
                        <div>
                          <div class="pull-right">
                            <a href="#" class="btn btn-primary btn-xs">read</a>
                          </div>

                          <a href="#" class="text-muted"> <i class="fa fa-comments"></i> 6</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-body text-center">
                        <a href="#" class="h5 margin-none">Vegetarian Pizza</a>
                        <p class="text-muted"><i class="fa fa-calendar"></i> 24/10/2014</p>
                        <span class="fa fa-star text-primary"></span>
                        <span class="fa fa-star text-primary"></span>
                        <span class="fa fa-star text-primary"></span>
                        <span class="fa fa-star text-primary"></span>
                        <span class="fa fa-star-o"></span>
                      </div>
                      <a href="#">
                        <img src="images/food1-full.jpg" alt="image" class="img-responsive" />
                      </a>
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum laborum maiores tempore veritatis....</p>
                        <div>
                          <div class="pull-right">
                            <a href="#" class="btn btn-primary btn-xs">read</a>
                          </div>
                          <a href="#" class="text-muted"> <i class="fa fa-comments"></i> 6</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="pull-right">
                          <a href="#" class="btn btn-success btn-xs"><i class="fa fa-check-circle"></i></a>
                        </div>
                        <a href="#" class="h5">Win a Holiday</a>
                        <div class="text-muted">
                          <small><i class="fa fa-calendar"></i> 24/10/2014</small>
                        </div>
                      </div>
                      <a href="#">
                        <img src="images/place2-full.jpg" alt="image" class="img-responsive" />
                      </a>
                      <ul class="icon-list icon-list-block">
                        <li><i class="fa fa-calendar fa-fw"></i> <a href="#">1 Week</a></li>
                        <li><i class="fa fa-users fa-fw"></i> <a href="#"> 2 People</a></li>
                        <li><i class="fa fa-map-marker fa-fw"></i> <a href="#">Miami, FL, USA</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
