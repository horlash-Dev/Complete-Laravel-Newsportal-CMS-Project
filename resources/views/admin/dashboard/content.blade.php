<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">Account setting</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Pages</a>
                </li>
                <li class="breadcrumb-item active">Account setting
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right">
            <button class="btn btn-info dropdown-toggle mb-1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
            <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body"><!-- account setting page start -->
<section id="page-account-settings">
  <div class="row">
      <!-- left menu section -->
      <div class="col-md-3 mb-2 mb-md-0">
          <ul class="nav nav-pills flex-column mt-md-0 mt-1">
              <li class="nav-item">
                  <a class="nav-link d-flex active" id="account-pill-general" data-toggle="pill"
                      href="#account-vertical-general" aria-expanded="true">
                      <i class="ft-globe mr-50"></i>
                      General
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
                      aria-expanded="false">
                      <i class="ft-lock mr-50"></i>
                      Change Password
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-info" data-toggle="pill" href="#account-vertical-info"
                      aria-expanded="false">
                      <i class="ft-info mr-50"></i>
                      Info
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-social" data-toggle="pill" href="#account-vertical-social"
                      aria-expanded="false">
                      <i class="ft-camera mr-50"></i>
                      Social links
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-connections" data-toggle="pill"
                      href="#account-vertical-connections" aria-expanded="false">
                      <i class="ft-feather mr-50"></i>
                      Connections
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-notifications" data-toggle="pill"
                      href="#account-vertical-notifications" aria-expanded="false">
                      <i class="ft-message-square mr-50"></i>
                      Notifications
                  </a>
              </li>
          </ul>
      </div>
      <!-- right content section -->
      <div class="col-md-9">
          <div class="card">
              <div class="card-content">
                  <div class="card-body">
                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                              aria-labelledby="account-pill-general" aria-expanded="true">
                              <div class="media">
                                  <a href="javascript: void(0);">
                                      <img src="../../../app-assets/images/portrait/small/avatar-s-18.png"
                                          class="rounded mr-75" alt="profile image" height="64" width="64">
                                  </a>
                                  <div class="media-body mt-75">
                                      <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                          <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                              for="account-upload">Upload new photo</label>
                                          <input type="file" id="account-upload" hidden>
                                          <button class="btn btn-sm btn-secondary ml-50">Reset</button>
                                      </div>
                                      <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                              size of
                                              800kB</small></p>
                                  </div>
                              </div>
                              <hr>
                              <form novalidate>
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-username">Username</label>
                                                  <input type="text" class="form-control" id="account-username"
                                                      placeholder="Username" value="hermione007" required
                                                      data-validation-required-message="This username field is required">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-name">Name</label>
                                                  <input type="text" class="form-control" id="account-name"
                                                      placeholder="Name" value="Hermione Granger" required
                                                      data-validation-required-message="This name field is required">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-e-mail">E-mail</label>
                                                  <input type="email" class="form-control" id="account-e-mail"
                                                      placeholder="Email" value="granger007@hogward.com" required
                                                      data-validation-required-message="This email field is required">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                                              <button type="button" class="close" data-dismiss="alert"
                                                  aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                              </button>
                                              <p class="mb-0">
                                                  Your email is not confirmed. Please check your inbox.
                                              </p>
                                              <a href="javascript: void(0);">Resend confirmation</a>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="account-company">Company</label>
                                              <input type="text" class="form-control" id="account-company"
                                                  placeholder="Company name">
                                          </div>
                                      </div>
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                              changes</button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                              aria-labelledby="account-pill-password" aria-expanded="false">
                              <form novalidate>
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-old-password">Old Password</label>
                                                  <input type="password" class="form-control"
                                                      id="account-old-password" required placeholder="Old Password"
                                                      data-validation-required-message="This old password field is required">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-new-password">New Password</label>
                                                  <input type="password" name="password" id="account-new-password"
                                                      class="form-control" placeholder="New Password" required
                                                      data-validation-required-message="The password field is required"
                                                      minlength="6">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-retype-new-password">Retype New
                                                      Password</label>
                                                  <input type="password" name="con-password" class="form-control"
                                                      required id="account-retype-new-password"
                                                      data-validation-match-match="password"
                                                      placeholder="New Password"
                                                      data-validation-required-message="The Confirm password field is required"
                                                      minlength="6">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                              changes</button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                              aria-labelledby="account-pill-info" aria-expanded="false">
                              <form novalidate>
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="accountTextarea">Bio</label>
                                              <textarea class="form-control" id="accountTextarea" rows="3"
                                                  placeholder="Your Bio data here..."></textarea>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-birth-date">Birth date</label>
                                                  <input type="text" class="form-control birthdate-picker" required
                                                      placeholder="Birth date" id="account-birth-date"
                                                      data-validation-required-message="This birthdate field is required">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="accountSelect">Country</label>
                                              <select class="form-control" id="accountSelect">
                                                  <option>USA</option>
                                                  <option>India</option>
                                                  <option>Canada</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="languageselect2">Languages</label>
                                              <select class="form-control" id="languageselect2" multiple="multiple">
                                                  <option value="English" selected>English</option>
                                                  <option value="Spanish">Spanish</option>
                                                  <option value="French">French</option>
                                                  <option value="Russian">Russian</option>
                                                  <option value="German">German</option>
                                                  <option value="Arabic" selected>Arabic</option>
                                                  <option value="Sanskrit">Sanskrit</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-phone">Phone</label>
                                                  <input type="text" class="form-control" id="account-phone" required
                                                      placeholder="Phone number" value="(+656) 254 2568"
                                                      data-validation-required-message="This phone number field is required">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="account-website">Website</label>
                                              <input type="text" class="form-control" id="account-website"
                                                  placeholder="Website address">
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="musicselect2">Favourite Music</label>
                                              <select class="form-control" id="musicselect2" multiple="multiple">
                                                  <option value="Rock">Rock</option>
                                                  <option value="Jazz" selected>Jazz</option>
                                                  <option value="Disco">Disco</option>
                                                  <option value="Pop">Pop</option>
                                                  <option value="Techno">Techno</option>
                                                  <option value="Folk" selected>Folk</option>
                                                  <option value="Hip hop">Hip hop</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="moviesselect2">Favourite movies</label>
                                              <select class="form-control" id="moviesselect2" multiple="multiple">
                                                  <option value="The Dark Knight" selected>The Dark Knight
                                                  </option>
                                                  <option value="Harry Potter" selected>Harry Potter</option>
                                                  <option value="Airplane!">Airplane!</option>
                                                  <option value="Perl Harbour">Perl Harbour</option>
                                                  <option value="Spider Man">Spider Man</option>
                                                  <option value="Iron Man" selected>Iron Man</option>
                                                  <option value="Avatar">Avatar</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                              changes</button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                              aria-labelledby="account-pill-social" aria-expanded="false">
                              <form>
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="account-twitter">Twitter</label>
                                              <input type="text" id="account-twitter" class="form-control"
                                                  placeholder="Add link" value="https://www.twitter.com/">
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="account-facebook">Facebook</label>
                                              <input type="text" id="account-facebook" class="form-control"
                                                  placeholder="Add link">
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="account-google">Google+</label>
                                              <input type="text" id="account-google" class="form-control"
                                                  placeholder="Add link">
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="account-linkedin">LinkedIn</label>
                                              <input type="text" id="account-linkedin" class="form-control"
                                                  placeholder="Add link" value="https://www.linkedin.com/">
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="account-instagram">Instagram</label>
                                              <input type="text" id="account-instagram" class="form-control"
                                                  placeholder="Add link">
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <label for="account-quora">Quora</label>
                                              <input type="text" id="account-quora" class="form-control"
                                                  placeholder="Add link">
                                          </div>
                                      </div>
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                              changes</button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                              aria-labelledby="account-pill-connections" aria-expanded="false">
                              <div class="row">
                                  <div class="col-12 mb-3">
                                      <a href="javascript: void(0);" class="btn btn-info">Connect to
                                          <strong>Twitter</strong></a>
                                  </div>
                                  <div class="col-12 mb-3">
                                      <button class=" btn btn-sm btn-secondary float-right">edit</button>
                                      <h6>You are connected to facebook.</h6>
                                      <span>Johndoe@gmail.com</span>
                                  </div>
                                  <div class="col-12 mb-3">
                                      <a href="javascript: void(0);" class="btn btn-danger">Connect to
                                          <strong>Google</strong>
                                      </a>
                                  </div>
                                  <div class="col-12 mb-2">
                                      <button class=" btn btn-sm btn-secondary float-right">edit</button>
                                      <h6>You are connected to Instagram.</h6>
                                      <span>Johndoe@gmail.com</span>
                                  </div>
                                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                      <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                          changes</button>
                                      <button type="reset" class="btn btn-light">Cancel</button>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                              aria-labelledby="account-pill-notifications" aria-expanded="false">
                              <div class="row">
                                  <h6 class="ml-1 mb-2">Activity</h6>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input type="checkbox" class="switchery" data-size="sm" checked
                                              id="accountSwitch1">
                                          <label class="ml-50" for="accountSwitch1">Email me when someone comments
                                              onmy
                                              article</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input type="checkbox" class="switchery" data-size="sm" checked
                                              id="accountSwitch2">
                                          <label for="accountSwitch2" class="ml-50">Email me when someone answers on
                                              my
                                              form</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input type="checkbox" class="switchery" data-size="sm" id="accountSwitch3">
                                          <label for="accountSwitch3" class="ml-50">Email me hen someone follows
                                              me</label>
                                      </div>
                                  </div>
                                  <h6 class="ml-1 my-2">Application</h6>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input type="checkbox" class="switchery" data-size="sm" checked
                                              id="accountSwitch4">
                                          <label for="accountSwitch4" class="ml-50">News and announcements</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input type="checkbox" class="switchery" data-size="sm" id="accountSwitch5">
                                          <label for="accountSwitch5" class="ml-50">Weekly product updates</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <input type="checkbox" class="switchery" data-size="sm" checked
                                              id="accountSwitch6">
                                          <label for="accountSwitch6" class="ml-50">Weekly blog digest</label>
                                      </div>
                                  </div>
                                  <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                      <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                          changes</button>
                                      <button type="reset" class="btn btn-light">Cancel</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- account setting page end -->
      </div>
    </div>
  </div>
  /////account settings end


  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"><div id="user-profile">
  <div class="row">
      <div class="col-12">
          <div class="card profile-with-cover">
              <div class="card-img-top img-fluid bg-cover height-300 user-profile-cover-image"></div>
              <div class="media profil-cover-details w-100">
                  <div class="media-left pl-2 pt-2">
                      <a href="#" class="profile-image">
                          <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border height-100" alt="Card image">
                      </a>
                  </div>
                  <div class="media-body pt-3 px-2">
                      <div class="row">
                          <div class="col">
                            <h3 class="card-title">Jose Diaz</h3>
                          </div>
                          <div class="col text-right">
                            <button type="button" class="btn btn-primary d-"><i class="la la-plus"></i> Follow</button>
                              <div class="btn-group d-none d-md-block float-right ml-2" role="group" aria-label="Basic example">
                                  <button type="button" class="btn btn-success"><i class="la la-dashcube"></i> Message</button>
                                  <button type="button" class="btn btn-success"><i class="la la-cog"></i></button>
                              </div>
                          </div>
                        </div>
                  </div>
              </div>
              <nav class="navbar navbar-light navbar-profile align-self-end">
                  <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"></button>
                  <nav class="navbar navbar-expand-lg">
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                  <a class="nav-link" href="#"><i class="la la-line-chart"></i> Timeline <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#"><i class="la la-user"></i> Profile</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#"><i class="la la-briefcase"></i> Projects</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#"><i class="la la-heart-o"></i> Favourites</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#"><i class="la la-bell-o"></i> Notifications</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
  </div>
  <section id="timeline" class="timeline-center timeline-wrapper">
      <h3 class="page-title text-center">Timeline</h3>
      <ul class="timeline">
          <li class="timeline-line"></li>
          <li class="timeline-group">
              <a href="#" class="btn btn-primary"><i class="la la-calendar-o"></i> Today</a>
          </li>
      </ul>
      <ul class="timeline">
          <li class="timeline-line"></li>
          <li class="timeline-item">
              <div class="timeline-badge">
                  <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="la la-plane"></i></span>
              </div>
              <div class="timeline-card card border-grey border-lighten-2">
                  <div class="card-header">
                      <h4 class="card-title"><a href="#">Portfolio project work</a></h4>
                      <p class="card-subtitle text-muted mb-0 pt-1">
                          <span class="font-small-3">5 hours ago</span>
                      </p>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-content">
                      <img class="img-fluid" src="../../../app-assets/images/portfolio/width-1200/portfolio-1.jpg" alt="Timeline Image 1">
                      <div class="card-content">
                          <div class="card-body">
                              <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                              <ul class="list-inline">
                                  <li class="pr-1"><a href="#" class=""><span class="la la-thumbs-o-up"></span> Like</a></li>
                                  <li class="pr-1"><a href="#" class=""><span class="la la-commenting-o"></span> Comment</a></li>
                                  <li><a href="#" class=""><span class="la la-share-alt"></span> Share</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-footer px-0 py-0">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-left mr-1">
                                      <a href="#">
                                          <span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"></span>
                                      </a>
                                  </div>
                                  <div class="media-body">
                                      <p class="text-bold-600 mb-0"><a href="#">Jason Ansley</a></p>
                                      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                      <ul class="list-inline">
                                          <li class="pr-1"><a href="#" class=""><span class="la la-thumbs-o-up"></span> Like</a></li>
                                          <li class="pr-1"><a href="#" class=""><span class="la la-commenting-o"></span> Reply</a></li>
                                      </ul>
                                      <div class="media">
                                          <div class="media-left mr-1">
                                              <a href="#">
                                                  <span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-18.png" alt="avatar"></span>
                                              </a>
                                          </div>
                                          <div class="media-body">
                                              <p class="text-bold-600 mb-0"><a href="#">Janice Johnston</a></p>
                                              <p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                              <ul class="list-inline">
                                                  <li class="pr-1"><a href="#" class=""><span class="la la-thumbs-o-up"></span> Like</a></li>
                                                  <li class="pr-1"><a href="#" class=""><span class="la la-commenting-o"></span> Reply</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card-body">
                              <fieldset class="form-group position-relative has-icon-left mb-0">
                                  <input type="text" class="form-control" placeholder="Write comments...">
                                  <div class="form-control-position">
                                      <i class="la la-dashcube"></i>
                                  </div>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </li>
          <li class="timeline-item mt-3">
              <div class="timeline-badge">
                  <span class="avatar avatar-online" data-toggle="tooltip" data-placement="left" title="Eu pid nunc urna integer"><img src="../../../app-assets/images/portrait/small/avatar-s-14.png" alt="avatar"></span>
              </div>
              <div class="timeline-card card border-grey border-lighten-2">
                  <div class="card-header">
                      <h4 class="card-title"><a href="#">Sofia Orav</a></h4>
                      <p class="card-subtitle text-muted mb-0 pt-1">
                          <span class="font-small-3">8 hours ago</span>
                      </p>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-content">
                      <div class="embed-responsive embed-responsive-4by3">
                          <iframe src="https://player.vimeo.com/video/118589137?title=0&amp;byline=0"></iframe>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                              <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                              <p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis in et? Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar adipiscing adipiscing montes! Elementum risus adipiscing non, cras scelerisque risus penatibus? Massa vut, habitasse, tincidunt!</p>
                              <ul class="list-inline">
                                  <li class="pr-1"><a href="#" class=""><span class="la la-thumbs-o-up"></span> Like</a></li>
                                  <li class="pr-1"><a href="#" class=""><span class="la la-commenting-o"></span> Comment</a></li>
                                  <li><a href="#" class=""><span class="la la-share-alt"></span> Share</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-footer px-0 py-0">
                          <div class="card-body">
                              <fieldset class="form-group position-relative has-icon-left mb-0">
                                  <input type="text" class="form-control" placeholder="Write comments...">
                                  <div class="form-control-position">
                                      <i class="la la-dashcube"></i>
                                  </div>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </li>
          <li class="timeline-item block">
              <div class="timeline-badge">
                  <a title="" data-context="inverse" data-container="body" class="border-silc" href="#" data-original-title="block highlight"></a>
              </div>
              <div class="timeline-card card border-grey border-lighten-2">
                  <div class="card-header">
                      <div class="text-center">
                          <p><i class="la la-bar-chart font-medium-4"></i></p>
                          <h4>Campaign Report</h4>
                          <p class="timeline-date">18 hours ago</p>
                          <p>Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar adipiscing adipiscing montes! Elementum risus adipiscing non, cras scelerisque risus penatibus? Massa vut, habitasse, tincidunt!</p>
                      </div>
                  </div>
                  <div class="card-content">
                      <div class="card-body">
                          <div class="chart-container">
                              <div id="stacked-column" class="height-400 overflow-hidden echart-container"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </li>
      </ul>
      <!-- 2016 -->
      <ul class="timeline">
          <li class="timeline-line"></li>
          <li class="timeline-group">
              <a href="#" class="btn btn-primary"><i class="la la-calendar-o"></i> 2016</a>
          </li>
      </ul>
      <ul class="timeline">
          <li class="timeline-line"></li>
          <!-- /.timeline-line -->
          <li class="timeline-item">
              <div class="timeline-badge">
                  <span class="avatar avatar-online" data-toggle="tooltip" data-placement="right" title="Eu pid nunc urna integer"><img src="../../../app-assets/images/portrait/small/avatar-s-5.png" alt="avatar"></span>
              </div>
              <div class="timeline-card card text-white">
                  <img class="card-img img-fluid" src="../../../app-assets/images/portfolio/width-1200/portfolio-2.jpg" alt="Card image">
                  <div class="card-img-overlay bg-overlay">
                      <h4 class="card-title white">Good Morning</h4>
                      <p class="card-text"><small>26 Aug, 2016 at 2.00 A.M</small></p>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis in et? Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar adipiscing adipiscing montes!</p>
                  </div>
              </div>
          </li>
          <li class="timeline-item mt-3">
              <div class="timeline-badge">
                  <span class="bg-teal bg-lighten-1" data-toggle="tooltip" data-placement="left" title="Nullam facilisis fermentum"><i class="la la-check-square-o"></i></span>
              </div>
              <div class="timeline-card card border-grey border-lighten-2">
                  <div class="card-header">
                      <h4 class="card-title"><a href="#">Sofia Orav</a></h4>
                      <p class="card-subtitle text-muted mb-0 pt-1">
                          <span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
                      </p>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-content">
                      <div class="card-content">
                          <div class="card-body">
                              <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                              <ul class="list-group icheck-task">
                                  <li class="list-group-item">
                                      <input type="checkbox" id="input-1"> Cras justo odio</li>
                                  <li class="list-group-item">
                                      <input type="checkbox" id="input-2" checked> Dapibus ac facilisis in</li>
                                  <li class="list-group-item">
                                      <input type="checkbox" id="input-3"> Morbi leo risus</li>
                                  <li class="list-group-item">
                                      <input type="checkbox" id="input-4" disabled checked> Porta ac consectetur ac</li>
                                  <li class="list-group-item">
                                      <input type="checkbox" id="input-5"> Vestibulum at eros</li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-footer px-0 py-0">
                          <div class="card-body">
                              <fieldset class="form-group position-relative has-icon-left mb-0">
                                  <input type="text" class="form-control" placeholder="Write comments...">
                                  <div class="form-control-position">
                                      <i class="la la-dashcube"></i>
                                  </div>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </li>
          <li class="timeline-item">
              <div class="timeline-badge">
                  <span class="bg-purple bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Nullam facilisis fermentum"><i class="la la-area-chart"></i></span>
              </div>
              <div class="timeline-card card border-grey border-lighten-2">
                  <div class="card-header">
                      <h4 class="card-title"><a href="#">Non-ribbon Chord Chart</a></h4>
                      <p class="card-subtitle text-muted mb-0 pt-1">
                          <span class="font-small-3">6 Feb, 2016 at 6.00 A.M</span>
                      </p>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                          <ul class="list-inline mb-0">
                              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-content">
                      <div class="card-content">
                          <div class="card-body">
                              <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                              <div class="chart-container">
                                  <div id="non-ribbon-chord" class="height-400 overflow-hidden echart-container"></div>
                              </div>
                          </div>
                      </div>
                      <div class="card-footer px-0 py-0">
                          <div class="card-body">
                              <fieldset class="form-group position-relative has-icon-left mb-0">
                                  <input type="text" class="form-control" placeholder="Write comments...">
                                  <div class="form-control-position">
                                      <i class="la la-dashcube"></i>
                                  </div>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </li>
      </ul>
      <!-- 2015 -->
      <ul class="timeline">
          <li class="timeline-line"></li>
          <li class="timeline-group">
              <a href="#" class="btn btn-primary"><i class="la la-calendar-o"></i> 2015</a>
          </li>
      </ul>
      <ul class="timeline">
          <li class="timeline-line"></li>
          <!-- /.timeline-line -->
          <li class="timeline-item block">
              <div class="timeline-badge">
                  <a title="" data-context="inverse" data-container="body" class="border-silc" href="#" data-original-title="block highlight"></a>
              </div>
              <div class="timeline-card card border-grey border-lighten-2">
                  <div class="card-header">
                      <div class="text-center">
                          <p class="mt-1"><i class="la la-file-image-o font-medium-4"></i></p>
                          <h4>Media Gallery</h4>
                          <p class="timeline-date">July 1, 2015</p>
                          <p>Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis in et?</p>
                      </div>
                  </div>
                  <!-- Image grid -->
                  <div class="card-content">
                      <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                          <div class="row">
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/1.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/1.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/2.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/2.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/3.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/3.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/4.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/4.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                          </div>
                          <div class="row">
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/5.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/5.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/6.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/6.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/7.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/7.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/8.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/8.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                          </div>
                          <div class="row">
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/9.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/9.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/10.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/10.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/11.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/11.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                              <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                  <a href="../../../app-assets/images/gallery/12.jpg" itemprop="contentUrl" data-size="480x360">
                                      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/12.jpg" itemprop="thumbnail" alt="Image description" />
                                  </a>
                              </figure>
                          </div>
                      </div>
                      <!--/ Image grid -->
                      <!-- Root element of PhotoSwipe. Must have class pswp. -->
                      <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                          <!-- Background of PhotoSwipe.
                   It's a separate element as animating opacity is faster than rgba(). -->
                          <div class="pswp__bg"></div>
                          <!-- Slides wrapper with overflow:hidden. -->
                          <div class="pswp__scroll-wrap">
                              <!-- Container that holds slides.
                      PhotoSwipe keeps only 3 of them in the DOM to save memory.
                      Don't modify these 3 pswp__item elements, data is added later on. -->
                              <div class="pswp__container">
                                  <div class="pswp__item"></div>
                                  <div class="pswp__item"></div>
                                  <div class="pswp__item"></div>
                              </div>
                              <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                              <div class="pswp__ui pswp__ui--hidden">
                                  <div class="pswp__top-bar">
                                      <!--  Controls are self-explanatory. Order can be changed. -->
                                      <div class="pswp__counter"></div>
                                      <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                      <button class="pswp__button pswp__button--share" title="Share"></button>
                                      <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                      <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                      <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                      <!-- element will get class pswp__preloader-active when preloader is running -->
                                      <div class="pswp__preloader">
                                          <div class="pswp__preloader__icn">
                                              <div class="pswp__preloader__cut">
                                                  <div class="pswp__preloader__donut"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                      <div class="pswp__share-tooltip"></div>
                                  </div>
                                  <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                  </button>
                                  <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                  </button>
                                  <div class="pswp__caption">
                                      <div class="pswp__caption__center"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--/ PhotoSwipe -->
              </div>
          </li>
          <li class="timeline-item">
              <div class="timeline-badge">
                  <span class="bg-warning bg-darken-1" data-toggle="tooltip" data-placement="right" title="Application API Support"><i class="la la-life-ring"></i></span>
              </div>
              <div class="timeline-card card border-grey border-lighten-2">
                  <div class="card-header">
                      <div class="media">
                          <div class="media-left mr-1">
                              <a href="#">
                                  <span class="avatar avatar-md avatar-busy"><img src="../../../app-assets/images/portrait/small/avatar-s-18.png" alt="avatar"></span>
                                  <i></i>
                              </a>
                          </div>
                          <div class="media-body">
                              <h4 class="card-title"><a href="#">Application API Support</a></h4>
                              <p class="card-subtitle text-muted mb-0 pt-1">
                                  <span class="font-small-3">15 Oct, 2015 at 8.00 A.M</span>
                                  <span class="badge badge-pill badge-warning float-right">High</span>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="card-content">
                      <img class="img-fluid" src="../../../app-assets/images/portfolio/width-1200/portfolio-3.jpg" alt="Timeline Image 1">
                      <div class="card-content">
                          <div class="card-body">
                              <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                              <ul class="list-inline">
                                  <li class="pr-1"><a href="#" class=""><span class="la la-commenting-o"></span> Comment</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-footer px-0 py-0">
                          <div class="card-body">
                              <div class="media">
                                  <div class="media-left mr-1">
                                      <a href="#">
                                          <span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="avatar"></span>
                                      </a>
                                  </div>
                                  <div class="media-body">
                                      <p class="text-bold-600 mb-0"><a href="#">Crystal Lawson</a></p>
                                      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                      <div class="media">
                                          <div class="media-left mr-1">
                                              <a href="#">
                                                  <span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"></span>
                                              </a>
                                          </div>
                                          <div class="media-body">
                                              <p class="text-bold-600 mb-0"><a href="#">Rafila Găitan</a></p>
                                              <p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <fieldset class="form-group position-relative has-icon-left mb-0">
                                  <input type="text" class="form-control" placeholder="Write comments...">
                                  <div class="form-control-position">
                                      <i class="la la-dashcube"></i>
                                  </div>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </li>
          <li class="timeline-item mt-3">
              <div class="timeline-badge">
                  <span class="bg-amber bg-darken-1" data-toggle="tooltip" data-placement="left" title="Quote of the day"><i class="la la-smile-o"></i></span>
              </div>
              <div class="timeline-card card border-grey border-lighten-2">
                  <div class="card-header">
                      <h4 class="card-title"><a href="#">Quote of the day</a></h4>
                      <p class="card-subtitle text-muted mb-0 pt-1">
                          <span class="font-small-3">03 March, 2015 at 5 P.M</span>
                      </p>
                  </div>
                  <div class="card-content">
                      <img class="img-fluid" src="../../../app-assets/images/portfolio/width-600/portfolio-3.jpg" alt="Timeline Image 1">
                      <div class="card-body">
                          <blockquote class="card-bodyquote">
                              <p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis in et?</p>
                              <footer>Someone famous in
                                  <cite title="Source Title"> - Source Title</cite>
                              </footer>
                          </blockquote>
                      </div>
                  </div>
              </div>
          </li>
      </ul>
      <!-- 2014 -->
      <ul class="timeline">
          <li class="timeline-line"></li>
          <li class="timeline-group">
              <a href="#" class="btn btn-primary"><i class="la la-calendar-o"></i> 2014</a>
          </li>
      </ul>
      <ul class="timeline">
          <li class="timeline-line"></li>
          <!-- /.timeline-line -->
          <li class="timeline-item block">
              <div class="timeline-badge">
                  <a title="" data-context="inverse" data-container="body" class="border-silc" href="#" data-original-title="block highlight"></a>
              </div>
              <div class="timeline-card card border-grey border-lighten-2">
                  <div class="card-header">
                      <div class="text-center">
                          <p><i class="la la-map-marker font-medium-4"></i></p>
                          <h4>Moved to Paris</h4>
                          <p class="timeline-date">Jan 1, 2019</p>
                          <p>Paris, France's capital, is a major European city and a global center for art, fashion,
                              gastronomy and
                              culture. Its 19th-century cityscape is crisscrossed by wide boulevards and the River
                              Seine. Beyond such
                              landmarks as the Eiffel Tower and the 12th-century, Gothic Notre-Dame cathedral, the
                              city is known for its
                              cafe culture and designer boutiques along the Rue du Faubourg Saint-Honoré.</p>
                      </div>
                  </div>
                  <div class="card-content">
                      <div class="card-body">
                          <div id="maps-leaflet-marker-dragable" class="height-450"></div>
                      </div>
                  </div>
              </div>
          </li>
      </ul>
      <!-- 2014 -->
      <ul class="timeline">
          <li class="timeline-line"></li>
          <li class="timeline-group">
              <a href="#" class="btn btn-primary"><i class="la la-calendar-o"></i> Founded in 2012</a>
          </li>
      </ul>
  </section>
</div>

      </div>
    </div>
  </div>

//////account-timeline


<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"><!-- users view start -->
<section class="users-view">
<!-- users view media object start -->
<div class="row">
  <div class="col-12 col-sm-7">
    <div class="media mb-2">
      <a class="mr-1" href="#">
        <img src="../../../app-assets/images/portrait/small/avatar-s-26.png" alt="users view avatar"
          class="users-avatar-shadow rounded-circle" height="64" width="64">
      </a>
      <div class="media-body pt-25">
        <h4 class="media-heading"><span class="users-view-name">Dean Stanley </span><span
            class="text-muted font-medium-1"> @</span><span
            class="users-view-username text-muted font-medium-1 ">candy007</span></h4>
        <span>ID:</span>
        <span class="users-view-id">305</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
    <a href="#" class="btn btn-sm mr-25 border"><i class="ft-message-square font-small-3"></i></a>
    <a href="#" class="btn btn-sm mr-25 border">Profile</a>
    <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-menu-template/page-users-edit.html" class="btn btn-sm btn-primary">Edit</a>
  </div>
</div>
<!-- users view media object ends -->
<!-- users view card data start -->
<div class="card">
  <div class="card-content">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-4">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Registered:</td>
                <td>01/01/2019</td>
              </tr>
              <tr>
                <td>Latest Activity:</td>
                <td class="users-view-latest-activity">30/04/2019</td>
              </tr>
              <tr>
                <td>Verified:</td>
                <td class="users-view-verified">Yes</td>
              </tr>
              <tr>
                <td>Role:</td>
                <td class="users-view-role">Staff</td>
              </tr>
              <tr>
                <td>Status:</td>
                <td><span class="badge badge-success users-view-status">Active</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 col-md-8">
          <div class="table-responsive">
            <table class="table mb-0">
              <thead>
                <tr>
                  <th>Module Permission</th>
                  <th>Read</th>
                  <th>Write</th>
                  <th>Create</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Users</td>
                  <td>Yes</td>
                  <td>No</td>
                  <td>No</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Articles</td>
                  <td>No</td>
                  <td>Yes</td>
                  <td>No</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>Staff</td>
                  <td>Yes</td>
                  <td>Yes</td>
                  <td>No</td>
                  <td>No</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- users view card data ends -->
<!-- users view card details start -->
<div class="card">
  <div class="card-content">
    <div class="card-body">
      <div class="row bg-primary bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">
        <div class="col-12 col-sm-4 p-2">
          <h6 class="text-primary mb-0">Posts: <span class="font-large-1 align-middle">125</span></h6>
        </div>
        <div class="col-12 col-sm-4 p-2">
          <h6 class="text-primary mb-0">Followers: <span class="font-large-1 align-middle">534</span></h6>
        </div>
        <div class="col-12 col-sm-4 p-2">
          <h6 class="text-primary mb-0">Following: <span class="font-large-1 align-middle">256</span></h6>
        </div>
      </div>
      <div class="col-12">
        <table class="table table-borderless">
          <tbody>
            <tr>
              <td>Username:</td>
              <td class="users-view-username">dean3004</td>
            </tr>
            <tr>
              <td>Name:</td>
              <td class="users-view-name">Dean Stanley</td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td class="users-view-email">deanstanley@gmail.com</td>
            </tr>
            <tr>
              <td>Comapny:</td>
              <td>XYZ Corp. Ltd.</td>
            </tr>

          </tbody>
        </table>
        <h5 class="mb-1"><i class="ft-link"></i> Social Links</h5>
        <table class="table table-borderless">
          <tbody>
            <tr>
              <td>Twitter:</td>
              <td><a href="#">https://www.twitter.com/</a></td>
            </tr>
            <tr>
              <td>Facebook:</td>
              <td><a href="#">https://www.facebook.com/</a></td>
            </tr>
            <tr>
              <td>Instagram:</td>
              <td><a href="#">https://www.instagram.com/</a></td>
            </tr>
          </tbody>
        </table>
        <h5 class="mb-1"><i class="ft-info"></i> Personal Info</h5>
        <table class="table table-borderless mb-0">
          <tbody>
            <tr>
              <td>Birthday:</td>
              <td>03/04/1990</td>
            </tr>
            <tr>
              <td>Country:</td>
              <td>USA</td>
            </tr>
            <tr>
              <td>Languages:</td>
              <td>English</td>
            </tr>
            <tr>
              <td>Contact:</td>
              <td>+(305) 254 24668</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- users view card details ends -->

</section>
<!-- users view ends -->
      </div>
    </div>
  </div>
  /////account profile-view

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="row flexbox-container">
  <div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
      <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
        <div class="card-header border-0 pb-0">
          <div class="card-title text-center">
            <img src="../../../app-assets/images/logo/logo-dark.png" alt="branding logo">
          </div>
          <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
        </div>
        <div class="card-content">
          <div class="text-center">
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span
                class="la la-facebook"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span
                class="la la-twitter"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span
                class="la la-linkedin font-medium-4"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span
                class="la la-github font-medium-4"></span></a>
          </div>
          <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using
              Email</span></p>
          <div class="card-body">
            <form class="form-horizontal" action="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/index.html" novalidate>
              <fieldset class="form-group position-relative has-icon-left">
                <input type="text" class="form-control" id="user-name" placeholder="User Name">
                <div class="form-control-position">
                  <i class="la la-user"></i>
                </div>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <input type="email" class="form-control" id="user-email" placeholder="Your Email Address" required>
                <div class="form-control-position">
                  <i class="la la-envelope"></i>
                </div>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <input type="password" class="form-control" id="user-password" placeholder="Enter Password" required>
                <div class="form-control-position">
                  <i class="la la-key"></i>
                </div>
              </fieldset>
              <div class="form-group row">
                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                  <fieldset>
                    <input type="checkbox" id="remember-me" class="chk-remember">
                    <label for="remember-me"> Remember Me</label>
                  </fieldset>
                </div>
                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html"
                    class="card-link">Forgot Password?</a></div>
              </div>
              <button type="submit" class="btn btn-outline-info btn-block"><i class="la la-user"></i> Register</button>
            </form>
          </div>
          <div class="card-body">
            <a href="login-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i>
              Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        </div>
      </div>
    </div>

    ////register page

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
      <!-- BEGIN: Content-->
      <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
          <div class="content-header row">
          </div>
          <div class="content-body"><section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
          <div class="card-header border-0">
            <div class="card-title text-center">
              <img src="../../../app-assets/images/logo/logo-dark.png" alt="branding logo">
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
          </div>
          <div class="card-content">
            <div class="text-center">
              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span
                  class="la la-facebook"></span></a>
              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span
                  class="la la-twitter"></span></a>
              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span
                  class="la la-linkedin font-medium-4"></span></a>
              <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span
                  class="la la-github font-medium-4"></span></a>
            </div>
            <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using Account
                Details</span></p>
            <div class="card-body">
              <form class="form-horizontal" action="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/index.html" novalidate>
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="text" class="form-control" id="user-name" placeholder="Your Username" required>
                  <div class="form-control-position">
                    <i class="la la-user"></i>
                  </div>
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="password" class="form-control" id="user-password" placeholder="Enter Password" required>
                  <div class="form-control-position">
                    <i class="la la-key"></i>
                  </div>
                </fieldset>
                <div class="form-group row">
                  <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                    <fieldset>
                      <input type="checkbox" id="remember-me" class="chk-remember">
                      <label for="remember-me"> Remember Me</label>
                    </fieldset>
                  </div>
                  <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html"
                      class="card-link">Forgot Password?</a></div>
                </div>
                <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
              </form>
            </div>
            <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>New to Modern
                ?</span></p>
            <div class="card-body">
              <a href="register-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="la la-user"></i>
                Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
          </div>
        </div>
      </div>
      //login page

      <!-- BEGIN: Body-->
      <body class="vertical-layout vertical-menu-modern 1-column   blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
        <!-- BEGIN: Content-->
        <div class="app-content content">
          <div class="content-overlay"></div>
          <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><section class="row flexbox-container">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
          <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
            <div class="card-header border-0 pb-0">
              <div class="card-title text-center">
                <img src="../../../app-assets/images/logo/logo-dark.png" alt="branding logo">
              </div>
              <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>We will send you a link
                  to reset password.</span></h6>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form class="form-horizontal" action="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/login-simple.html" novalidate>
                  <fieldset class="form-group position-relative has-icon-left">
                    <input type="email" class="form-control" id="user-email" placeholder="Your Email Address" required>
                    <div class="form-control-position">
                      <i class="la la-envelope"></i>
                    </div>
                  </fieldset>
                  <button type="submit" class="btn btn-outline-info btn-lg btn-block"><i class="ft-unlock"></i> Recover
                    Password</button>
                </form>
              </div>
            </div>
            <div class="card-footer border-0">
              <p class="float-sm-left text-center"><a href="login-simple.html" class="card-link">Login</a></p>
              <p class="float-sm-right text-center">New to Modern ? <a href="register-simple.html" class="card-link">Create
                  Account</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
            </div>
          </div>
        </div>
        ////recover&forgot password