<?php 
require_once("./include/membership_config.php");
if(!$wnm->CheckLogin())
{
	$wnm->RedirectToURL("login.php");
}
	$prn = $wnm->UserPRN();
	$query = array("From"=>$prn);
  	$result = $this->db->users->find($query);

?>
          <div class="container-fluid">

            <div class="media messages-container media-clearfix-xs-min media-grid">
              <div class="media-left">
                <div class="messages-list">
                  <div class="panel panel-default">
                    <ul class="list-group">
                      <li class="list-group-item active">
                        <a href="#">
                          <div class="media">
                            <div class="media-left">
                              <img src="images/people/110/woman-5.jpg" width="50" alt="" class="media-object" />
                            </div>
                            <div class="media-body">
                              <span class="date">Today</span>
                              <span class="user">Mary D.</span>
                              <div class="message">Are we ok to meet...</div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">
                          <div class="media">
                            <div class="media-left">
                              <img src="images/people/110/guy-3.jpg" height="50" alt="" class="media-object" />
                            </div>
                            <div class="media-body">
                              <span class="date">Sat</span>
                              <span class="user">Adrian T.</span>
                              <div class="message">Looking forward to...</div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">
                          <div class="media">
                            <div class="media-left">
                              <img src="images/people/110/woman-4.jpg" width="50" alt="" class="media-object" />
                            </div>
                            <div class="media-body">
                              <span class="date">5 days</span>
                              <span class="user">Michelle A.</span>
                              <div class="message">Nice design.</div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">
                          <div class="media">
                            <div class="media-left">
                              <img src="images/people/110/woman-3.jpg" height="50" alt="" class="media-object" />
                            </div>
                            <div class="media-body">
                              <span class="date">Sat</span>
                              <span class="user">Sue T.</span>
                              <div class="message">Looking forward to...</div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">
                          <div class="media">
                            <div class="media-left">
                              <img src="images/people/110/guy-9.jpg" height="50" alt="" class="media-object" />
                            </div>
                            <div class="media-body">
                              <span class="date">Sat</span>
                              <span class="user">Adrian T.</span>
                              <div class="message">Looking forward to...</div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">
                          <div class="media">
                            <div class="media-left">
                              <img src="images/people/110/woman-9.jpg" height="50" alt="" class="media-object" />
                            </div>
                            <div class="media-body">
                              <span class="date">Sat</span>
                              <span class="user">Adrian T.</span>
                              <div class="message">Looking forward to...</div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">
                          <div class="media">
                            <div class="media-left">
                              <img src="images/people/110/guy-6.jpg" height="50" alt="" class="media-object" />
                            </div>
                            <div class="media-body">
                              <span class="date">Sat</span>
                              <span class="user">Adrian T.</span>
                              <div class="message">Looking forward to...</div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="list-group-item">
                        <a href="#">
                          <div class="media">
                            <div class="media-left">
                              <img src="images/people/110/guy-2.jpg" height="50" alt="" class="media-object" />
                            </div>
                            <div class="media-body">
                              <span class="date">Sat</span>
                              <span class="user">Adrian T.</span>
                              <div class="message">Looking forward to...</div>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="media-body">
                <div class="panel panel-default share">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <a class="btn btn-primary" href="#">
                        <i class="fa fa-envelope"></i> Send
                      </a>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control share-text" placeholder="Write message..." />
                  </div>
                  <!-- /input-group -->
                </div>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img src="images/people/110/woman-5.jpg" width="60" alt="woman" class="media-object" />
                    </a>
                  </div>
                  <div class="media-body message">
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-white">
                        <div class="pull-right">
                          <small class="text-muted">2 min ago</small>
                        </div>
                        <a href="#">Mary D.</a>
                      </div>
                      <div class="panel-body">
                        Hi Bill,
                        <br/> Is it ok if we schedule the meeting tomorrow?

                      </div>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-body message">
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-white">
                        <div class="pull-right">
                          <small class="text-muted">10 min ago</small>
                        </div>
                        <a href="#">Me</a>
                      </div>
                      <div class="panel-body">
                        Are we still on for Today?
                      </div>
                    </div>
                  </div>
                  <div class="media-right">
                    <img src="images/people/110/guy-5.jpg" width="60" alt="" class="media-object" />
                  </div>
                </div>
                <div class="media">
                  <div class="media-left">
                    <img src="images/people/110/woman-5.jpg" width="60" alt="" class="media-object" />
                  </div>
                  <div class="media-body message">
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-white">
                        <div class="pull-right">
                          <small class="text-muted">1 day ago</small>
                        </div>
                        <a href="#">Mary D.</a>
                      </div>
                      <div class="panel-body">
                        Cool. It's settled. Tomorrow will discuss the project.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-body message">
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-white">
                        <div class="pull-right">
                          <small class="text-muted">3 days ago</small>
                        </div>
                        <a href="#">Me</a>
                      </div>
                      <div class="panel-body">
                        I suggest a meeting on Tuesday. What do you think?
                      </div>
                    </div>
                  </div>
                  <div class="media-right">
                    <img src="images/people/110/guy-5.jpg" width="60" alt="" class="media-object" />
                  </div>
                </div>
              </div>
            </div>
