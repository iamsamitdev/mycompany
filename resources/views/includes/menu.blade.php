<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Food Delivery</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">หน้าหลัก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">เกี่ยวกับเรา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('service')}}">บริการ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">ติดต่อเรา</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">เข้าสู่ระบบ </a>
                </li>
            </ul>
        </div>
    </div>
</nav>