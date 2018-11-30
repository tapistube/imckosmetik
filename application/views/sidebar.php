<?php
$nama = $this->session->userdata('nama');
$hakAkses = $this->session->userdata('hak_akses');
?>
<div id="main">
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="<?php echo base_url();?>/assets2/images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown-nav" class="dropdown-content">
                                <li>
                                    <a href="<?php echo base_url();?>Login/logout" class="grey-text text-darken-1">
                                        <i class="material-icons">keyboard_tab</i> Logout</a>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav"><?php echo $nama;?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                            <p class="user-roal"><?php echo $hakAkses;?></p>
                        </div>
                    </div>
                </li>
                <li class="no-padding">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li class="bold ">
                            <a href="<?php echo base_url();?>" class="waves-effect waves-cyan">
                                <i class="material-icons">pie_chart_outlined</i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                       <li class="white">
                           <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a class="collapsible-header waves-effect waves-green">
                                        <i class="material-icons">description</i>
                                        <span class="nav-text">Master</span>
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li>
                                                <a class="waves-effect waves-orange" href="<?php echo base_url();?>Barang">
                                                    <span class="nav-text">Master Barang</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-orange" href="#">
                                                    <span class="nav-text">Master Karyawan</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-orange" href="<?php echo base_url();?>Pelanggan">
                                                    <span class="nav-text">Master Pelanggan</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="waves-effect waves-orange" href="#">
                                                    <span class="nav-text">Master Supplier</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                           </ul>
                       </li>
                    </ul>
                </li>
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
                <i class="material-icons">menu</i>
            </a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->