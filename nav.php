<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $base_url; ?>">
            <img id="logo" src="img/logo.png" />JVC SpawnKill
        </a>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?php $page === 'fonctionnalites' ? 'active' : ''; ?>"><a href="<?php echo $base_url; ?>">Fonctionnalités</a></li>
                <li class="<?php $page === 'sondage' ? 'active' : ''; ?>"><a href="<?php echo $base_url; ?>sondage.php">Sondage</a></li>
                <li class="irc">
                    <a data-toggle="tooltip" data-placement="bottom" title="Canal IRC : irc://irc.jeuxvideo.com/#spawnkill" target="_blank" href="http://webirc.jeuxvideo.com:7778/#spawnkill">Canal IRC</a>
                </li>
                <form target="_blank" style="display: none;" class="donation-form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input name="cmd" value="_donations" type="hidden">
                    <input name="business" value="LHTF3GZ496X8U" type="hidden">
                    <input name="lc" value="FR" type="hidden">
                    <input name="item_name" value="Dorian Marchal" type="hidden">
                    <input name="amount" value="2.00" type="hidden">
                    <input name="currency_code" value="EUR" type="hidden">
                    <input name="bn" value="PP-DonationsBF:1408178230-capture-du-2014-08-16-10-33-38.jpg:NonHostedGuest" type="hidden">
                </form>
                <li class="donation">
                    <a data-toggle="tooltip" data-placement="bottom"  onclick="$('.donation-form').submit();" title="Faire un don de 2€ à Spixel_" href="#">Me payer une bière</a>
                </li>
                <li>
                    <div>
                        <a target="_blank" href="http://www.jeuxvideo.com/forums/1-50-167035670-18-0-1-0-script-jvc-spawnkill-en-attendant-re.htm#last-page" id="bug" class="btn btn-default navbar-btn" >
                            <span class="glyphicon glyphicon-cog" ></span> Reporter un bug
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li id="download-button" >
                    <a href="#download-box">
                        <span class="glyphicon glyphicon-download-alt"></span> Installer <span class="spawnkill-label">SpawnKill</span>
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
