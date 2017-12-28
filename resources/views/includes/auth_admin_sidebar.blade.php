 <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">

            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="resources/frontend_assets/images/October132015314pm.png"  style="width:100px;" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                        <span class="clear"> <span class="block m-t-xs">
                            <strong class="font-bold">David Williams</strong>
                        </span>
                    </a>
                </div>
            </li>

            <li class="special_link">
                <a href="{{ route('dashboard') }}"><i class="fa fa-database"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('caste') }}"><i class="fa fa-database"></i> <span class="nav-label">Caste</span></a>
            </li>
            <li>
                <a href="{{ route('mother_tongue') }}"><i class="fa fa-database"></i> <span class="nav-label">Mother Tongue</span></a>
            </li>
            <li>
                <a href="{{ route('height') }}"><i class="fa fa-database"></i> <span class="nav-label">Height</span></a>
            </li>
            <li>
                <a href="{{ route('area_field') }}"><i class="fa fa-database"></i> <span class="nav-label">Area / Field</span></a>
            </li>
            <li>
                <a href="{{ route('qualification') }}"><i class="fa fa-database"></i> <span class="nav-label">Qualifications</span></a>
            </li>
            <li>
                <a href="{{ route('annual_income') }}"><i class="fa fa-database"></i> <span class="nav-label">Annual Income</span></a>
            </li>
            <li>
                <a href="{{ route('employed_as') }}"><i class="fa fa-database"></i> <span class="nav-label">Employed As</span></a>
            </li>
        </ul>
    </div>
</nav>