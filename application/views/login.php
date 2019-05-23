

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">PERPUSTAKAAN PINTAR<b></b></a>
            <small>Coba Login</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?=  site_url('auth/login'); ?>">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                        <div class="col-xs-6 ml-6">
                            <button class="btn btn-block bg-pink waves-effect" type="buttton">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

   