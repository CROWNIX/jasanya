<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                @if ($title === 'Edit Project' || $title === "edit team")
                <div class="avatar-sm float-left mr-2">
                    <img src="/atlantisTemplate/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                @else
                <div class="avatar-sm float-left mr-2">
                    <img src="atlantisTemplate/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                @endif

                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ auth()->user()->name }}
                            <span class="user-level">{{ auth()->user()->email }}</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ $title === 'admin' ?'active':'' }}">
                    <a href="{{ url('admin') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item {{ $title === 'datateam' ? 'active':'' }} {{ $title === 'add team'?'active':'' }}">
                    <a data-toggle="collapse" href="#team" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Team</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ $title === 'datateam'?'show':'' }} {{ $title === 'add team'?'show':'' }}"
                        id="team">
                        <ul class="nav nav-collapse">
                            <li class="{{ $title === 'datateam'?'active':'' }}">
                                <a href="{{ url('/team') }}">
                                    <span class="sub-item">team</span>
                                </a>
                            </li>
                            <li class="{{ $title === 'add team'?'active':'' }}">
                                <a href="{{ url('/addTeam ') }}">
                                    <span class="sub-item">add team</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ $title === 'jobdesk' ? 'active':'' }}">
                    <a href="{{ url('jobdesk') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Jobdesk</p>
                    </a>
                </li>
                <li class="nav-item {{ $title === 'layanan' ? 'active':'' }}">
                    <a href="/layanan">
                        <i class="fas fa-desktop"></i>
                        <p>Layanan</p>
                    </a>
                </li>
                <li class="nav-item {{ $title==='project' ? 'active' :'' }} {{ $title==='addproject' ?'active':'' }}">
                    <a data-toggle="collapse" href="#Project" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Project</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ $title==='project' ? 'show' :'' }} {{ $title==='addproject' ?'show':'' }}"
                        id="Project">
                        <ul class="nav nav-collapse">
                            <li class="{{ $title==='project' ? 'active' :'' }}">
                                <a href="/project">
                                    <span class="sub-item">Project</span>
                                </a>
                            </li>
                            <li class="{{ $title==='addproject' ? 'active' :'' }}">
                                <a href="{{ url('/addProject ') }}">
                                    <span class="sub-item">add Project</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ $title === 'kritiksaran' ?'active':'' }}">
                    <a href="{{ url('kritikSaran') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Kritik dan Saran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('register') }}">
                        <i class="fas fa-desktop"></i>
                        <p>register</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>