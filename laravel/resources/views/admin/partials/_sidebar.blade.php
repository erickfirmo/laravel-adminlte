<!-- Sidebar user panel -->
<div class="user-panel">
<div class="pull-left image">
    <img src="/vendor/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
</div>
<div class="pull-left info">
    <p>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</p>
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
</div>
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
<div class="input-group">
    <input type="text" name="q" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat">
            <i class="fa fa-search"></i>
        </button>
        </span>
</div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
<li class="header">Navegação</li>

<li class="treeview{{ classActivePath('admin.cadastro') }}">
    <a href="#">
    <i class="fa fa-plus"></i> <span>Cadastros</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
    <li class="{{ classActivePath('admin.cadastro.despesas') }}"><a href="#"><i class="fa fa-circle-o"></i> Despesas</a></li>
 </ul>
</li>

</ul>