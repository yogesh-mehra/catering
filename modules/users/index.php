<?php
echo md5("yogesh123");
if(isset($_POST['username'])){
    extract($_POST);
    $username=addslashes($username);
    $password=md5($password);
    if (trim($username)) {
    $sql="select id,username,password from users where username='$username'";
    $data = DB('users')->custom($sql,0);
    if($data && is_array($data) && $data['password']==$password){
        echo "login success";
    }else{
        echo "Enter valid Username and Password";

    }
}else{
    echo "Enter Username and password both!";
}
}
?>
<form method="post">
<div class="cont">
            <div class="pagetitle">
                Login <span>Form</span>
            </div>
          <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required class ="form-control" placeholder="Enter Username">
                </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class ="form-control" placeholder="Enter Password" required>
            </div>
            <div class="mb-4 text-center">
                <button type="submit" class="login-btn">Login</button>
            </div>
            </div>
        </form>