<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            <img src="{{($setting->logo) ?? asset('assets/site/img/logo.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a>
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>العناصر</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('real_estate.index')}}">
                <i class="fa fe-plus side-menu__icon"></i>
                <span class="side-menu__label">اضافة اعلان</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">المشرفين</span>
            </a>
        </li>






        <li class="slide">
            <a class="side-menu__item" href="{{route('category.index')}}">
                <i class="fe fe-align-justify side-menu__icon"></i>
                <span class="side-menu__label">التصنيفات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('users.index')}}">
                <i class="fe fe-user-plus side-menu__icon"></i>
                <span class="side-menu__label">المستخدمين</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('contact_us.index')}}">
                <i class="fe fe-message-circle side-menu__icon"></i>
                <span class="side-menu__label">الرسائل</span>
            </a>
        </li>

        <li class="slide">

{{--            <a class="side-menu__item" href="{{route('real_estate.index')}}">--}}
{{--                <i class="fe fe-align-justify side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">العقارات</span>--}}
{{--            </a>--}}

            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="fe fe-settings side-menu__icon"></i>
                <span class="side-menu__label">الاعدادات</span><i class="angle fa fa-angle-left"></i>
            </a>
            <ul class="slide-menu">

                <li><a href="{{route('aboutUs.index')}}" class="slide-item"> من نحن</a></li>
                <li><a href="{{route('admin.social')}}" class="slide-item"> وسائل التواصل</a></li>
{{--                <li><a href="{{route('contact_us.index')}}" class="slide-item">  الرسائل</a></li>--}}
{{--                <li><a href="{{route('users.index')}}"  class="slide-item">  حسابى</a></li>--}}

            </ul>

        </li>




{{--                <li class="slide">--}}

{{--        <li class="slide">--}}

{{--            <a class="side-menu__item" href="{{route('sliders.index')}}">--}}
{{--                <i class="fe fe-camera side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">البانر المتحرك</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('users.index')}}">--}}
{{--                <i class="fe fe-user-minus side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">المستخدمين</span>--}}
{{--            </a>--}}
{{--        </li>--}}




{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('points.index')}}">--}}
{{--                <i class="fe fe-dollar-sign" aria-hidden="true"></i>--}}
{{--                <span class="side-menu__label">النقاط</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('users.index')}}">--}}
{{--                <i class="fe fe-user-minus side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">المواقع</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('services.index')}}">--}}
{{--                <i class="fe fe-shopping-cart side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">الخدمات</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('aboutUs.index')}}">--}}
{{--                <i class="fe fe-info side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">ماذا عنا</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('allPosts.index')}}">--}}
{{--                <i class="fe fe-at-sign side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">منشورات المستخدمين</span>--}}
{{--            </a>--}}
{{--        </li>--}}


{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('admin.logout')}}">--}}
{{--                <i class="icon icon-lock side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">تسجيل الخروج</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--    </ul>--}}
</aside>
