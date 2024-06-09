
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="phpstyle.css">

    
</head>
<body>
    <div class="container">
        <div class="row col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Register Form</h1>
                </div>
                <div class="panel-body">
                    <form action="connect.php" method="post">
                        <div class="form-group">
                            <label class="bio" for="FirstName">FirstName</label><br>
                            <input type="text" class="form-control" id="FirstName" name="FirstName" /><br><br>
                        </div>


                        <div class="form-group">
                            <label class="bio" for="LastName">LastName</label><br>
                            <input type="text" class="form-control" id="LastName" name="LastName"/><br><br>
                        </div>


                     


                        <div class="form-group">
                            <label class="bio" for="email">Email</label><br>
                            <input type="text" name="email" class="form-control" id="email"/><br><br>
                        </div>



                        <div class="sep">

                         <div class="form-group">
                            <label class="bio" for="scholorships">Scholorships</label><br>
                            <input type="text" name="scholorships" class="form-control" id="scholorships"/><br><br>
                        </div>






                        <div class="form-group">
                            <label class="bio" for="password">Password</label><br>
                            <input type="password" name="password" class="form-control" id="password"/><br><br>
                        </div>


                        <div class="form-group">
                            <label class="bio" for="Phone">Phone</label><br>
                            <input type="number" name="Phone" class="form-control" id="Phone"/><br><br>
                        </div>


                       </div>






                      <div class="sep1">

                        

                     <div class="form-group">
                            <label class="bio" for="Location">Location</label><br>
                            <input type="text" name="Location" class="form-control" id="Location"/><br><br>
                        </div>





                       <div class="form-group">
                            <label for="email">Gender</label><br>
                            <div>
                                <label for="male" class="radio-inline"><input type="radio" name="gender" id="male" value="m">Male</label><br>

                                <label for="female" class="radio-inline"><input type="radio" name="gender" id="male" value="f">Female</label>

                            </div>
                        </div><br>



                      </div>





                      <div class="sep3">

                        <input type="submit" class="btn"><br>


                        </div>
                        <a class="link1" href="http://localhost/international%20Scholorships/">Home Page</a>

                    </form>
                </div>
                <div class="panel-footer text-right"><br>
                    <small>&copy; Technical Baryalai</small>
                    

                </div>
            </div>
        </div>
    </div>

        

    
</body>
</html>