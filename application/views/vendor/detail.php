<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wedding Manager</title>
</head>

<body>

    <!--Header Starts
    ==================-->
    <?php include_once('application/views/header.php'); ?>

    <section>
    <div class="vendor">
        <div class="content">
            <div class="container">
              <h1><span>Find The Best Suppliers In Your Area</span></h1>
              <div class="col-md-12 nav-search">
                <form method="post" action="../search">
                  <select required="required" name="vendor_type"  class="vendor_search magnifying select-left">
                      <option value="">Select Category</option>
                      <?php if(isset($get_all_vendor_type) && count($get_all_vendor_type) > 0)
                      {
                        foreach ($get_all_vendor_type as $vendor_type)
                        {
                            ?><option value="<?php echo $vendor_type['Vendor_type_id']; ?>"><?php echo $vendor_type['Vendor_type_name']; ?></option>

                        <?php
                        }
                      }?>
                  </select>
                  <select  required="required" name="city" class="vendor_search magnifying select-left" style="margin-left:20px;">
                    <option value="">Select City</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Islamabad">Islamabad</option>
                  </select>
                  <input type="submit" value="Find Vendors" class="btn btn-success" style="font-size:20px; margin-left:150px">
                </form>
              </div>
            </div>
            <section>
            <div class="container" style="margin-top: 50px;margin-bottom: 30px;">
              <div class="row">
                <div class="col-md-6">
                  <span class="vendor_name"><?php echo $get_vendor_by_id['Vendor_name']; ?>.<span>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-warning" data-toggle="modal" data-target="#Quote">Request Quote</button>
                </div>
                <div class="col-md-3">
                  <button class="btn btn-success" data-toggle="modal" data-target="#ContactInfo"><i class="glyphicon glyphicon-earphone" style="font-size: 20px;margin-right: 10px;"></i>View Contact Info</button>
                </div>
              </div>
              <div>
            </section>
            <div class="modal fade" id="Quote" role="dialog">
            </div>
            <div class="modal fade" id="ContactInfo" role="dialog">
              <div class="modal-dialog">

              <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title vendor_contact_header"><b>Contact Info</b></h4>
                  </div>
                  <div class="modal-body">
                    <div style="min-height:700px;">
                    <div class="col-md-6">
                      <div class="row">
                        <span class="vendor_name"><?php echo $get_vendor_by_id['Vendor_name']; ?>.</span>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <i class="glyphicon glyphicon-earphone" style="font-size:20px;"></i>
                        <span class="vendor_name" style="padding-left:15px"><?php echo $get_vendor_by_id['Vendor_contact_no']; ?>.</span>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="row">
                        <i class="glyphicon glyphicon-map-marker" style="font-size:20px;"></i>
                          <span style="font-size:20px; padding-left:15px; color:#aa6708;"><b><?php echo $get_vendor_by_id['Vendor_address']; ?>.</b></span>
                      </div>
                    </div>

                    <div class="row" >
                      <div class="col-md-12" style="padding-top:50px;">
                        <span class="vendor_name">Question You Should Ask</span>
                        <div style="padding-top:20px;">
                          <div class="col-md-2">
                          <div class="serial-num"><span>1</span></div>
                          </div>
                          <div class="col-md-10">
                            <h3 class="qust"><b>HOW MANY EVENTS DO YOU DO PER YEAR (HOW MUCH EXPERIENCE DO YOU HAVE)?</b></h3>
                            <p>This is probably THE most important question you will ask. Ideally, the professional you are interviewing should have ample experience (specifically with weddings if you are getting married).</p>
                            <p><b>Why it's Important:</b> Not only will an experienced vendor be obviously more skilled in their profession, it also ensures that they have a track record on working with other vendors and handling matters if something goes wrong.</p>
                          </div>
                        </div>
                        <div style="padding-top:20px;">
                          <div class="col-md-2">
                          <div class="serial-num"><span>2</span></div>
                          </div>
                          <div class="col-md-10">
                            <h3 class="qust"><b>DO YOU USE ANY CONTRACT?</b></h3>
                            <p><b>The hiring or retaining of the majority of professional services found on Plankaro will absolutely merit a contract.</b> Remember that a contract is designed to protect both you and the business, and virtually all reputable vendors will have one available for your review. If the vendor you are interviewing does not use contracts, you should seriously consider moving on to the next one on your list. The exception to this rule is if it is not standard practice for that type of service to use contracts (such as when buying wedding/party invitations or favors).</p>
                          </div>
                        </div>
                        <div style="padding-top:20px;">
                          <div class="col-md-2">
                          <div class="serial-num"><span>3</span></div>
                          </div>
                          <div class="col-md-10">
                            <h3 class="qust"><b>DO YOU HAVE ANY REVIEWS ON PLANKARO.COM?</b></h3>
                            <p>Real referrals from satisfied clients are hard to fake. Decidio verifies the customer contact information for each posted review for authenticity. <b>If they do not have any reviews posted from previous customers, ask why not.</b> With up to ten thousand brides and party planners using our site every day (including yourself), most reputable businesses will have at least a few reviews regarding the quality of their service. Before hiring, call and ask questions to both previous customers and professional references.</p>
                          </div>
                        </div>
                        <div style="padding-top:20px;">
                          <div class="col-md-2">
                          <div class="serial-num"><span>4</span></div>
                          </div>
                          <div class="col-md-10">
                            <h3 class="qust"><b>HOW MUCH DO YOU COST (INCLUDING PACKAGE PRICING)?</b></h3>
                            <p>After you are satisfied with the vendor's qualifications, price will naturally be the next highest concern when making your final determination on which professional you hire. <b>Remember that pricing for professional services is relative,</b> especially when you factor in experience, skill level, and reputation. The better quality (most talented/experienced/sought after) professionals will naturally cost more because their reputation and level of skill justify their rate.</p></div>
                        </div>
                        <div style="padding-top:20px;">
                          <div class="col-md-2">
                          <div class="serial-num"><span>5</span></div>
                          </div>
                          <div class="col-md-10">
                            <h3 class="qust"><b>WHAT SPECIFICALLY IS INCLUDED IN THAT COST?</b></h3>
                            <p>What is included in specific packages will vary from vendor to vendor, so it's likely that you won't be able to compare which best suits you without first doing a little figuring. <b>Don't make the common mistake in assuming that the lowest cost package will automatically be the best deal.</b> Take into account that higher quotes may include services you want or are considered "must haves", but are not included in lower priced packages.</p></div>
                        </div>
                        <div style="padding-top:20px;">
                          <div class="col-md-2">
                          <div class="serial-num"><span>6</span></div>
                          </div>
                          <div class="col-md-10">
                            <h3 class="qust"><b>ARE THERE ANY ADDITIONAL FEES/TAXES?</b></h3>
                            <p>Make sure you ask what (or if) additional costs such as travel fees, setup fees, taxes, service charges, etc will be included in the final price. These costs should be itemized and clearly defined in your contract before you sign, which leads to our next question.</p></div>
                        </div>
                        <div style="padding-top:20px;">
                          <div class="col-md-2">
                          <div class="serial-num"><span>7</span></div>
                          </div>
                          <div class="col-md-10">
                            <h3 class="qust"><b>WHAT IS YOUR CANCELLATION POLICY IF EITHER YOU OR I CANCEL?</b></h3>
                            <p>Sometimes life does not go as planned, and a cancellation of services is needed. Ask if the contract has a provision for cancellations. Also ask if part of your deposit is refundable if you cancel before a certain date. Finally, ask if the vendor has a back up plan if something happens to them and they unexpectedly cancel.</p>
                          </div>
                        </div>
                        <div style="padding-top:20px;">
                          <div class="col-md-2">
                          <div class="serial-num"><span>8</span></div>
                          </div>
                          <div class="col-md-10">
                            <h3 class="qust"><b>DO YOU HAVE A SOCIAL MEDIA PRESENCE ONLINE?</b></h3>
                            <p>Just like with liability insurance, reputable businesses will appear online in various ways, including Facebook, Twitter, and other forums. Less reputable businesses will tend not to participate in social media, as new customers will be able to quickly learn from the feedback posted by previous unhappy customers and stay away.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>

              </div>
            </div>
            <section>
            <div class="container" style="margin-top: 30px;margin-bottom: 30px;">
              <div class="row">
                <div class="col-md-8">
                  <img src="../../images/blog2.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-4">
                  <span class="vendor_name" style="font-size: 22px;padding-left: 140px;">Details</span>
                    <hr></hr>
                    <i class="glyphicon glyphicon-map-marker" style="font-size:20px;"></i>
                      <span style="font-size:20px; padding-left:15px; color:#aa6708;"><b><?php echo $get_vendor_by_id['Vendor_address']; ?>.</b></span>
                    <hr></hr>
                    <span><i class="glyphicon glyphicon-thumbs-up" style="font-size:25px;  color:darkgray;">20</i><span>
                    <span><i class="glyphicon glyphicon-thumbs-down" style="font-size:25px;margin-left:50px; margin-right:50px; color:darkgray;">10</i><span>
                    <button class="btn btn-info" data-toggle="modal" data-target="#feedback">Leave Feedback</button>
                      <hr></hr>
                    <div class="col-md-12" >
                      <div id="map" style="height:300px; width:100%;"></div>
                    </div>
                </div>
              </div>


              <div>
                <div class="col-md-6" style="margin-top:30px;">
                  <ul class="nav nav-pills nav-justified">
                    <li class="active"><a data-toggle="tab" href="#Overview">Overview</a></li>
                    <li><a data-toggle="tab" href="#Avalaiblity">Avalaiblity</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="Overview" class="tab-pane fade in active">
                      <h3 style="color: #FCB41E;"><b>Key information</b></h3>
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <?php if(isset($get_vendor_services) && count($get_vendor_services)>0)
                            {
                              foreach ($get_vendor_services as $vendor_services) {
                              ?>
                              <tr>
                                <td><?php echo $vendor_services['Service_title'];?></td>
                                  <th>yes</th>
                              </tr>
                              <?php
                              }
                            }?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div id="Avalaiblity" class="tab-pane fade">
                      <h3>Avalaiblity</h3>
                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
    </div>
  </section>
  <script>
  function initmap() {
    var lat;
    var long;
    var mapCanvas = document.getElementById("map");
    var address = '<?php echo $get_vendor_by_id['Vendor_address']; ?>';
    // Initialize the Geocoder
    $.ajax({
        url:"http://maps.googleapis.com/maps/api/geocode/json?address="+address+"&sensor=false",
        type: "POST",
        success:function(res){
          debugger;
           lat = res.results[0].geometry.location.lat;
           long = res.results[0].geometry.location.lng;
           var mapOptions = {
             center: new google.maps.LatLng(31.5546, 74.3572),
             zoom: 12
           }
           var myLatLng = {lat: lat, lng: long};
           var map = new google.maps.Map(mapCanvas, mapOptions);
           var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: address
              });
        }
      });



  }
  </script>
  <script  async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhrfVsc7F6lbBqXi_yxhGRILUEzB6XpPQ&callback=initmap" async defer></script>
  <?php include_once('application/views/footer.php'); ?>
</body>
</html>
