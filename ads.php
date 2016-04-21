<?php 
require_once("./include/membership_config.php");
if(!$wnm->CheckLogin())
{
	$wnm->RedirectToURL("login.php");
}
?>
     <div class="container-fluid">
          	<div class="row">
          	<div class="col-sm-12">
            <div class="timeline-block">
                  <div class="panel panel-default share clearfix-xs">
                    <div class="panel-heading panel-heading-gray title">
                     <i class="fa fa-plus"></i> Post New Ad
                    </div>
                    <div class="panel-body">
                      <textarea name="status" class="form-control share-text" rows="4" placeholder="Post Your Ads..."></textarea>
                    </div>
                    <div class="panel-footer share-buttons">
                      <a href="#"><i class="fa fa-map-marker"></i></a>
                      <a href="#"><i class="fa fa-photo"></i></a>

              <a href="#" class="dropdown-toggle user" data-toggle="dropdown"><i class="fa fa-arrow-down"></i>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#profile" onclick="getProfile()"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#messages" onclick="getMessages()"><i class="fa fa-envelope"></i> Messages</a></li>
                <li><a href="login.php?logout=true"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
                      <button type="submit" class="btn btn-primary btn-xs pull-right" href="#">Post</button>
                    </div>
                  </div>
                </div>
               </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading panel-heading-gray">
                <i class="fa fa-bullhorn"></i> Ads For You
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