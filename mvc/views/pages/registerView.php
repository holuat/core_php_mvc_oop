
    <form action="./register/dangky"method="POST">
        <div class="form-group">
            <label>User name</label>
            <input type="username"name="username" class="form-control" placeholder="User name">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" name="btnRegister"class="btn btn-primary">Submit</button>
        <?php if( isset($data["result"] )){ ?>
        <h4><?php 
            if($data["result"] == "true"){
                echo "Đăng ký thành công";
            }else{
                echo "Đăng ký thất bại";
            }?>
        </h4>
        <?php } ?>
    </form>