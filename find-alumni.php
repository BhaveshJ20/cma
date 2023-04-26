<?php include 'common.php'; ?>
<?php
$dynamic_page_title = "Maven Academy";
$dynamic_meta_keyword = "Maven Academy";
$dynamic_meta_description = "Maven Academy";
$dynamic_meta_image = $config['Image_Url']."developer_pic6.png";

$active_class = "why_us";
?>
<?php include 'header.php'; ?>

<section class="inner-page-wrap">
    <div class="bg-light-blue search-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="search-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-title mb-4 text-center">
                                    <h1 class="regular">Find Alumni </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 offset-md-1">
                              <div class="search-control">
                                  <div class="row">
                                      <div class="col-sm-9">
                                          <div class="match-results mb-3 mt-2"><strong>77</strong> matching results</div>
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <div class="col-9 align-self-center">
                                          <div class="input-group">
                                              <input type="text" class="form-control" placeholder="Type skill in here" aria-label="Search" aria-describedby="searchbtn">
                                              <div class="input-group-append">
                                                  <button class="search-btn" type="button" id="searchbtn"><img src="images/search-icon.svg" alt="Search Icon"></button>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-3 align-self-center">
                                          <button class="filter-btn align-middle collapsed" type="button" id="filter" data-toggle="collapse" data-target="#filter-section" aria-expanded="false" aria-controls="filter-section"><img src="images/filter.svg" alt="Filter"> <span>Filters</span> </button>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-9">
                                          <div class="badge badge-pill v-light-blue"> <span>Javascript</span> <i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                                          <div class="badge badge-pill v-light-blue"> <span>HTML 5 </span><i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                                          <div class="badge badge-pill v-light-blue"> <span>CSS 3</span><i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                                          <div class="badge badge-pill v-light-blue"> <span>HTML 5 </span><i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                                          <div class="badge badge-pill v-light-blue"> <span>CSS 3 </span><i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                                          <div class="badge badge-pill v-light-blue"> <span>HTML 5 </span><i class="tag-close"><img src="images/close-icon.svg" alr="close"></i> </div>
                                      </div>  
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-box collapse" id="filter-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-10">
                <form>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group mr-3">
                          <div class="sub-title mb-2">
                                <label for="hourrate" class="dark-gray text-uppercase f-bold mb-0">Hourly Rate</label>
                          </div>
                          <small id="rateHelp" class="form-text dark-gray mb-4"><strong>*Minimum</strong> R200 excl vat per hour</small>
                          <div class="select-wrapper">
                            <select class="selectpicker" title="Select" id="hourrate" aria-describedby="rateHelp">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                          </div>
                      </div>
                      <div class="form-group mr-3">
                        <div class="sub-title mb-4">
                          <label for="worktype" class="dark-gray text-uppercase f-bold mb-0">WORK TYPE</label>
                        </div>
                        <div class="custom_checkbox mb-3">
                            <input type="checkbox" id="worktype1" name="worktype1">
                            <label for="worktype1" class="dark-gray"><i></i>On - Site</label>
                        </div>
                        <div class="custom_checkbox mb-3">
                            <input type="checkbox" id="worktype2" name="worktype2">
                            <label for="worktype2" class="dark-gray"><i></i>Remote</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mr-3">
                          <div class="sub-title mb-2">
                                <label for="duration" class="dark-gray text-uppercase f-bold mb-0">Duration</label>
                          </div>
                          <small id="durationHelp" class="form-text dark-gray mb-4"><strong>*Minimum</strong> 1 Month / 160 hours</small>
                          <div class="select-wrapper">
                            <select class="selectpicker" title="Select" id="duration" aria-describedby="durationHelp">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group mr-3">
                        <div class="sub-title mb-4">
                          <label for="nation" class="dark-gray text-uppercase f-bold mb-0">NATIONALITY</label>
                        </div>
                        <div class="custom_checkbox mb-3">
                            <input type="checkbox" id="nation1" name="nation1">
                            <label for="nation1" class="dark-gray"><i></i>South Africa</label>
                        </div>
                        <div class="custom_checkbox mb-3">
                            <input type="checkbox" id="nation2" name="nation2">
                            <label for="nation2" class="dark-gray"><i></i>India</label>
                        </div>
                        <div class="custom_checkbox mb-3">
                            <input type="checkbox" id="nation3" name="nation3">
                            <label for="nation3" class="dark-gray"><i></i>Ukraine</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mr-3">
                        <div class="sub-title mb-2">
                              <label for="experience" class="dark-gray text-uppercase f-bold mb-0">Experience</label>
                        </div>
                        <small id="experienceHelp" class="form-text dark-gray mb-4"><strong>*Minimum</strong> 2 years</small>
                        <div class="select-wrapper">
                          <select class="selectpicker" title="Select" id="experience" aria-describedby="experienceHelp">
                              <option>Option 1</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group mr-3">
                        <div class="sub-title mb-4">
                          <label for="gender" class="dark-gray text-uppercase f-bold mb-0">GENDER</label>
                        </div>
                        <div class="custom_checkbox mb-3">
                            <input type="checkbox" id="male" name="male">
                            <label for="male" class="dark-gray"><i></i>Male</label>
                        </div>
                        <div class="custom_checkbox mb-3">
                            <input type="checkbox" id="female" name="female">
                            <label for="female" class="dark-gray"><i></i>Female</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12"><button type="submit" class="btn btn btn-blue-outline small text-capitalize">Update</button></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="alumni-list">
        <div class="container">
          <div class="pagination-block">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item"> <a class="page-link prev" href="#" tabindex="-1"><i class="fa fa-chevron-left pr-1" aria-hidden="true"></i> Previous</a> </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"> <a class="page-link next" href="#">Next <i class="fa fa-chevron-right pl-1" aria-hidden="true"></i> </a> </li>
              </ul>
            </nav>
          </div>
          <div class="row-col-wrap">
            <div class="row mb-5">
                <div class="col-lg-4">
                  <div class="services-box">
                    <div class="service-box-top">
                        <div class="developer-name-area">
                            <h3 class="name regular mb-3">Irinia Kurkina</h3>
                        </div>
                        <div class="developer-pic">
                            <img src="images/developer_pic1.png" alt="Developer pic">
                        </div>
                    </div>
                    <div class="developer-short-info">
                        <h5 class="designation mb-2">Mid/Senior Angular Developer</h5>
                        <small class="exp-text d-block">6+ years experience</small>
                        <a href="find-alumni-full-details/" class="btn btn-blue-outline small my-3">View Profile</a>
                        <div class="download-resume"><a href="javascript:void(0);" class="link_grey f-semibold">Download Resume</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="services-box">
                    <div class="service-box-top">
                        <div class="developer-name-area">
                            <h3 class="name regular mb-3">Irinia Kurkina</h3>
                        </div>
                        <div class="developer-pic">
                            <img src="images/developer_pic2.png" alt="Developer pic">
                        </div>
                    </div>
                    <div class="developer-short-info">
                        <h5 class="designation mb-2">Mid/Senior Angular Developer</h5>
                        <small class="exp-text d-block">6+ years experience</small>
                        <a href="find-alumni-full-details/" class="btn btn-blue-outline small my-3">View Profile</a>
                        <div class="download-resume"><a href="javascript:void(0);" class="link_grey f-semibold">Download Resume</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="services-box">
                    <div class="service-box-top">
                        <div class="developer-name-area">
                            <h3 class="name regular mb-3">Irinia Kurkina</h3>
                        </div>
                        <div class="developer-pic">
                            <img src="images/developer_pic3.png" alt="Developer pic">
                        </div>
                    </div>
                    <div class="developer-short-info">
                        <h5 class="designation mb-2">Mid/Senior Angular Developer</h5>
                        <small class="exp-text d-block">6+ years experience</small>
                        <a href="find-alumni-full-details/" class="btn btn-blue-outline small my-3">View Profile</a>
                        <div class="download-resume"><a href="javascript:void(0);" class="link_grey f-semibold">Download Resume</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="services-box">
                    <div class="service-box-top">
                        <div class="developer-name-area">
                            <h3 class="name regular mb-3">Irinia Kurkina</h3>
                        </div>
                        <div class="developer-pic">
                            <img src="images/developer_pic4.png" alt="Developer pic">
                        </div>
                    </div>
                    <div class="developer-short-info">
                        <h5 class="designation mb-2">Mid/Senior Angular Developer</h5>
                        <small class="exp-text d-block">6+ years experience</small>
                        <a href="find-alumni-full-details/" class="btn btn-blue-outline small my-3">View Profile</a>
                        <div class="download-resume"><a href="javascript:void(0);" class="link_grey f-semibold">Download Resume</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="services-box">
                    <div class="service-box-top">
                        <div class="developer-name-area">
                            <h3 class="name regular mb-3">Irinia Kurkina</h3>
                        </div>
                        <div class="developer-pic">
                            <img src="images/developer_pic5.png" alt="Developer pic">
                        </div>
                    </div>
                    <div class="developer-short-info">
                        <h5 class="designation mb-2">Mid/Senior Angular Developer</h5>
                        <small class="exp-text d-block">6+ years experience</small>
                        <a href="find-alumni-full-details/" class="btn btn-blue-outline small my-3">View Profile</a>
                        <div class="download-resume"><a href="javascript:void(0);" class="link_grey f-semibold">Download Resume</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="services-box">
                    <div class="service-box-top">
                        <div class="developer-name-area">
                            <h3 class="name regular mb-3">Irinia Kurkina</h3>
                        </div>
                        <div class="developer-pic">
                            <img src="images/developer_pic6.png" alt="Developer pic">
                        </div>
                    </div>
                    <div class="developer-short-info">
                        <h5 class="designation mb-2">Mid/Senior Angular Developer</h5>
                        <small class="exp-text d-block">6+ years experience</small>
                        <a href="find-alumni-full-details/" class="btn btn-blue-outline small my-3">View Profile</a>
                        <div class="download-resume"><a href="javascript:void(0);" class="link_grey f-semibold">Download Resume</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="services-box">
                    <div class="service-box-top">
                        <div class="developer-name-area">
                            <h3 class="name regular mb-3">Irinia Kurkina</h3>
                        </div>
                        <div class="developer-pic">
                            <img src="images/developer_pic3.png" alt="Developer pic">
                        </div>
                    </div>
                    <div class="developer-short-info">
                        <h5 class="designation mb-2">Mid/Senior Angular Developer</h5>
                        <small class="exp-text d-block">6+ years experience</small>
                        <a href="find-alumni-full-details/" class="btn btn-blue-outline small my-3">View Profile</a>
                        <div class="download-resume"><a href="javascript:void(0);" class="link_grey f-semibold">Download Resume</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="services-box">
                    <div class="service-box-top">
                        <div class="developer-name-area">
                            <h3 class="name regular mb-3">Irinia Kurkina</h3>
                        </div>
                        <div class="developer-pic">
                            <img src="images/developer_pic1.png" alt="Developer pic">
                        </div>
                    </div>
                    <div class="developer-short-info">
                        <h5 class="designation mb-2">Mid/Senior Angular Developer</h5>
                        <small class="exp-text d-block">6+ years experience</small>
                        <a href="find-alumni-full-details/" class="btn btn-blue-outline small my-3">View Profile</a>
                        <div class="download-resume"><a href="javascript:void(0);" class="link_grey f-semibold">Download Resume</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="services-box">
                    <div class="service-box-top">
                        <div class="developer-name-area">
                            <h3 class="name regular mb-3">Irinia Kurkina</h3>
                        </div>
                        <div class="developer-pic">
                            <img src="images/developer_pic2.png" alt="Developer pic">
                        </div>
                    </div>
                    <div class="developer-short-info">
                        <h5 class="designation mb-2">Mid/Senior Angular Developer</h5>
                        <small class="exp-text d-block">6+ years experience</small>
                        <a href="find-alumni-full-details/" class="btn btn-blue-outline small my-3">View Profile</a>
                        <div class="download-resume"><a href="javascript:void(0);" class="link_grey f-semibold">Download Resume</a></div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="pagination-block">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item"> <a class="page-link prev" href="#" tabindex="-1"><i class="fa fa-chevron-left pr-1" aria-hidden="true"></i> Previous</a> </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"> <a class="page-link next" href="#">Next <i class="fa fa-chevron-right pl-1" aria-hidden="true"></i> </a> </li>
              </ul>
            </nav>
          </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
<div class="overlay-bg" id="overlay" style="display: none;"></div>

<script>

$(document).ready(function () {

    $('#filter').click(function() {
        $('#overlay').slideToggle("fast");
    });

});

</script>