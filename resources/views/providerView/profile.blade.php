<!doctype html>
<html class="no-js" lang="ar" itemscope itemtype="//schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('profile.Edite profile')}} </title>

    <link rel="stylesheet" href="../assest/css/profile.css">
    <style>
        html,
        body {
            height: 100% !important;
        }
    </style>

</head>

<body style="background-image: url(../assest/img/banner_back_illustration.png);">

    <div class="wrapper hsoub-container" dir="ltr">
        <div class="hsoub-content">
            <div class="page-body">
                <div class="container-fluid main">

                    <div class="page-title">
                        <div class="row">
                            <div class="heada__page_title col-md-12 mrg--sm-hm clearfix pdn--an-imp dsp--b">

                                <div class="col-md-4 col-xs-2 action--button-header  ">
                                    <div class="pull--sm-left text-left clearfix header_action-wide-container">

                                    </div>
                                </div>

                                <h1 class="heada__title col-md-8 col-xs-10 order-first " data-page-title="ملفي الشخصي">
                                    <span data-type="page-header-title"> {{__ ('profle.My Profile')}}</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">


                            <div class="row">
                                <div class="col col-md-4">
                                    <div class="panel panel-default text-center bg-dark rounded-3">
                                        <div class="carda__body widget__content">

                                            <div class="profile-card--avatar dsp--f ">
                                                <a href="" class="clr-gray-dark">
                                                    <img src="{{asset(auth()->guard('Provider')->user()->avatar)}}"
                                                        class="img-thumbnail img-circle profile-avatar 256 uavatar uavatar--dashboard img-circle"
                                                        width="84" height="84" alt="">
                                                </a>
                                            </div>
                                            <div class="profile-details">
                                                <h4 class="profile-name mrg--an">
                                                    <a
                                                        class="text-light">{{auth()->guard('Provider')->user()->name}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default mrg--bm " id="account-settings-panel">

                                        <div class="heada bg-dark rounded-top-3 text-light  ">
                                            <h2 class="heada__title  pull-right vcenter">
                                                settings
                                            </h2>
                                            <div class="pull-left">
                                            </div>
                                        </div>
                                        <div class="carda__body collapse in list-group " id="account-settings">

                                            <div class="list-group menu-list-group ">

                                                <div class="list-group-item brd--tn-imp active"> {{__ ('profile.My Profile')}}
                                                </div>
                                                <div class="list-group-item text-light bg-dark rounded-bottom-3">{{__('profile.My notifications')}}
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="panel panel-default bg-dark text-light rounded-3 ">
                                        <div class="heada">
                                            <h4 class="heada__title">
                                               {{__('profile.steps to complete account')}}
                                            </h4>
                                        </div>

                                        <div class="panel-body text-right-xs onboarding">
                                            <div class="dropler__content respon-sm-3 bg-dark ">
                                                <ul class="list-unstyled checklist  text-meta ">
                                                    <li class="">
                                                        <a>
                                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-circle-fill" viewBox="0 0 16 16">
                                                                    <circle cx="8" cy="8" r="8" />
                                                                </svg></i>
                                                            <!--
                                                                mack this icon show when the task done
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                            </svg> -->
                                                            <span class="step text-light">{{__('profile.Add skills')}} </span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a>
                                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-circle-fill" viewBox="0 0 16 16">
                                                                    <circle cx="8" cy="8" r="8" />
                                                                </svg></i>
                                                            <!--
                                                                mack this icon show when the task done
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                            </svg> -->
                                                            <span class="step text-light">{{__('profile.Identity Virfication')}} </span>
                                                        </a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div
                                        style="height: 40px; font-weight: 500; width: 100%; color: #ffffff; margin-top: -15px; margin-bottom: 7px; border-radius: 5px; background-color: #dc143c;display: flex;justify-content:center ;text-align: center;padding: 8px; cursor:pointer " onclick="submit()">
                                        <span>{{__('profile.Save')}}</span>
                                    </div>
                                </div>

                                <div class="col col-md-8">
                                    <div class="panel panel-default">
                                        <div class="carda__body carda__body_profile bg-dark text-light rounded-3">
                                            <form accept-charset="UTF-8" name="profile_form" id="profile_form"  action="{{route('createProviderProfile')}}" method="POST">
                                                @csrf


                                                <div id="profile-fields" class="" style="position:relative;">
                                                    <div style="display: flex;justify-content: space-between;">
                                                    <input type="text" style="padding: 8px; outline: none;border: none; margin-bottom: 7px; " class="rounded-3" placeholder=" {{__('profile.firest name')}}" name="firstname">
                                                    <input type="text" style="padding: 8px; outline: none;border: none; margin-bottom: 7px; " class="rounded-3" placeholder="{{__('profile.second name')}}" name="secondname">
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="account_type">{{__('profile.Account type')}} </label><em
                                                            class="clr-red">*</em>

                                                        <div class="">
                                                            <div class="list-group-item brd--an pdn--vn rounded-3">
                                                                <input style="margin-left: 20px;" type="checkbox"
                                                                    name="type[]" id="account_type2"
                                                                    data-account-type="employer" value="employer">
                                                                <small style="margin-left: 15px;" class="text-muted">
                                                                    {{__('profile.search for freelancer to do my projects')}}
                                                                </small>


                                                                <div class="list-group-item brd--an ">
                                                                    <input type="checkbox" name="type[]"
                                                                        id="account_type1"
                                                                        data-account-type="freelancer" checked
                                                                        value="freelancer">
                                                                    <small style="margin-left: 15px;"
                                                                        class="text-muted">
                                                                        {{__('profile.search for projects to do')}}
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row ">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="profile__title">{{__('profile.Specialization')}}</label><em
                                                                    class="clr-red">*</em>
                                                                <select class="form-control rounded-3"
                                                                    id="profile__speciality_id" name="specialization"
                                                                    data-ui="placeholder-select">
                                                                    <option ></option>
                                                                    <option> {{__('profile.أعمال وخدمات استشارية')}}</option>
                                                                    <option> {{__('profile.برمجة، تطويرالمواقع والتطبيقات')}}</option>
                                                                    <option > {{__('profile.هندسة، عمارة وتصميم داخلي')}}
                                                                    </option>
                                                                    <option> {{__('profile.تصميم، فيديو وصوتيات')}}</option>
                                                                    <option> {{__('profile.تسويق الكتروني ومبيعات')}}</option>
                                                                    <option> {{__('profile.كتابة، تحرير، ترجمة ولغات')}}
                                                                    </option>
                                                                    <option>{{__('profile.دعم، مساعدة وإدخال بيانات')}}
                                                                    </option>
                                                                    <option> {{__('profile.تدريب وتعليم عن بعد')}}</option>
                                                                </select>
                                                                <p class="help-block text-zeta">{{__('profile.Choose your industry')}}
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="form-group">
                                                                <label for="profile__job-title">
                                                                    Job title</label><em class="clr-red">*</em>
                                                                <div class="tagsinput-container">
                                                                    <input type="text" class="form-control rounded-3"
                                                                        id="profile__job_title" name="job_title"
                                                                        data-select="job_title" />
                                                                    <input type="hidden" data-type="job_title_id"
                                                                        value="64" class="rounded-3"
                                                                        name="job_title_id">

                                                                    <p class="help-block text-zeta">{{__('profile.Enter one job title')}}
                                                                    </p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label for="profile__bio">{{__('profile.bio Profile')}}</label><em
                                                        class="clr-red">*</em>
                                                        <textarea placeholder="" id="profile__bio"
                                                            class="form-control rounded-3" rows="2" name="brief"
                                                            cols="50"></textarea>

                                                        <p class="help-block text-zeta">{{__('profile.Add a brief introduction introduce yourself And your education, experience and skills')}}.</p>
                                                    </div>

                                                    <div class="form-group  ">
                                                        <div class="clearfix">
                                                            <label for="skills" class="control-label">{{__('profile.Skills')}}</label><em
                                                            class="clr-red">*</em>
                                                        </div>
                                                        <div class="hide" id="suggested__skills_container">
                                                        </div>
                                                        <div style="display: flex;" class="tagsinput-container">
                                                            <input type="text" class="form-control rounded-3 "
                                                                id="skills" name="skills"/>
                                                                <div style="display: flex;justify-content: flex-start;">
                                                                    <div
                                                                        style=" margin-left: 5px; height: 35px;width: 100px; border-radius: 5px; background-color: #dc143ce8;display: flex;justify-content:center ;text-align: center;padding: 8px;">
                                                                            <span>{{__('profile.Add')}}</span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <p class="help-block text-zeta">
                                                            {{__('profile.Add skills related to your major.')}}</p>

                                                    </div>
                                                    <div style="display: flex;justify-content: flex-start;">
                                                        <div
                                                            style="height: 30px;width: 100px; border-radius: 5px; background-color: #dc143ce8;display: flex;justify-content:center ;text-align: center;padding: 8px;">
                                                            <i><svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                    height="12" fill="currentColor"
                                                                    class="bi bi-award-fill" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                                                    <path
                                                                        d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                                                </svg></i> <span>{{__('profile.skill')}}</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="../assest/js/profile.js"></script>

</html>
