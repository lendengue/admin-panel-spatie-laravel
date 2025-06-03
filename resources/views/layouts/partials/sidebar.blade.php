<div class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('home.index') }}" style="display:flex; align-items:center; gap:0.75rem; color: inherit; text-decoration: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#66b2cc" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M12 2L3 7v10l9 5 9-5V7l-9-5zM12 4.44L18.48 8 12 11.56 5.52 8 12 4.44zM5 9.4l7 4.12v5.84L5 15.24V9.4zm14 0v5.84l-7 4.12v-5.84l7-4.12z"/>
            </svg>
            <span>Admin Panel</span>
        </a>
    </div>

    <nav aria-label="Menu lateral">
        <a href="">All can see</a>

        @hasanyrole(['admin', 'manager'])
            <a href="">Just admins and managers can see</a>
        @endhasanyrole


        @hasanyrole('admin')
            <div class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                    Only admins can see
                    <span class="arrow"></span>
                </a>
                <div class="submenu" style="display:none;">
                    <a href="">You</a>
                    <a href="">Are</a>
                    <a href="">An</a>
                    <a href="">Admin</a>
                </div>
            </div>
        @endhasanyrole
    </nav>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggles = document.querySelectorAll('.dropdown-toggle');

        toggles.forEach(toggle => {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();

                const dropdown = toggle.parentElement;
                const submenu = dropdown.querySelector('.submenu');
                const isActive = dropdown.classList.contains('active');

                document.querySelectorAll('.dropdown.active').forEach(openDropdown => {
                    if(openDropdown !== dropdown){
                        openDropdown.classList.remove('active');
                        openDropdown.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'false');
                        openDropdown.querySelector('.submenu').style.display = 'none';
                    }
                });

                dropdown.classList.toggle('active', !isActive);
                toggle.setAttribute('aria-expanded', !isActive);
                submenu.style.display = !isActive ? 'block' : 'none';
            });
        });
    });
</script>