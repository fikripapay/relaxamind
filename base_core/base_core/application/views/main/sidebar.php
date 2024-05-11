<!-- Sidebar navigation-->
<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <li> 
            <a class="waves-effect waves-dark" href="<?= base_url('dashboard'); ?>" aria-expanded="false">
                <i class="icon-speedometer"></i>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <li> 
            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                <i class="fa fa-list"></i>
                <span class="hide-menu">Master Data</span>
            </a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="<?= base_url('example'); ?>">Example CRUD</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!-- End Sidebar navigation -->