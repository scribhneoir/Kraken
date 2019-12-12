{extends file="template.tpl"} 
{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="index.php" method="post">
                    <div id="pro_form" class="offset-2 col-md-8">
                        <h1 class="offset-5 profile_title">Edit Profile</h1>
                        <div class="form-group row">
                            <label for="first_name" class="offset-2 col-3 col-form-label font-weight-bold">First
                                Name</label>
                            <div class="col-7">
                                <input id="first_name" name="first_name" type="text" class="form-control" required="required"
                                        value="{$first_name}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="offset-2 col-3 col-form-label font-weight-bold">Last
                                Name</label>
                            <div class="col-7">
                                <input id="last_name" name="last_name" type="text" class="form-control" required="required"
                                        value="{$last_name}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="offset-2 col-3 col-form-label font-weight-bold">Password</label>
                            <div class="col-7">
                                <input id="password" name="password" type="password" class="form-control" required="required"
                                        value="{$password}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="offset-2 col-3 font-weight-bold">Gender</label>
                            <div class="col-7">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="male" type="radio" class="custom-control-input "
                                            value="male"{if $gender == "male"}checked = "true"{/if}>
                                    <label for="male" class="custom-control-label">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="female" type="radio" class="custom-control-input"
                                            value="female" {if $gender == "female"}checked = "true"{/if}>
                                    <label for="female" class="custom-control-label">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-5 col-8">
                                <a class="btn" href="profile.html" role="button">Cancel</a>
                                <button name="submit" type="submit" class="btn">Submit</button>
                                <a class="btn" href="deleteUser.php" role="button">Delete Account</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{/block}