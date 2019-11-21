{extends file="home.tpl"} 
{block name="form"}
    <form method="post">
        <div id="pro_form" class="offset-2">
            <h2 class=" profile_title">Register</h2>
            <div class="form-group row">
                <label for="email" class="col-3 col-form-label font-weight-bold">E-Mail</label>
                <div class="col-7">
                    <input id="email" name="email" type="text" class="form-control"
                            placeholder="" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="first_name" class="col-3 col-form-label font-weight-bold">First
                    Name</label>
                <div class="col-7">
                    <input id="first_name" name="first_name" type="text" class="form-control"
                        placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_name" class="col-3 col-form-label font-weight-bold">Last
                    Name</label>
                <div class="col-7">
                    <input id="last_name" name="last_name" type="text" class="form-control"
                        placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-3 font-weight-bold">Gender</label>
                <div class="col-7">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="male" type="radio" class="custom-control-input"
                            value="male" checked>
                        <label for="male" class="custom-control-label">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="female" type="radio" class="custom-control-input"
                            value="female">
                        <label for="female" class="custom-control-label">Female</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    <a class="btn" href="../index.php" role="button">Cancel</a>
                    <button name="submit" type="submit" class="btn">Register</button>
                </div>
            </div>
        </div>
    </form>
{/block}