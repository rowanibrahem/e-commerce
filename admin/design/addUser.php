
            <form method="POST" action="functions/userAdd.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">username</label>
                    <input type="text" name="username" value="" class = "form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password"  class = "form-control" id="exampleInputEmail1" placeholder="Edit password">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" name="email" value=""  class = "form-control" id="exampleInputEmail1" placeholder="Edit password">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">phone</label>
                    <input type="text" name="phone" value=""  class = "form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="0">
                <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1">
                <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" value="" class = "form-control" id="exampleInputEmail1" >
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">priviledges</label>
                    <select name="priv" class="form-control" id="exampleFormControlSelect1">
                        <option value="0"> Admin </option>
                        <option value="1"> User </option>
</select>
                </div>
                <button type="submit" class="btn btn-primary" > Submit </button>
</form>


		 