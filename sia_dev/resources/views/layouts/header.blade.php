<div class="navbar navbar-expand-md header-menu-one bg-light">
    <div class="nav-bar-header-one">
        <div class="header-logo">
            <a href="/home">
                <img src="{{ asset('img/logo.png') }}" width="50px" alt="logo"> <span class="text-white h1">SIA</span>
            </a>
        </div>
        <div class="toggle-button sidebar-toggle">
            <button type="button" class="item-link">
                <span class="btn-icon-wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
    </div>
    <div class="d-md-none mobile-nav-bar">
        <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse"
            data-target="#mobile-navbar" aria-expanded="false">
            <i class="far fa-arrow-alt-circle-down"></i>
        </button>
        <button type="button" class="navbar-toggler sidebar-toggle-mobile">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
        <ul class="navbar-nav">
            <li class="navbar-item header-search-bar">
                <div class="input-group stylish-input-group">
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="flaticon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control" placeholder="Find Something . . .">
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="navbar-item dropdown header-admin">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    <div class="admin-title">
                        <h5 class="item-title">{{ auth()->user()->username }}</h5>
                        <span>{{ auth()->user()->tipo_usuario }}</span>
                    </div>
                    <div class="admin-img">
                        @if (auth()->user()->student_image)
                            <!-- Display the student's image if it exists -->
                            <img src="{{ asset('storage/asset/posts/' . auth()->user()->student_image) }}"
                                alt="student" class="image-fluid" width="35">
                        @else
                            <!-- Display a default image if no student image is available -->
                            <img src="{{ asset('img/pessoa_neutra.png') }}" width="35" alt="estudante">
                        @endif
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                        <h6 class="item-title">{{ auth()->user()->username }}</h6>
                    </div>
                    <div class="item-content">
                        <ul class="settings-list">
                            <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                            <li><a href="#"><i
                                        class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a>
                            </li>
                            <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                            <li>
                                <!-- Logout Form styled like other links -->
                                <form action="{{ route('auth.logout') }}" method="POST" style="display: block;">
                                    @csrf
                                    <button type="submit" class="settings-list-link">
                                        <i class="flaticon-turn-off"></i>Log Out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

            </li>
        </ul>
    </div>
</div>
