<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}"><i class="fa fa-home back-icon"></i> <span>Back to Home</span></a>
                </li>
                <li class="menu-title">Settings</li>
                <li class="@if(request()->route()->getName()=='company-settings.index') active @endif">
                    <a href="{{ route('company-settings.index') }}"><i class="fa fa-building"></i> <span>Company Settings</span></a>
                </li>
                <li class="@if(request()->route()->getName()=='localization-settings.index') active @endif">
                    <a href="{{ route('localization-settings.index') }}"><i class="fa fa-clock-o"></i> <span>Localization</span></a>
                </li>
                <li class="@if(request()->route()->getName()=='theme-settings.index') active @endif">
                    <a href="{{ route('theme-settings.index') }}"><i class="fa fa-picture-o"></i> <span>Theme Settings</span></a>
                </li>
                <li class="@if(request()->route()->getName()=='roles-permissions-settings.index') active @endif">
                    <a href="{{ route('roles-permissions-settings.index') }}"><i class="fa fa-key"></i> <span>Roles & Permissions</span></a>
                </li>
                <li class="@if(request()->route()->getName()=='email-settings.index') active @endif">
                    <a href="{{ route('email-settings.index') }}"><i class="fa fa-envelope-o"></i> <span>Email Settings</span></a>
                </li>
                <li class="@if(request()->route()->getName()=='invoice-settings.index') active @endif">
                    <a href="{{ route('invoice-settings.index') }}"><i class="fa fa-pencil-square-o"></i> <span>Invoice Settings</span></a>
                </li>
                <li class="@if(request()->route()->getName()=='salary-settings.index') active @endif">
                    <a href="{{ route('salary-settings.index') }}"><i class="fa fa-money"></i> <span>Salary Settings</span></a>
                </li>
                <li class="@if(request()->route()->getName()=='notifications-settings.index') active @endif">
                    <a href="{{ route('notifications-settings.index') }}"><i class="fa fa-globe"></i> <span>Notifications</span></a>
                </li>
                <li class="@if(request()->route()->getName()=='leave-type-settings.index') active @endif">
                    <a href="{{ route('leave-type-settings.index') }}"><i class="fa fa-lock"></i> <span> Leave Type</span></a>
                </li>
                <li class="@if(request()->route()->getName()=='change-password-settings') active @endif">
                    <a href="{{ route('change-password-settings') }}"><i class="fa fa-cogs"></i> <span>Change Password</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
