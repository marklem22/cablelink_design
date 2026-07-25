<div class="container-fluid account">
	<div class="container">
        <div class="table-responsive well" style="margin-top:100px">
            <table class="table table-striped">
                <thead>
                	<tr>
                        <th colspan="100%">
                        	<div class="alert alert-warning text-center">
                                <p class="text-danger"><span class="icon-exclamation-sign" style="font-size:56px"></span></p>
                                <p class="text-danger">WE ARE CURRENTLY WORKING ON THIS.</p> 
                                <p class="text-danger">This feature is temporarily unavailable. We apologize for the inconvenience and we appreciate for your patience. Thank you!.</p>
							</div>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="100%">
                            <h3 class="text-info">Manage your account</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th width="110">Account No.</th>
                        <td><?php echo $user_info->account_no?></td>
                    </tr>
                    <tr>
                        <th width="110">Username</th>
                        <td><?php echo $user_info->account_name?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $user_info->email?></td>
                    </tr>
                    <!--<tr>
                        <th>Password</th>
                        <th>
                            <a href="javascript:;" id="link-change-pass" 
                                onclick="Modal('<?php echo base_url().'account/password_verification';?>',{task:'verifyPass'})">
                                Change my password</a>
                        </th>
                    </tr>-->
                </tbody>
            </table>
        </div>
    </div>
</div>