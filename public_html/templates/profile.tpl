{extends file="template.tpl"} 
{block name="content"}
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="pro_form" class="row">
                    <div class="col">
                        <h1 class="profile_title">Profile</h1>
                        <div class="row">
                            <label class="col col-form-label font-weight-bold">First Name</label>
                            <div class="col">
                                <p class="font-weight-bold profile_border">{$first_name}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col col-form-label font-weight-bold">Last Name</label>
                            <div class="col">
                                <p class="font-weight-bold profile_border">{$last_name}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col col-form-label font-weight-bold">Gender</label>
                            <div class="col">
                                <p class="font-weight-bold profile_border">{$gender}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="btn" href="../profile_edit" role="button">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}