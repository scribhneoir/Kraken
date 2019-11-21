{extends file="home.tpl"} 
{block name="form"}
    <form method="post">
        <div id="pro_form" class="offset-2">
            <h2 class=" profile_title">Forgot Password</h2>
            <div class="form-group row">
                <label for="email" class="col-3 col-form-label font-weight-bold">E-Mail</label>
                <div class="col-7">
                    <input id="email" name="email" type="text" class="form-control"
                            placeholder="" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-8">
                    <a class="btn" href="../index.php" role="button">Cancel</a>
                    <button name="submit" type="submit" class="btn">Submit</button>
                </div>
            </div>
        </div>
    </form>
{/block}