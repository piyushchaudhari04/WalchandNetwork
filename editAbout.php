<?php
require_once("./include/membership_config.php");
if(!$wnm->CheckLogin())
{
	$wnm->RedirectToURL("testlogin.php");
}
?>
<form method="post" actiom="$_REQUEST['self']">
<div id="profileDiv" class="panel-heading panel-heading-gray">
                    <a href="#cancel" onclick="getAbout()" class="btn btn-white btn-xs pull-right"><i class="fa fa-times"></i></a>
                    <i class="fa fa-fw fa-info-circle"></i> About
                  </div>
                  <div class="panel-body">

  <ul class="list-unstyled profile-about margin-none">
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Date of Birth</span></div>
                          <div class="col-sm-8">
                          <input type="date" value="<?php echo $wnm->UserDOB(); ?>" name="dob" id="dob" class="form-control"/>
                          </div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Gender</span></div>
                          <div class="col-sm-8"><input type="text" value="<?php echo $wnm->UserGender(); ?>" name="gender" id="gender" class="form-control"/>
                          </div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Lives in</span></div>
                          <div class="col-sm-8"><input type="text" value="<?php echo $wnm->UserCity(); ?>"  name="city" id="city" class="form-control"/></div>
                        </div>
                      </li>
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">From</span></div>
                          <div class="col-sm-8"><input type="text" value="<?php echo $wnm->UserHometown(); ?>"  name="hometown" id="hometown" class="form-control"/></div>
                        </div>
                      </li>

                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Department</span></div>
                          <div class="col-sm-8"><input type="text" value="<?php echo $wnm->UserDept(); ?>"  name="dept" id="dept" class="form-control"/></div>
                        </div>
                      </li>

                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Year</span></div>
                          <div class="col-sm-8"><input type="text" value="<?php echo $wnm->UserYear(); ?>"  name="year" id="year" class="form-control"/></div>
                        </div>
                      </li>

                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Batch From </span></div>
                          <div class="col-sm-8"><input type="text" value="<?php echo $wnm->UserBatchFrom(); ?>"  name="batch" id="batchfrom" class="form-control"/></div>
                        </div>
                      </li>
                      
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Batch To </span></div>
                          <div class="col-sm-8"><input type="text" value="<?php echo $wnm->UserBatchTo(); ?>"  name="batchto" id="batch" class="form-control"/></div>
                        </div>
                      </li>
                      
                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Email</span></div>
                          <div class="col-sm-8"><input type="text" value="<?php echo $wnm->UserEmail(); ?>"  name="email" id="email" class="form-control"/></div>
                        </div>
                      </li>

                      <li class="padding-v-5">
                        <div class="row">
                          <div class="col-sm-4"><span class="text-muted">Contact</span></div>
                          <div class="col-sm-8"><input type="text" value="<?php echo $wnm->UserContact(); ?>"  name="contact" id="contact" class="form-control"/></div>
                        </div>
                      </li>
                    </ul>
                    <div class="pull-right padding-v-5">
                    <a href="#save" onclick="saveAbout()" class="btn btn-primary">Save <i class="fa fa-save"></i></a>
                    <a href="#cancel" onclick="getAbout()" class="btn btn-danger">Cancel <i class="fa fa-times"></i></a>
                    </div>
                    </div>
</form>

