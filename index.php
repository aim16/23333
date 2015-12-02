<?php
include_once 'lib/config.php';
include_once 'header.php';
?>


<div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text"><?php echo $site_name; ?></h1>
            <div class="row center">
                <h5 class="header col s12 light">Easy science to protect personal privacy online</h5>
            </div>
            <div class="row center">
                <a href="user/register.php" id="download-button" class="btn-large waves-effect waves-light orange">立即注册</a>
            </div>
            <br><br>
        </div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">2</i></h2>
                    <h5 class="center">快速</h5>

                    <p class="light">
                     可在多节点、大带宽服务器灵活切换，享受自由快速的科学上网服务。
                    </p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">3</i></h2>
                    <h5 class="center">安全</h5>

                    <p class="light">
                        用户与网站、服务器间通信，均采用高强度加密协议，保证您的隐私与安全。
                    </p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">333</i></h2>
                    <h5 class="center">简单</h5>

                    <p class="light">
                        简单配置，即可在多个平台包括PC，MAC，手机（Android和iOS）和路由器（OpenWrt）等平台使用。
                    </p>
                </div>
            </div>
        </div>

    </div>
    <br><br>

    <div class="section">

    </div>
</div>
<?php  include_once 'ana.php';
       include_once 'footer.php';?>