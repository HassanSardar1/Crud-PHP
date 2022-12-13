      <!----header---->
    <?php 
    $title = "Welcome Page";
    require_once 'Templates/Header.php';
    require_once 'Model/Conn.php'; 
    ?>

    <h1 class="text-center">Registraion for Company United Sol PVT</h1>
    <form class="row g-3" method="post" action="Controller/Action.php">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="Email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="PassWord" name="PassWord">
            </div>
            <div class="col-md-4">
            <label class="form-label" for="autoSizingInput">First Name</label>
            <input type="text" class="form-control" id="FirstName" placeholder="Ada" name="FirstName">
            </div>
            <div class="col-md-4">
            <label class="form-label" for="autoSizingInput">Last Name</label>
            <input type="text" class="form-control" id="LastName" placeholder="Lovelace" name="LastName">
            </div>
            <div class="col-md-4">
            <label class="form-label" for="autoSizingInput">Age</label>
            <input type="text" class="form-control" id="Age" placeholder="30" name="Age">
            </div>
            <div class="col-md-6">
            <label class="form-label" for="autoSizingInput">Speciality</label>
            <select class="form-select" aria-label="Default select example" id="speciality" name="speciality">
                <option selected>Choose Your Speciality</option>
                <option value="Database Admin">Database Admin</option>
                <option value="Software Developer">Software Developer</option>
                <option value="Other">Other</option>
            </select>
            </div>
            <div class="col-md-6">
            <label class="form-label" for="autoSizingInput">Date Of Birth</label>
            <input type="date" class="form-control" id="DOB" name="DOB" >
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="inputAddress">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="inputAddress2">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="InputCity" name="InputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="InputState" class="form-select"  name="InputState">
                <option selected>Choose State</option>
                <option value="Punjab">Punjab</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="inputZip">
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary" >Sign in</button>
                <br>
                <br>
            </div>
    </form>


    <!----footer---->
    <?php 
    require_once 'Templates/Footer.php'; 
    ?>