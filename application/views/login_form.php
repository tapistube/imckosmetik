<div id="main">
    <div class="wrapper">
        <section id="content">
            <div class="row" align="center">

                <!-- Form with validation -->
                <div class="col s12 m8 l0" align="center">
                    <br><br>
                    <div class="card-panel">
                        <?php echo form_open_multipart('Login/signInAdmin');?>
                        <h4 class="header2">Login</h4>
                        <div class="row">
                            <form role="form" class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="username" name="username" type="text" class="validate" required>
                                        <label for="first_name">Username</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input id="password" type="password" name="password" class="validate" required>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit">Submit
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>