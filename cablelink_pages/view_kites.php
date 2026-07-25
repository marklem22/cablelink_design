<div class="kiddos">
    <div class="container">
        <div class="row"><BR/>
            <div class="col-md-6 col-md-push-6 form-container">
                <div class="text-center visible-xs visible-sm">
                   <!-- <img style="width:45%" src="<?php echo base_url().'assets/img/kiddos/kiddos_logo.png' ?>" />-->
                </div>
                <form role="form" id="kites-form">
                    <div class="form-group">
                        <label for="question">ARE YOU A CABLELINK SUBSCRIBER ? </label>
                            <select class="form-control" id="question" name="question" data-toggle="popover" onchange="hideme01()" data-content="">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                    </div>
                    <div class="form-group" id="wantu">
                        <label for="account_no">ACCOUNT NUMBER</label>
                        <input type="text" class="form-control" data-toggle="popover" data-content="" id="account_no" name="account_no" maxlength="9"/>
                    </div>
                     <div class="form-group">
                        <label for="name">NAME</label>
                        <input type="text" class="form-control" data-toggle="popover" data-content="" id=name" name="name" />
                    </div>
                     <div class="form-group">
                        <label for="address">ADDRESS</label>
                        <input type="text" class="form-control" data-toggle="popover" data-content="" id="address" name="address" />
                    </div>
                     <div class="form-group">
                        <label for="contact">CONTACT NO</label>
                        <input type="text" class="form-control" data-toggle="popover" data-content="" id="contact" name="contact" />
                    </div>
                     <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="text" class="form-control" data-toggle="popover" data-content="" id="email" name="email" />
                    </div>
            <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="name1">NAME OF ATTENDEES </label>
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="name1" name="name1" />
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="name2" name="name2" />
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="name3" name="name3" />
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="name4" name="name4" />
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="name5" name="name5" />
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="age1">AGE </label>
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="age1" name="age1" />
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="age2" name="age2" />
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="age3" name="age3" />
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="age4" name="age4" />
                                <input type="text" class="form-control" data-toggle="popover" data-content="" id="age5" name="age5" />
                            </div>
                        </div>
                    <div class="row">
                    </div>
                    </div>
                    <div class="form-group" style="text-align:center">
                        <button type="submit" class="btn btn-orange btn-register" style="width:220px">REGISTER</button>
                    </div>
                </form>
            </div>
            <!-- <div class="col-md-6 col-md-pull-6 kiddos-desc">
                <div class="text-center hidden-xs hidden-sm">
                    <img class="kiddos-logo" style="width:60%" src="<?php echo base_url().'assets/img/kiddos/kiddos_logo.png' ?>" />
                </div>
                <div class="text-center">
                    <img style="width:100%; padding-top:5px" src="<?php echo base_url().'assets/img/kiddos/kiddos_info.png' ?>" />
                    <div class="kiddos-social-container">
                        <div class="row" style="padding:0">
                            <div class="col-md-6" style="text-align:center">
                                <a href="https://www.facebook.com/kiddoscablelink" target="_blank" class="hvr-bounce-out"><img src="<?php echo base_url().'assets/img/kiddos/fb.png' ?>" /></a>
                                <a href="https://twitter.com/kiddosclub" target="_blank" class="hvr-bounce-out"><img src="<?php echo base_url().'assets/img/kiddos/twitter.png' ?>" /></a>
                                <a href="https://www.instagram.com/kiddosclub" target="_blank" class="hvr-bounce-out"><img src="<?php echo base_url().'assets/img/kiddos/ig.png' ?>" /></a>
                                <p class="social-info">Cablelink Kiddos Club</p>
                            </div>
                            <div class="col-md-6" style="text-align:center">
                                <a href="havascript:;" class="hvr-bounce-out"><img src="<?php echo base_url().'assets/img/kiddos/email.png' ?>" /></a>
                                <p class="mail-info">kiddos@cablelink.com.ph</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<script type="text/javascript">
function hideme01(){
    var napili = document.getElementById("question").value;
     
    if (napili == "No")
    {
        document.getElementById("wantu").style.display = "none"
        document.getElementById("account_no").value = "000000000"
    }
    else
    {
        document.getElementById("wantu").style.display = ""
        document.getElementById("account_no").value = ""
    }


    //alert("ok");

}
</script>