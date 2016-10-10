
    <div class="item">
        <div class="header">{{ helper.at('Clinic Center') }} <i class="university icon"></i></div>

        <div class="menu">
            <a class="item{{ helper.activeMenu().activeClass('admin-clinic') }}" href="{{ url.get() }}clinic/index">
                {{ helper.at('Do Servey') }} <i class="pencil icon"></i>
            </a>
            <a class="item{{ helper.activeMenu().activeClass('admin-user') }}" href="{{ url.get() }}clinic-admin/admin-user">
                {{ helper.at('จัดการผู้ใช้งานและสินธิ์') }} <i class="user icon"></i>
            </a>
            <a class="item{{ helper.activeMenu().activeClass('admin-schedule') }}" href="#">
                {{ helper.at('จัดการกำหนดการกรอกข้อมูล') }} <i class="pencil icon"></i>
            </a>
            <a class="item{{ helper.activeMenu().activeClass('admin-news') }}" href="#">
                {{ helper.at('จัดการข่าวสาร') }} <i class="newspaper icon"></i>
            </a>
            <a class="item{{ helper.activeMenu().activeClass('admin-office') }}" href="{{ url.get() }}clinic-admin/office">
                {{ helper.at('จัดการเขตพื้นที่') }} <i class="pencil icon"></i>
            </a>
            <a class="item{{ helper.activeMenu().activeClass('admin-survey-status') }}" href="{{ url.get() }}clinic-admin/session">
                {{ helper.at('จัดการชื่อแบบฟอร์มอิเล็กทรอนิกส์') }} <i class="pencil icon"></i>
            </a>
            <a class="item{{ helper.activeMenu().activeClass('admin-survey-status') }}" href="{{ url.get() }}clinic-admin/surveystatus">
                {{ helper.at('จัดการสถานะกรอกข้อมูล') }} <i class="pencil icon"></i>
            </a>

            <a class="item{{ helper.activeMenu().activeClass('admin-survey-status') }}" href="{{ url.get() }}clinic-admin/newslevel">
                {{ helper.at('จัดการระดับความเร่งด่วนของข่าวสาร') }} <i class="pencil icon"></i>
            </a>
            <a class="item{{ helper.activeMenu().activeClass('admin-survey-status') }}" href="{{ url.get() }}clinic-admin/newslevel">
                {{ helper.at('จัดการระดับความสำคัญของข่าวสาร') }} <i class="pencil icon"></i>
            </a>
            <a class="item{{ helper.activeMenu().activeClass('admin-survey-status') }}" href="{{ url.get() }}clinic-admin/newstype">
                {{ helper.at('จัดการประเภทข่าวสาร') }} <i class="pencil icon"></i>
            </a>
            <a class="item{{ helper.activeMenu().activeClass('admin-amphur') }}" href="{{ url.get() }}clinic-admin/amphur">
                {{ helper.at('จัดการข้อมูลอำเภอ') }} <i class="map icon"></i>
            </a>
        </div>
    </div>