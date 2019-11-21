{extends file="home.tpl"} 
{block name="form"}
    <form method="post">
        <div id="pro_form" class="offset-2">
            <h2 class="profile_title">Login</h2>
            <div class="form-group row">
                <label for="email" class="col-3 col-form-label font-weight-bold">E-Mail</label>
                <div class="col-7">
                    <input id="email" name="email" type="text" class="form-control"
                        placeholder="" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-3 col-form-label font-weight-bold">Password</label>
                <div class="col-7">
                    <input id="password" name="password" type="password" class="form-control"
                        placeholder="" required="required">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>{$msg}</p>
                    <button class="btn" type="submit">Login</button>
                    <a class="btn" href="register" role="button">Register</a>
                    <a class="btn" href="forgot_password" role="button">Forgot Password</a>
                </div>
            </div>
        </div>
    </form>
{/block}
