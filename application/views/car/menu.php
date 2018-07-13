
    <nav class="navbar navbar-default navbar-fixed-top ">
        <!-- Brand and toggle get grouped for better mobile display -->
      
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><?php echo ucwords($this->session->username);?></a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="<?=base_url();?>customer">Customers Details</a></li>
                <li><a href="#">Purchase Details</a></li>
                <li><a href="#">Stock</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <li><a href="<?=base_url()?>home/logout">Logout</a></li>
            </ul>
        </div>

    </nav>
