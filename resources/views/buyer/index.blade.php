<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/nextPage.css">
    <link rel="stylesheet" href="../assest/css/buy.css">
    <link rel="stylesheet" href="../assest/css/responsiv.css">


    <script src="../assest/js/maun.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title>Document</title>

</head>

<body onload="starttimer()">
  <div class="alert myaalert  alert-danger justify-contant-space-between" role="alert"><div>
    <a href="#" class="alert-link">{{__('home.website dev')}}</a>.
    {{__('home.contact us please')}}
     <button type="button" class="btn-close close float-end btn-close-white me-2 m-auto"
   data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  <div>

  </div>
  </div>

    <main id="app" :dir="lang ? 'ltr' : 'rtl'">
    <header style="background-color: rgba(255, 255, 255, .5);-webkit-backdrop-filter: blur(5px);backdrop-filter: blur(5px);
        box-shadow: 0 8px 32px rgba(85, 101, 128, 0.1);position: fixed;width: 100%;display: flex;justify-content: space-between;
          align-items: center;z-index: 10;margin-right: 20px;" class="ggg bg-transparent p-2 w-100">
          <h2 class="logo"><a
              style=" font-weight: 520; margin-left: 20px; color: #545f7e; text-decoration: none;font-family: Montserrat, 'Open Sans', sans-serif !important;"
              href="#" class="none"> MonoSpace </a></h2>
          <!---------monospsace word---------->
          <!---->
          <!---->
          <!---->
          <!-- lg d-flex-->
          <ul class="s m-3">

            <!---------home icon---------->

            <!---->
            <!---->
            <div  class="d-flex flex-rows">

              <div style="margin-top: 7px;" class="dropdown">
                <div class="hob" id="dropMenu">
                    <img v-if="lang" style="justify-content: start; margin-left: 5px; cursor: pointer;"
                    src="../assest/img/323310.png" class="bg-light dropdown-toggle drop-menu logp" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" id="d-d">
                    <svg v-else xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30"
                    height="30" viewBox="0 0 30 30">
                    <defs>
                      <clipPath id="a">
                        <rect class="a" width="30" height="30" rx="15" transform="translate(2830 1084)" />
                      </clipPath>
                    </defs>
                    <g class="b" transform="translate(-2830 -1084)">
                      <g transform="translate(2830 1084)">
                        <path class="c" d="M0,0H30V10H0Z" />
                        <path class="d" d="M0,170.7H30v10H0Z" transform="translate(0 -160.698)" />
                        <path d="M0,341.3H30v10H0Z" transform="translate(0 -321.302)" />
                        <path class="e" d="M0,0H10.547V30H0Z" />
                      </g>
                    </g>
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <rect data-name="Rectangle 21224" width="24" height="24" fill="none"></rect>
                    <path data-name="Arrow - Right 2"
                      d="M5.778,4.279c-.034.035-.162.184-.281.306A13.014,13.014,0,0,1,2.02,7a2.77,2.77,0,0,1-.707.2,1.16,1.16,0,0,1-.537-.131A1.124,1.124,0,0,1,.3,6.527a5.9,5.9,0,0,1-.154-.638A14.387,14.387,0,0,1,0,3.6,16.635,16.635,0,0,1,.128,1.391a5.1,5.1,0,0,1,.2-.8A1.071,1.071,0,0,1,1.279,0h.034a2.927,2.927,0,0,1,.793.245,13.014,13.014,0,0,1,3.4,2.38,3.4,3.4,0,0,1,.289.332A1.07,1.07,0,0,1,6,3.6a1.125,1.125,0,0,1-.222.683"
                      transform="translate(15.199 10) rotate(90)" fill="#545F7E"></path>
                  </svg>

                            <!--------------drop icon-------------->
              <ul id="dpm" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li></li>
                <a class="dropdown-item hide" href="{{route('changeLang','ar')}}" >
                  <span style="margin-right: 50px;">{{__('home.Arabic')}}</span>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30"
                    height="30" viewBox="0 0 30 30">
                    <defs>
                      <clipPath id="a">
                        <rect class="a" width="30" height="30" rx="15" transform="translate(2830 1084)" />
                      </clipPath>
                    </defs>
                    <g class="b" transform="translate(-2830 -1084)">
                      <g transform="translate(2830 1084)">
                        <path class="c" d="M0,0H30V10H0Z" />
                        <path class="d" d="M0,170.7H30v10H0Z" transform="translate(0 -160.698)" />
                        <path d="M0,341.3H30v10H0Z" transform="translate(0 -321.302)" />
                        <path class="e" d="M0,0H10.547V30H0Z" />
                      </g>
                    </g>
                  </svg>
                </a>
                </li>
                <!-- Icon Ar -->
                <li>

                  <a class="dropdown-item" href="{{route('changeLang','en')}}" >
                    <span style="margin-right: 20px;">{{__('home.English')}}</span>
                    <img style="justify-content: start; margin-left: 5px; cursor: pointer;"
                      src="../assest/img/united-states-of-america.png" class="bg-light dropdown-toggle drop-menu"
                      type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  </a>

                </li>

                <li>

<a class="dropdown-item" href="{{route('changeLang','fr')}}">
  <span style="margin-right: 20px;">{{__('home.French')}}</span>
  <img style="justify-content: start; margin-left: 5px; cursor: pointer; width:50px;height:50px"
    src="{{asset('./assest/img/french_icon.png')}}" class="bg-light dropdown-toggle drop-menu"
    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
</a>

</li>
              </ul>
                </div>
              </div>
              <!-- user options/icon -->
              <!--<li onclick="prof()" style="cursor:pointer;">
              <img style="width: 40px;height: 40px; border: solid 0.5px #000016;border-radius: 50px;float: right;"
                src="{{asset(auth()->guard('buyer')->user()->avatar)}}" alt="">
            </li>-->
              <!-- ------------------------------- -->
              <div class="dropdown border p-1 rounded text-light" id="Counted_Auth"
                style="display:block;background-color:#a5a4a4;box-shadow:#aaaaaa 0px 0px 20px;">

                <div class="hob " id="dropMenu_2">



                  <div class="d-flex justify-content-between flex-rows w-100">

                    <div>
                      <img
                        style="justify-content: start; border-radius: 100%; margin-left: 5px; cursor: pointer;width: 40px;height: 40px;"
                        src="{{asset(auth()->guard('buyer')->user()->avatar)}}" class="bg-light dropdown-toggle drop-menu" type="button"
                        id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" id="d-d">

                      <div id="id_name" class="fw-bold" style="display:inline"></div>
                    </div>

                    <div>
                      <svg style="margin-bottom:4px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <rect data-name="Rectangle 21224" width="24" height="24" fill="none"></rect>
                        <path data-name="Arrow - Right 2"
                          d="M5.778,4.279c-.034.035-.162.184-.281.306A13.014,13.014,0,0,1,2.02,7a2.77,2.77,0,0,1-.707.2,1.16,1.16,0,0,1-.537-.131A1.124,1.124,0,0,1,.3,6.527a5.9,5.9,0,0,1-.154-.638A14.387,14.387,0,0,1,0,3.6,16.635,16.635,0,0,1,.128,1.391a5.1,5.1,0,0,1,.2-.8A1.071,1.071,0,0,1,1.279,0h.034a2.927,2.927,0,0,1,.793.245,13.014,13.014,0,0,1,3.4,2.38,3.4,3.4,0,0,1,.289.332A1.07,1.07,0,0,1,6,3.6a1.125,1.125,0,0,1-.222.683"
                          transform="translate(15.199 10) rotate(90)" fill="#545F7E"></path>
                      </svg>
                    </div>

                    </div>





                      <ul id="dpm_prof" class="dropdown-menu"  aria-labelledby="dropdownMenuButton2">
                        <li id="profile">
                          <a class="dropdown-item hide d-flex justify-content-start align-items-center fw-bold" href="{{route('buyerProfile')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
                              <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2Zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1.202Z"/>
                            </svg>
                            <span style="margin-left:15px"> {{__('home.Profile')}}</span>
                          </a>
                        </li>

                        <li id="logout">
                          <a class="dropdown-item d-flex justify-content-start align-items-center fw-bold" href="{{route('buyerLogout')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                              class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                              <path fill-rule="evenodd"
                                d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg>
                            <span style="margin-left:15px">{{__('home.logout')}}</span>
                          </a>

                        </li>
                      </ul>

                    </div>
                  </div>
                </div>
                <!-- ------------------------------- -->
          </ul>
        </header>
    <!------------------------------start of contant----------------------------->
    <section style="transform: translateY(105px);" class="rf-logomaker-hero">
        <div class="ellipse-box left" aria-hidden="true">
            <div class="ellipse_path-wrap lg"><img class="ellipse_path lg" src="../assest/img/circle_1.png" alt="">
            </div>
            <div class="ellipse_path-wrap md"><img class="ellipse_path md" src="../assest/img/circle_2.png" alt="">
            </div>
            <div class="ellipse_path-wrap sm"><img class="ellipse_path sm" src="../assest/img/circle_3.png" alt="">
            </div>
        </div>
        <div class="rf-container text-center">
            <h1 class="rf-heading rf-35 secondaryExtraDark">{{__('buyerIndex.Let our Company create any thing U need just for you')}} </h1>
            <h2 class="rf-descr blueGray">
               {{__('buyerIndex.create u need')}}
                <p class="text_bold">  {{__('buyerIndex.create impressive project')}} </p>
            </h2>
        </div>
        <div class="ellipse-box right" aria-hidden="true">
            <div class="ellipse_path-wrap lg"><img class="ellipse_path lg" src="../assest/img/circle_4.png" alt="">
            </div>
            <div class="ellipse_path-wrap md"><img class="ellipse_path md" src="../assest/img/circle_5.png" alt="">
            </div>
            <div class="ellipse_path-wrap sm"><img class="ellipse_path sm" src="../assest/img/circle_6.png" alt="">
            </div>
        </div>

    </section>
    <!------------------------------end of contant----------------------------->
    <!----->
    <!----->
    <!----->
    <!----->

    <!------------------start of contact us---------------------->
    <div style="display: flex;justify-content: center;">
        <section style="align-items: center; background-color: #252E48;border-radius: 20px;box-sizing: border-box;max-width: 100%;
        padding: 40px 20px 20px;position: relative; justify-content: center;width: 900px;">
            <div
                style="display:flex ; justify-content: center;font-family: Montserrat, 'Open Sans', sans-serif !important;">
                <span style="color:#fff; font-weight: 600;font-size: 24px;line-height: 28px;max-width: 620px;margin: 0 auto 15px;
        ">{{__('buyerIndex.Contact with MonoSpace')}}</span>
            </div>
            <div
                style="display:flex ; justify-content: center;font-family: Montserrat, 'Open Sans', sans-serif !important;">
                <span style="color: #fff;margin-bottom: 30px" class="desc">
                    {{__('buyerIndex.be among')}}
                </span>
            </div>
            <div style="display: flex;justify-content: center;">
                <label style="width:200px !important;" class="label show"><input class="form__input"
                        aria-label="Your Email" id="signupEmail" name="email" type="email" placeholder="{{__('buyerIndex.Enter your Name')}}"
                        v-model="email">
                    <div class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <g transform="translate(4 2)">
                                <path data-name="Profile"
                                    d="M0,16.575c0-2.722,3.686-3.4,8-3.4,4.339,0,8,.7,8,3.424S12.315,20,8,20C3.662,20,0,19.3,0,16.575ZM2.706,5.291A5.294,5.294,0,1,1,8,10.583,5.274,5.274,0,0,1,2.706,5.291Z"
                                    fill="#7683a8"></path>
                            </g>
                        </svg></div>
                </label>
                <label :style="lang ? 'margin-left: 10px;' : 'margin-right: 10px;'" class="label show"><input class="form__input" type="password"
                        placeholder="{{__('buyerIndex.Enter your message ')}}">
                    <div class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" class="text-secondary">
                            <g transform="translate(2 3)">
                                <path data-name="Message"
                                    d="M14.939,18H5.06A5.061,5.061,0,0,1,0,12.95V5.05A5.061,5.061,0,0,1,5.06,0h9.879a5.091,5.091,0,0,1,3.58,1.481A5.012,5.012,0,0,1,20,5.05v7.9A5.061,5.061,0,0,1,14.939,18ZM4.034,5.246A.733.733,0,0,0,3.5,5.47a.764.764,0,0,0-.071,1l.131.13L8.11,10.15a3.129,3.129,0,0,0,1.95.68,3.18,3.18,0,0,0,1.958-.68L16.53,6.54l.08-.08a.774.774,0,0,0-.012-1,.831.831,0,0,0-.528-.26h-.042a.76.76,0,0,0-.519.2L11,9a1.565,1.565,0,0,1-1,.36A1.592,1.592,0,0,1,9,9L4.5,5.4A.778.778,0,0,0,4.034,5.246Z"
                                    fill="#7683a8"></path>
                            </g>
                        </svg>
                    </div>
                </label>
                <button :style="lang ? 'margin-left: 10px;' : 'margin-right: 10px;'" class="rf-btn-sq rf-en" id="footerSubscribeButton"> {{__('buyerIndex.Send')}}</button>
            </div>
        </section>
    </div>
    <!------------------end of contact us---------------------->
    <!----->
    <!----->
    <!----->
    <!----->

    <!------------------start of arrow btn---------------------->
    <div style=" display: flex; justify-content: center; animation: bounce-arrow 1s infinite linear;">
        <a href="#akera">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 13.154 8.323">
                <defs>
                    <style>
                        .a {
                            fill: #545f7e;
                            stroke: #545f7e;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <path class="a"
                    d="M3.257,8.043l5.271,5.6a.668.668,0,0,0,.955,0h0l5.271-5.6a.922.922,0,0,0,0-1.276.822.822,0,0,0-1.176,0h0L9.016,11.61,4.453,6.767a.822.822,0,0,0-1.176,0h0a.922.922,0,0,0-.02,1.276Z"
                    transform="translate(-2.434 -6.019)" />
            </svg></a>
    </div>
    <!------------------end of arrow btn---------------------->
    <!----->
    <!----->
    <!----->
    <!----->
    <!---------------------------------------->
    <!-- counter -->
    <div class="section-counter  d-flex justify-content-center align-items-center  ">
      <div class="counter-layer">

      </div>
      <div class="container items ">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box text-center">
              <div class="icons-counter d-flex justify-content-center align-items-center">
                <span class="  ">
                  <i class="fas fa-check"></i>
                </span></div><br>
              <p id="countvalue"  class="text-white counter-text">1</p>
              <p class="text-white  ">{{__('buyerIndex.WORKS COMPLETED')}}</p>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box text-center">
              <div class="icons-counter d-flex justify-content-center align-items-center">
                <span class="  ">
                  <i class="far fa-calendar"></i>
                </span></div><br>
              <p id="countvalue2"  class="text-white counter-text">1</p>
              <p class="text-white  ">{{__('buyerIndex.YEARS OF EXPERIENCE')}}</p>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box text-center">
              <div class="icons-counter d-flex justify-content-center align-items-center">
                <span class="  ">
                  <i class="fas fa-users"></i>
                </span></div><br>
              <p id="countvalue3"  class="text-white counter-text">1</p>
              <p class="text-white  ">{{__('buyerIndex.TOTAL CLIENTS')}}</p>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box text-center">
              <div class="icons-counter d-flex justify-content-center align-items-center">
                <span class="  ">
                  <i class="fas fa-medal"></i>
                </span></div><br>
              <p id="countvalue4"  class="text-white counter-text">1</p>
              <p class="text-white  ">{{__('buyerIndex.AWARD WON')}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of counter -->
    <section
        style="background: linear-gradient(180deg,#EEF5FF 0,#FFF 100%);padding: 70px 0 100px;overflow: hidden;"
        id="akera">
        <div class="screenmo" style="display: block;float: right;margin-right: 100px;">
            <span style="font-size: 40px;font-weight: 700;color: #353e5a;line-break: 2px;">
                 {{__('buyerIndex.Web Development')}}
            </span>
            <div style="border-left: solid 3px  #7370E1 ;width: 350px;word-wrap: break-word;padding: 10px;">
                <span style=" color: #545f7e;font-size: 14px;line-height: 20px">
               {{__('buyerIndex.become successful')}}              </span><br>
                <div style="margin-top: 10px;" class="btn btn-outline-primary"> {{('buyerIndex.Get start for web-dev')}}</div>
            </div>
        </div>
        <!---end of text1-->
        <div class="screenmo"  style="float: right;margin-right: 90px;">
            <img style="width: 550px;border-radius: 10px;animation: animat 1.5s linear infinite alternate;" class="anmi"
                src="../assest/img/web.jpg" alt="">
        </div>
        <!---end of img1-->
        <!---end of area1-->
        <!---->
        <!---->
        <!---->
        <!---->
        <div class="screenmo" style="display: block;float: left;margin-left: 100px;margin-top: 100px;">
            <span style="font-size: 40px;font-weight: 700;color: #353e5a;line-break: 2px;">
               {{__('buyerIndex.App-Development')}}
            </span>
            <div style="border-left: solid 3px  #F7CF06;width: 350px;word-wrap: break-word;padding: 10px;">
                <span style=" color: #545f7e;font-size: 14px;line-height: 20px">
                     {{__('buyerIndex.future of mobile')}}
                </span><br>
                <div style="margin-top: 10px;" class="btn btn-outline-primary"> "{{__('buyerIndex.Get start for app-dev')}}" </div>
            </div>
        </div>
        <!---end of text1-->
        <div class="screenmo"  style="float:left;margin-left: 90px; margin-top: 100px;">
            <img style="width: 550px;border-radius: 10px;animation: animat 1.5s linear infinite alternate;" class="anmi"
                src="../assest/img/appDp.jpg" alt="">
        </div>
        <!---end of area2-->
        <!---->
        <!---->
        <!---->
        <!---->
        <div class="screenmo"  style="display: block;float: right;margin-right: 100px; margin-top: 100px;">
            <span style="font-size: 40px;font-weight: 700;color: #353e5a;line-break: 2px;">
                 {{__('buyerIndex.PHOTOSHOP-DESIGNER')}}
            </span>
            <div style="border-left: solid 3px  #4FDC6F ;width: 350px;word-wrap: break-word;padding: 10px;">
                <span style=" color: #545f7e;font-size: 14px;line-height: 20px">
                   {{__('buyerIndex.three things')}} </span><br>
                <div style="margin-top: 10px;" class="btn btn-outline-primary">{{__('buyerIndex.Get start for Photoshop')}}</div>
            </div>
        </div>
        <!---end of text3-->
        <div class="screenmo"  style="float:right;margin-right: 90px; margin-top: 100px;">
            <img style="width: 550px;border-radius: 10px;animation: animat 1.5s linear infinite alternate;height: 350px;"
                class="anmi" src="../assest/img/p.s.jpg" alt="">
        </div>
        <!---end of img3-->
        <!---end of area3-->
        <!---->
        <!---->
        <!---->
        <!---->
        <div class="screenmo"  style="display: block;float: left;margin-left: 100px;margin-top: 100px;">
            <span style="font-size: 40px;font-weight: 700;color: #353e5a;line-break: 2px;">
                {{__('buyerIndex.Digital Marketing')}}
            </span>
            <div style="border-left: solid 3px  #dc3545;width: 350px;word-wrap: break-word;padding: 10px;">
                <span style=" color: #545f7e;font-size: 14px;line-height: 20px">
                   {{__('buyerIndex.future of mobile')}}
                </span><br>
                <div style="margin-top: 10px;" class="btn btn-outline-primary"> {{__('buyerIndex.Get start for Marketing')}}</div>
            </div>
        </div>
        <!---end of text1-->
        <div class="screenmo"  style="float:left;margin-left: 90px; margin-top: 100px;">
            <img style="width: 550px;border-radius: 10px;animation: animat 1.5s linear infinite alternate;" class="anmi"
                src="../assest/img/market.jpg" alt="">
        </div>
        <!---end of area2-->
    </section>
    <div class="scrollTop-btn show" role="button" aria-label="Scroll up" style="bottom: 23px;"><svg
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="12"
            viewBox="0 0 19 12">
            <defs>
                <path id="arrow_top-a"
                    d="M12.8225264,-2.62844364 L4.70168732,5.16749877 C4.30327456,5.54997192 4.29035296,6.18300504 4.67282611,6.5814178 C4.68224916,6.59123355 4.69187157,6.60085596 4.70168732,6.61027901 L12.8225264,14.4062214 C13.3385811,14.9016299 14.1535959,14.9016299 14.6696506,14.4062214 L14.6696506,14.4062214 C15.1593131,13.9361492 15.1751942,13.1581305 14.705122,12.6684679 C14.6935407,12.656404 14.6817145,12.6445778 14.6696506,12.6329965 L7.64448157,5.88888889 L14.6696506,-0.855218771 C15.1593131,-1.32529099 15.1751942,-2.10330973 14.705122,-2.59297225 C14.6935407,-2.60503614 14.6817145,-2.6168624 14.6696506,-2.62844364 L14.6696506,-2.62844364 C14.1535959,-3.12385212 13.3385811,-3.12385212 12.8225264,-2.62844364 Z">
                </path>
            </defs>
            <use fill="#387DFF" fill-rule="evenodd" transform="matrix(0 1 1 0 3.61 -3.61)" xlink:href="#arrow_top-a">
            </use>
        </svg></div>
    <!--------------end of the scroll top icon----------------->

    <!-- <div class="rf-en" id="cookie_message" style="display: flex;">
        <img class="cookie-icon" src="../assest/img//cooki icon.png" width="80" height="76" alt="Cookie icon">
        <p class="cookie-msg">We use cookies to improve your experience. By clicking agree, you allow us such use.</p>
        <button class="rf-btn blue" onclick="hideMsg()">AGREE</button>
    </div>
    -->
    <!---------------end of cookis----------------->
    </main>
    <script type="application/javascript" src="../assest/js/rtlVue.js"></script>
</body>

<script src="{{asset('../assest/js/nextPage.js')}}"></script>
<script src="{{asset('../assest/js/main.js')}}"></script>
<script src="{{asset('../assest/js/counter.js')}}"></script>



</html>
