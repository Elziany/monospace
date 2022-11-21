@extends('master.layout')
@section('meta')
    <meta name="facebook-domain-verification" content="n5k83aya1pp02sf716a2cubrmsho3m" />
@endsection
@section('link')
    <link rel="stylesheet" href="{{'./assest/css/home.css'}}">
    <link rel="stylesheet" href="{{'./assest/css/buy.css'}}">
    <link rel="stylesheet" href="{{'./assest/css/bootstrap.min.css'}}">
    <link rel="icon" href="{{'./assest/img/icon.png'}}" type="image/x-icon">
@endsection
@section('style')
    <style>
        *{
        overflow-x:inherit;
        }
        body{
            background-color:fff;
            font-family: Montserrat, 'Open Sans', sans-serif !important;
        }
        .myaalert{
        z-index: 9999;
        position: absolute;
        top:0px;
        width: 100%;
        }
    </style>
@endsection
@section('title')
    home
@endsection
@section('content')
 <!---start first section------>
<div class="content__container" style="padding: 0 20px">
    <div class="content__wrapper">
        <div class="content__content">
            <div style="align-items: flex-start;display: flex;justify-content: space-between;padding: 180px 0 200px" class="wraper">
               <!-------------- start left dev------------->
                <div style="flex: 0 0 570px; margin-left: 50px; " class="content">
                    <h1 style="color:#252E48; font-size: 32px; font-weight: 700; " class="anmation rf-h1">{{__('home.All the tools')}}
                    <span>{{__('home.you need')}}</span> {{__('home.in one')}}<br>
                   {{__('home.place')}}
                    </h1>
                    <br>
                    </h2>
                    <span style="line-height: 1.3; margin: 0; padding: 0; font-size: 16px; color:#545F7E;font-family: Montserrat,'Open Sans',sans-serif!important;">
                    <p>{{__('home.free time')}}
                    </p>
                    <!--------end of content--------->
                    <!---->
                    <!---->
                    <!---->
                    <!--start input message-->
                    <label style="margin-top: 20px; width: 360px;" class="label show">
                        <input class="form__input" aria-label="Your Email" id="signupEmail" name="email" type="email" placeholder="Enter your massage">
                        <div class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g transform="translate(2 3)">
                                    <path data-name="Message"
                                    d="M14.939,18H5.06A5.061,5.061,0,0,1,0,12.95V5.05A5.061,5.061,0,0,1,5.06,0h9.879a5.091,5.091,0,0,1,3.58,1.481A5.012,5.012,0,0,1,20,5.05v7.9A5.061,5.061,0,0,1,14.939,18ZM4.034,5.246A.733.733,0,0,0,3.5,5.47a.764.764,0,0,0-.071,1l.131.13L8.11,10.15a3.129,3.129,0,0,0,1.95.68,3.18,3.18,0,0,0,1.958-.68L16.53,6.54l.08-.08a.774.774,0,0,0-.012-1,.831.831,0,0,0-.528-.26h-.042a.76.76,0,0,0-.519.2L11,9a1.565,1.565,0,0,1-1,.36A1.592,1.592,0,0,1,9,9L4.5,5.4A.778.778,0,0,0,4.034,5.246Z"
                                    fill="#7683a8"></path>
                                </g>
                            </svg>
                        </div>
                    </label>
                    <!--------end of input--------->
                    <!---->
                    <!---->
                    <!---->
                    <!--start get started-->

                    <br>
                    <div style="background: linear-gradient(180deg, #5690FF 0, #3271E6 100%);border-radius: 5px;box-shadow: 0 6px 12px #766de880;
                                color: #FFF;font-size: 18px;margin-inline-end: 10px;transition: all .2s ease;
                                " class=" btn  text-light p-2" onclick="getstart()">
                                {{__('home.start')}}
                    </div>
                    <!--------end of get started--------->
                    <!---->
                    <!---->
                    <!---->
                    <!--start feed back-->
                    <button style="  background: linear-gradient(180deg, #5690FF 0, #3271E6 100%);border-radius: 5px;box-shadow: 0 6px 12px #766de880;
                            color: #FFF;font-size: 18px;margin-inline-end: 10px;padding: 0 30px;
                            transition: all .2s ease;width: 100px; cursor: pointer;"
                            class="open-button btn p-2 text-light" onclick="openForm()">
                    {{__('home.feed back')}}
                    </button>
                        <!--end feed back-->
                    <!--start send feed back-->

                    <div style="display: none;position: fixed;bottom: 0;left: 15px;border: 3px solid #f1f1f1;z-index: 9;
                                position: fixed;bottom: 0;left: 15px;border: 3px solid #f1f1f1;z-index: 9;" class="chat-popup" id="myForm">
                        <form style="max-width: 300px;padding: 10px;background-color: white;" class="form-container">
                            <h1>send feedback</h1>

                            <label for="msg"><b>{{__('home.Message')}}</b></label>
                            <textarea style="width: 100%;padding: 15px;margin: 5px 0 22px 0;border: none;background: #f1f1f1;resize: none;
                                    min-height: 200px;" :placeholder="lang ? 'Type message..' : 'اكتب الرسالة ..'" name="msg" required></textarea>

                            <button style="color: white;padding: 16px 20px;border: none;cursor: pointer;width: 100%;margin-bottom: 10px;
                                    opacity: 0.8;" type="submit" class=" bg-primary btn">{{__('home.Send')}}</button>
                            <button style="padding: 15px;" type="button" class="btn cancel bg-danger w-100 text-light"
                                    onclick="closeForm()">Close</button>
                        </form>
                    </div>
                    <!-------------end send feed back---------------->
                    <!-------------start of chat btn--------------->

                    <div style="margin-top: 30px;" class="rates">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="121.031"
                        height="19.665" viewBox="0 0 121.031 19.665">
                        <defs>
                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#ffd200" />
                            <stop offset="1" stop-color="#f7971e" />
                            </linearGradient>
                        </defs>
                        <path id="Stars"
                            d="M7505.463-6577.7a1.049,1.049,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.057,1.057,0,0,1-.291-1.11,1.13,1.13,0,0,1,.91-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.114,1.114,0,0,1,.88-.589h.421l.17.068.109.04a.669.669,0,0,1,.161.128l.09.068a1,1,0,0,1,.2.266l2.192,4.41a1.115,1.115,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.05,1.05,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.889,4.833a1.092,1.092,0,0,1-.889,1.25,1.191,1.191,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.109,1.109,0,0,0-.5.128l-4.428,2.269a1.114,1.114,0,0,1-.521.128A1.116,1.116,0,0,1,7505.463-6577.7Zm-25,0a1.05,1.05,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.908-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.117,1.117,0,0,1,.879-.589h.421l.17.068.11.04a.667.667,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.051,1.051,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.115,1.115,0,0,0-.5.128l-4.429,2.269a1.1,1.1,0,0,1-.521.128A1.118,1.118,0,0,1,7480.462-6577.7Zm-25,0a1.049,1.049,0,0,1-.451-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.053,1.053,0,0,1-.289-1.11,1.126,1.126,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.421l.17.068.109.04a.633.633,0,0,1,.161.128l.09.068a1.052,1.052,0,0,1,.2.266l2.19,4.41a1.117,1.117,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.046,1.046,0,0,1-.268,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.115,1.115,0,0,0-.5.128l-4.426,2.269a1.116,1.116,0,0,1-.523.128A1.106,1.106,0,0,1,7455.464-6577.7Zm-25,0a1.05,1.05,0,0,1-.451-1.061l.889-4.832a1.07,1.07,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.113,1.113,0,0,0,.831-.6l2.218-4.391a1.116,1.116,0,0,1,.879-.589h.421l.17.068.11.04a.639.639,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.97.708a1.124,1.124,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.094,1.094,0,0,1-.891,1.25,1.2,1.2,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.12,1.12,0,0,0-.5.128l-4.427,2.269a1.115,1.115,0,0,1-.523.128A1.111,1.111,0,0,1,7430.464-6577.7Zm-25,0a1.049,1.049,0,0,1-.45-1.061l.887-4.832a1.063,1.063,0,0,0-.319-.954l-3.739-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.423l.17.068.107.04a.667.667,0,0,1,.162.128l.089.068a1.064,1.064,0,0,1,.2.266l2.189,4.41a1.119,1.119,0,0,0,.882.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.092,1.092,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.861.861,0,0,0-.27-.086h-.271a1.107,1.107,0,0,0-.5.128l-4.429,2.269a1.113,1.113,0,0,1-.522.128A1.111,1.111,0,0,1,7405.464-6577.7Z"
                            transform="translate(-7400.985 6596.656)" stroke="rgba(0,0,0,0)" stroke-width="1"
                            fill="url(#linear-gradient)" />
                        </svg>

                    </div>
                    <!----------end of chat btn---------->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->

                </div>
                    <!-----------end of left dev--------->
                <div style="overflow: hidden;" class="">
                    <img style="overflow: hidden; margin-right: 30px; width: 500px !important; height:350px !important;  border-radius: 15px 15px 15px; box-shadow:0 0 24px #b577f980;
                        background-color: #FFF;-webkit-backdrop-filter: blur(10px);
                        flex-basis: 600px;backdrop-filter: blur(10px);border: 1px solid #FFF; " src="./assest/img/ALL.jpg"
                        class=" content__img anmi">

                </div>
            </div>
        </div>
    </div>
</div>
  <!-----------end of right dev--------->
  <!-----------end of first section------------>
  <!---->
  <!---->
  <!---->
  <!-------------start of the tursted line-->
<div style="background-color:rgb(240, 241, 243)">
    <div style="display: flex; justify-content: center; transform: translateY(-120px); ">
        <fieldset class="line"
                  style="  width:90%; border-bottom: solid 2px #ffff;border-left: solid 2px #ffff;
                  border-right: solid 2px #ffff;">
            <legend style="justify-content: center;display: flex; text-align: center; padding-left: 8px; padding-right: 8px;
                    color: #545F7E;margin: 0 auto;padding: 0 12px;text-align: center;white-space: nowrap;
                    font-size: 16px; font-family: Montserrat, 'Open Sans', sans-serif !important;
                    line-height: 1.3;">
                  {{__('home.Trusted by')}}
            </legend>
        </fieldset>
    </div>
    <!---------end of the tursted line--------------->
    <!---->
    <!---->
    <!---->
    <!---->
    <!-------------------------->
    <div style=" width: 100%; height: auto; display: flex ;justify-content: center;">
      <h2 style="font-weight: 700; margin-top: 50px;padding: 8px;"
        class=" content__badges_title rf-h3 appear-item appear-2 appear">{{__('home.different categories')}}</h2>
    </div>
    <!-------------------------->
    <div style="width: 100% !important; max-width :1240px !important; padding:10px !important;" class="container-fluid flex flex-wrap justify-center align-center mx-auto" dir="ltr">
      <div class="row ">
        <div style="margin-top: 50px; margin-right: 30px;" class="col-4 ">
          <img  src="./assest/img/IT.png" alt="">
          <span style=" position: absolute; margin-left: 20px; text-align: left;cursor: pointer;" type="button">
            <h5 style="font: size 1.25rem; font-weight: 600;">
              {{__('home.websites')}}
            </h5>
            <span style="font-size: 15px;font-family: 'RobotoSubset', 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
          " dir="ltr">PHP, HTML, JavaScript, Software Architecture, <br>WordPress...</span>
          </span>
        </div>
        <!--------------1st ctg------------------->
        <div style="margin-top: 50px; margin-left: 60px;" class=" no  col-4 ">
          <img src="./assest/img/mobile.png" alt="">
          <span style=" position: absolute; margin-left: 20px; text-align: left;cursor: pointer;" type="button">
            <h5 style="font: size 1.25rem; font-weight: 600;">
              {{__('home.mobile')}}
            </h5>
            <span style="font-size: 15px;font-family: 'RobotoSubset', 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            ">Mobile App Development, Android, iPhone, iPad, <br>Kotlin...</span>
          </span>
        </div>
        <!--------------2nd ctg------------------->
        <div style="margin-top: 40px; margin-left: 80px;" class="no col-4 ">
          <img src="./assest/img/design.png" alt="">
          <span style=" position: absolute; margin-left: 15px; text-align: left;cursor: pointer;" type="button">
            <h5 style="font: size 1.25rem; font-weight: 600;">{{__('home.media')}}
            </h5>
            <span style="font-size: 15px;font-family: 'RobotoSubset', 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            ">Graphic Design, Website Design, Photoshop, <br>Logo Design, Illustrator...</span>
          </span>
        </div>
        <!--------------3ed ctg------------------->
      </div>
    </div>
    <div style="height: 20px ;"></div>
    <!-------------------------->
    <!---->
    <!---->
    <!---->
    <!---->
    <div style="max-width :1240px !important;" class="container" dir="ltr">
      <div class="row">
        <div style="margin-top: 50px; margin-right: 30px;" class="col-4">
          <img src="./assest/img/marketing.png" alt="">
          <span style=" position: absolute; margin-left: 20px; text-align: left;cursor: pointer;" type="button">
            <h5 style="font: size 1.25rem; font-weight: 600;">
              {{__('home.marketing')}}
            </h5>
            <span style="font-size: 15px;font-family: 'RobotoSubset', 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        ">Internet Marketing, Marketing, Social Media, <br>Marketing, Facebook Marketing, Sales...</span>
          </span>
        </div>
        <!--------------4th ctg------------------->
        <div style="margin-top: 50px; margin-left: 60px;" class=" no col-4">
          <img src="./assest/img/writing.png" alt="">
          <span style=" position: absolute; margin-left: 20px; text-align: left;cursor: pointer;" type="button">
            <h5 style="font: size 1.25rem; font-weight: 600;">
              {{__('home.writing')}}
            </h5>
            <span style="font-size: 15px;font-family: 'RobotoSubset', 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
          ">Article Writing, Content Writing, Copywriting, <br>Research Writing, Ghostwriting...</span>
          </span>
        </div>
        <!--------------5th ctg------------------->
        <div style="margin-top: 40px; margin-left: 80px;" class=" no col-4">
          <img src="./assest/img/trandlate.png" alt="">
          <span style=" position: absolute; margin-left: 15px; text-align: left;cursor: pointer;" type="button">
            <h5 style="font: size 1.25rem; font-weight: 600;">
              {{__('home.translations')}}
            </h5>
            <span style="font-size: 15px;font-family: 'RobotoSubset', 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
          ">English (US) Translator, English (UK) Translator, <br>English Grammar...</span>
          </span>
        </div>
        <!--------------6th ctg------------------->
      </div>
    </div>
    <div style="display:flex ; justify-content: center; transform: translateX(-220px); overflow: hidden;">
      <svg class=" try anmi" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="240"
        height="180" viewBox="0 0 240 180">
        <defs>
          <clipPath id="clip-path">
            <rect id="Rectangle_21867" data-name="Rectangle 21867" width="240" height="180"
              transform="translate(741 2010)" fill="none" />
          </clipPath>
          <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#f06685" />
            <stop offset="1" stop-color="#f560b6" />
          </linearGradient>
          <linearGradient id="linear-gradient-2" x2="0.453" y2="0.985" xlink:href="#linear-gradient" />
          <filter id="Path_26275" x="-24" y="-9" width="210.018" height="210" filterUnits="userSpaceOnUse">
            <feOffset dy="6" input="SourceAlpha" />
            <feGaussianBlur stdDeviation="5" result="blur" />
            <feFlood flood-color="#df3f66" flood-opacity="0.502" />
            <feComposite operator="in" in2="blur" />
            <feComposite in="SourceGraphic" />
          </filter>
          <filter id="Path_26275-2" x="-24" y="-9" width="210.018" height="210" filterUnits="userSpaceOnUse">
            <feOffset dx="3" dy="3" input="SourceAlpha" />
            <feGaussianBlur stdDeviation="3" result="blur-2" />
            <feFlood flood-color="#fff" flood-opacity="0.502" result="color" />
            <feComposite operator="out" in="SourceGraphic" in2="blur-2" />
            <feComposite operator="in" in="color" />
            <feComposite operator="in" in2="SourceGraphic" />
          </filter>
        </defs>
        <g id="En_try_today" data-name="En_try today" transform="translate(-741 -2010)" clip-path="url(#clip-path)">
          <g id="Illustration_Try_today" data-name="Illustration_Try today" transform="translate(599.283 -1310.471)">
            <path id="Arrow"
              d="M9.2,7.881c0,1.779-.035,3.355.006,4.929a48.828,48.828,0,0,0,4.707,20.783,25.954,25.954,0,0,0,11.051,11.87,7.868,7.868,0,0,0,1.487.7,3.8,3.8,0,0,1,2.234,1.912,31.64,31.64,0,0,0,12.8,11.39A42.213,42.213,0,0,0,57.05,64.053c1.615.155,3.241.224,4.865.27a2.24,2.24,0,0,0,2.4-2.287,2.269,2.269,0,0,0-2.4-2.291,38.553,38.553,0,0,1-21.7-6.506,60.022,60.022,0,0,1-5.218-4.461,6.287,6.287,0,0,1-.555-.662c1.049,0,1.967.039,2.88-.006a11.226,11.226,0,0,0,10.708-9.036,11.523,11.523,0,0,0-9.469-13.639,11.231,11.231,0,0,0-13.076,9.791,29.727,29.727,0,0,0,.048,4.425c0,.189.031.377.062.731-.321-.219-.546-.36-.758-.519a24.771,24.771,0,0,1-8.014-11.144,41.06,41.06,0,0,1-2.75-12.246c-.194-2.787-.26-5.582-.384-8.373l.186-.067c.15.128.308.246.447.384q2.262,2.254,4.52,4.512A2.318,2.318,0,1,0,22.118,9.7Q17.708,5.278,13.289.868A2.29,2.29,0,0,0,9.7.861Q5.256,5.291.825,9.74a2.312,2.312,0,1,0,3.269,3.244C5.754,11.336,7.405,9.679,9.2,7.881ZM35.093,43.608c-.687-.109-2.056-.3-3.411-.562a1.011,1.011,0,0,1-.659-.6,30.087,30.087,0,0,1-1.077-4.792c-.424-4.9,3.283-8.411,8.01-7.614a6.4,6.4,0,0,1,5.431,5.054,6.336,6.336,0,0,1-2.205,6.943C39.622,43.3,37.736,43.6,35.093,43.608Z"
              transform="translate(372.717 3415.533) rotate(162)" fill="url(#linear-gradient)" />
            <g data-type="innerShadowGroup">
              <g transform="matrix(1, 0, 0, 1, 141.72, 3320.47)" filter="url(#Path_26275)">
                <path id="Path_26275-3" data-name="Path 26275"
                  d="M82.8.8a4.953,4.953,0,0,1,7.3,2.352l6.2,15.827a4.953,4.953,0,0,0,4.214,3.13l16.178,1.3a4.953,4.953,0,0,1,4.429,6.049L117.175,46.62a4.953,4.953,0,0,0,1.525,4.8l12.772,11.424a4.953,4.953,0,0,1,0,7.384L118.7,81.656a4.953,4.953,0,0,0-1.525,4.8l3.953,17.161a4.953,4.953,0,0,1-4.429,6.049l-16.178,1.3a4.953,4.953,0,0,0-4.214,3.13l-6.2,15.827a4.953,4.953,0,0,1-7.3,2.352l-13.552-8.771a4.953,4.953,0,0,0-5.382,0l-13.552,8.771a4.953,4.953,0,0,1-7.3-2.352l-6.2-15.827a4.953,4.953,0,0,0-4.214-3.13l-16.178-1.3A4.953,4.953,0,0,1,12,103.62l3.953-17.161a4.953,4.953,0,0,0-1.525-4.8L1.651,70.232a4.953,4.953,0,0,1,0-7.384L14.424,51.424a4.953,4.953,0,0,0,1.525-4.8L12,29.46a4.953,4.953,0,0,1,4.429-6.049l16.178-1.3a4.953,4.953,0,0,0,4.214-3.13l6.2-15.827A4.953,4.953,0,0,1,50.319.8L63.87,9.568a4.953,4.953,0,0,0,5.382,0Z"
                  transform="matrix(0.88, -0.47, 0.47, 0.88, -9, 62.5)" fill="url(#linear-gradient-2)" />
              </g>
              <g transform="matrix(1, 0, 0, 1, 141.72, 3320.47)" filter="url(#Path_26275-2)">
                <path id="Path_26275-4" data-name="Path 26275"
                  d="M82.8.8a4.953,4.953,0,0,1,7.3,2.352l6.2,15.827a4.953,4.953,0,0,0,4.214,3.13l16.178,1.3a4.953,4.953,0,0,1,4.429,6.049L117.175,46.62a4.953,4.953,0,0,0,1.525,4.8l12.772,11.424a4.953,4.953,0,0,1,0,7.384L118.7,81.656a4.953,4.953,0,0,0-1.525,4.8l3.953,17.161a4.953,4.953,0,0,1-4.429,6.049l-16.178,1.3a4.953,4.953,0,0,0-4.214,3.13l-6.2,15.827a4.953,4.953,0,0,1-7.3,2.352l-13.552-8.771a4.953,4.953,0,0,0-5.382,0l-13.552,8.771a4.953,4.953,0,0,1-7.3-2.352l-6.2-15.827a4.953,4.953,0,0,0-4.214-3.13l-16.178-1.3A4.953,4.953,0,0,1,12,103.62l3.953-17.161a4.953,4.953,0,0,0-1.525-4.8L1.651,70.232a4.953,4.953,0,0,1,0-7.384L14.424,51.424a4.953,4.953,0,0,0,1.525-4.8L12,29.46a4.953,4.953,0,0,1,4.429-6.049l16.178-1.3a4.953,4.953,0,0,0,4.214-3.13l6.2-15.827A4.953,4.953,0,0,1,50.319.8L63.87,9.568a4.953,4.953,0,0,0,5.382,0Z"
                  transform="matrix(0.88, -0.47, 0.47, 0.88, -9, 62.5)" fill="#fff" />
              </g>
            </g>
            <path id="Paragraph_16_sec_002" data-name="Paragraph 16 sec 002"
              d="M-19.96-11.36h-4.48V-14h12.2v2.64h-4.48V0h-3.24ZM-.58,0l-2.7-3.9H-6.26V0H-9.5V-14h6.06a7.777,7.777,0,0,1,3.23.62A4.8,4.8,0,0,1,1.9-11.62a4.849,4.849,0,0,1,.74,2.7,4.752,4.752,0,0,1-.75,2.69A4.754,4.754,0,0,1-.24-4.5L2.9,0ZM-.64-8.92a2.218,2.218,0,0,0-.76-1.81,3.4,3.4,0,0,0-2.22-.63H-6.26v4.88h2.64A3.365,3.365,0,0,0-1.4-7.12,2.224,2.224,0,0,0-.64-8.92ZM12.72-4.96V0H9.48V-5L4.06-14H7.5l3.74,6.22L14.98-14h3.18Zm-46.83,21.6h-4.48V14h12.2v2.64h-4.48V28h-3.24Zm17.04,11.6A8.172,8.172,0,0,1-21,27.3a6.977,6.977,0,0,1-2.74-2.59A7.071,7.071,0,0,1-24.73,21a7.071,7.071,0,0,1,.99-3.71A6.977,6.977,0,0,1-21,14.7a8.172,8.172,0,0,1,3.93-.94,8.114,8.114,0,0,1,3.92.94,7.067,7.067,0,0,1,2.74,2.59,7.017,7.017,0,0,1,1,3.71,7.017,7.017,0,0,1-1,3.71,7.067,7.067,0,0,1-2.74,2.59A8.114,8.114,0,0,1-17.07,28.24Zm0-2.76a4.443,4.443,0,0,0,2.24-.57,4.09,4.09,0,0,0,1.57-1.59A4.674,4.674,0,0,0-12.69,21a4.674,4.674,0,0,0-.57-2.32,4.09,4.09,0,0,0-1.57-1.59,4.443,4.443,0,0,0-2.24-.57,4.443,4.443,0,0,0-2.24.57,4.09,4.09,0,0,0-1.57,1.59A4.674,4.674,0,0,0-21.45,21a4.674,4.674,0,0,0,.57,2.32,4.09,4.09,0,0,0,1.57,1.59A4.443,4.443,0,0,0-17.07,25.48ZM-5.97,14H.39a8.938,8.938,0,0,1,4.03.87,6.514,6.514,0,0,1,2.72,2.45A6.891,6.891,0,0,1,8.11,21a6.891,6.891,0,0,1-.97,3.68,6.514,6.514,0,0,1-2.72,2.45A8.938,8.938,0,0,1,.39,28H-5.97ZM.23,25.34a4.7,4.7,0,0,0,3.35-1.17A4.132,4.132,0,0,0,4.83,21a4.132,4.132,0,0,0-1.25-3.17A4.7,4.7,0,0,0,.23,16.66H-2.73v8.68ZM20.57,25h-6.5l-1.24,3H9.51l6.24-14h3.2l6.26,14h-3.4Zm-1.02-2.46-2.22-5.36-2.22,5.36Zm13.98.5V28H30.29V23l-5.42-9h3.44l3.74,6.22L35.79,14h3.18Z"
              transform="matrix(0.883, -0.469, 0.469, 0.883, 220.815, 3404.29)" fill="#fff" />
          </g>
        </g>
      </svg>

      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="120" height="140"
        viewBox="0 0 120 140">
        <defs>
          <clipPath id="clip-path">
            <rect id="Rectangle_21868" data-name="Rectangle 21868" width="120" height="140"
              transform="translate(1035 2035)" fill="none" stroke="#707070" stroke-width="1" />
          </clipPath>
          <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#efbdfa" />
            <stop offset="0.527" stop-color="#655be2" />
            <stop offset="1" stop-color="#5690ff" />
          </linearGradient>
          <filter id="Element_3">
            <feOffset dy="3" input="SourceAlpha" />
            <feGaussianBlur stdDeviation="3" result="blur" />
            <feFlood flood-color="#362cb4" result="color" />
            <feComposite operator="out" in="SourceGraphic" in2="blur" />
            <feComposite operator="in" in="color" />
            <feComposite operator="in" in2="SourceGraphic" />
          </filter>
          <radialGradient id="radial-gradient" cx="0.823" cy="0.368" r="0.704" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#e5fff4" />
            <stop offset="0.517" stop-color="#59e8b3" />
            <stop offset="1" stop-color="#2cc4ad" />
          </radialGradient>
          <linearGradient id="linear-gradient-2" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#f06685" />
            <stop offset="1" stop-color="#f560b6" />
          </linearGradient>
          <filter id="Ellipse_Outline" x="64.356" y="65.671" width="55.641" height="55.64" filterUnits="userSpaceOnUse">
            <feOffset dx="2" dy="2" input="SourceAlpha" />
            <feGaussianBlur stdDeviation="1.5" result="blur-2" />
            <feFlood flood-color="#fff" flood-opacity="0.502" result="color-2" />
            <feComposite operator="out" in="SourceGraphic" in2="blur-2" />
            <feComposite operator="in" in="color-2" />
            <feComposite operator="in" in2="SourceGraphic" />
          </filter>
        </defs>
        <g id="Section_3_Illustration_right" data-name="Section 3_Illustration_right" transform="translate(-1035 -2035)"
          clip-path="url(#clip-path)">
          <g id="Section_3_Illustration_right-2" data-name="Section 3_Illustration_right"
            transform="translate(-133.685 -885.823)">
            <g data-type="innerShadowGroup">
              <path id="Element_3-2" data-name="Element 3"
                d="M85.116,113.663a7.77,7.77,0,0,1-7.7-8.852c3.059-23.222-1.235-42.617-12.761-57.645C44.18,20.463,7.191,15.649,6.82,15.6A7.83,7.83,0,0,1,8.669.055c1.77.21,43.637,5.524,68.178,37.4,14.217,18.471,19.585,41.819,15.953,69.4A7.8,7.8,0,0,1,85.116,113.663Z"
                transform="matrix(-0.07, -0.998, 0.998, -0.07, 1175.235, 3055.823)" fill="url(#linear-gradient)" />
              <g transform="matrix(1, 0, 0, 1, 1168.68, 2920.82)" filter="url(#Element_3)">
                <path id="Element_3-3" data-name="Element 3"
                  d="M85.116,113.663a7.77,7.77,0,0,1-7.7-8.852c3.059-23.222-1.235-42.617-12.761-57.645C44.18,20.463,7.191,15.649,6.82,15.6A7.83,7.83,0,0,1,8.669.055c1.77.21,43.637,5.524,68.178,37.4,14.217,18.471,19.585,41.819,15.953,69.4A7.8,7.8,0,0,1,85.116,113.663Z"
                  transform="matrix(-0.07, -1, 1, -0.07, 6.55, 135)" fill="#fff" />
              </g>
            </g>
            <ellipse id="Green_ball" cx="11.559" cy="11.559" rx="11.559" ry="11.559"
              transform="matrix(0.978, 0.208, -0.208, 0.978, 1205.873, 2925.823)" fill="url(#radial-gradient)" />
            <g data-type="innerShadowGroup">
              <path id="Ellipse_Outline-2" data-name="Ellipse  Outline"
                d="M19.719,5.916a13.651,13.651,0,0,0-13.492,13.8,13.651,13.651,0,0,0,13.492,13.8,13.651,13.651,0,0,0,13.492-13.8,13.651,13.651,0,0,0-13.492-13.8m0-5.916A19.721,19.721,0,1,1,0,19.721,19.742,19.742,0,0,1,19.719,0Z"
                transform="matrix(0.656, 0.755, -0.755, 0.656, 1262.808, 2986.494)" fill="url(#linear-gradient-2)" />
              <g transform="matrix(1, 0, 0, 1, 1168.68, 2920.82)" filter="url(#Ellipse_Outline)">
                <path id="Ellipse_Outline-3" data-name="Ellipse  Outline"
                  d="M19.719,5.916a13.651,13.651,0,0,0-13.492,13.8,13.651,13.651,0,0,0,13.492,13.8,13.651,13.651,0,0,0,13.492-13.8,13.651,13.651,0,0,0-13.492-13.8m0-5.916A19.721,19.721,0,1,1,0,19.721,19.742,19.742,0,0,1,19.719,0Z"
                  transform="matrix(0.66, 0.75, -0.75, 0.66, 94.12, 65.67)" fill="#fff" />
              </g>
            </g>
          </g>
        </g>
      </svg>
    </div>
    <div class="nonaty" style="display:flex ; justify-content: center; margin-left: 25px;" dir="ltr">
      <img class="nory" src="./assest/img/web scrabing.png" alt="">
      <span style="  margin-left: 15px; cursor: pointer;">
        <h5 style="font: size 1.25rem; font-weight: 600;">
          {{__('home.Web scraping')}}
        </h5>
        <span style="font-size: 15px;font-family: 'RobotoSubset', 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
          ">Web site,data,souk,scrp,python,softwere architecture <br>django...</span>
          </span>

    </div>

    <div style="height: 70px ;"></div>
  </div>

  <!------------end of our ctg-------------->
  <!---->
  <!---->
  <!---->
  <!---->
  <div style="display: flex; justify-content: center; margin-top: 20px;" class="div">
    <div style="margin-top: 140px;" class="content__badges_container">
      <div class="text-center">
        <div class="content__badges_title-wrapper">
          <h3 style="font-weight: 700;" class="content__badges_title rf-h3 appear-item appear-2 appear">
            {{__('home.Custmers reviews')}}
          </h3>
          <img class=" anmi content__badges_title-img img-left lozad fade-img"
            style="  transform: translateX(150px); width: auto !important; height: 100px !important;"
            alt="floating element" src="./assest/img/commnt svg.png">
        </div>
        <div style=" margin-top: 30px; display: flex; justify-content: center;">
          <span style=" color: #545f7e; font-size: 25px;">4.5</span>
          <img style="width: 150px; height: 30px; margin-left: 10px; margin-bottom: 5px;"
            src="./assest/img/Star-Rating-4.5-PNG.png" alt="">
        </div>
        <div style="display: flex; justify-content: center;">
          <hr style="width: 90%;">
        </div>

        <!------------->
        <div style="padding: 20px;" class="container">
          <div style="display: flex;justify-content: center;" class="row">
            <div
              style=" margin-top: 70px;background-color: #f0f1f3; padding:20px; border-radius: 5px; margin-bottom: 10px;"
              class=" col-sm-12 col-lg-3 col-md-6  mx-2">
              <span style="font-size: 18px; font-weight: 500;color: #545f7e; ">{{__('home.“Pretty Damn Surprised Right Now”')}}</span><br>
              <div style="margin-top: 10px; margin-bottom: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="121.031"
                  height="19.665" viewBox="0 0 121.031 19.665">
                  <defs>
                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                      <stop offset="0" stop-color="#ffd200" />
                      <stop offset="1" stop-color="#f7971e" />
                    </linearGradient>
                  </defs>
                  <path id="Stars"
                    d="M7505.463-6577.7a1.049,1.049,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.057,1.057,0,0,1-.291-1.11,1.13,1.13,0,0,1,.91-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.114,1.114,0,0,1,.88-.589h.421l.17.068.109.04a.669.669,0,0,1,.161.128l.09.068a1,1,0,0,1,.2.266l2.192,4.41a1.115,1.115,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.05,1.05,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.889,4.833a1.092,1.092,0,0,1-.889,1.25,1.191,1.191,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.109,1.109,0,0,0-.5.128l-4.428,2.269a1.114,1.114,0,0,1-.521.128A1.116,1.116,0,0,1,7505.463-6577.7Zm-25,0a1.05,1.05,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.908-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.117,1.117,0,0,1,.879-.589h.421l.17.068.11.04a.667.667,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.051,1.051,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.115,1.115,0,0,0-.5.128l-4.429,2.269a1.1,1.1,0,0,1-.521.128A1.118,1.118,0,0,1,7480.462-6577.7Zm-25,0a1.049,1.049,0,0,1-.451-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.053,1.053,0,0,1-.289-1.11,1.126,1.126,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.421l.17.068.109.04a.633.633,0,0,1,.161.128l.09.068a1.052,1.052,0,0,1,.2.266l2.19,4.41a1.117,1.117,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.046,1.046,0,0,1-.268,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.115,1.115,0,0,0-.5.128l-4.426,2.269a1.116,1.116,0,0,1-.523.128A1.106,1.106,0,0,1,7455.464-6577.7Zm-25,0a1.05,1.05,0,0,1-.451-1.061l.889-4.832a1.07,1.07,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.113,1.113,0,0,0,.831-.6l2.218-4.391a1.116,1.116,0,0,1,.879-.589h.421l.17.068.11.04a.639.639,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.97.708a1.124,1.124,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.094,1.094,0,0,1-.891,1.25,1.2,1.2,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.12,1.12,0,0,0-.5.128l-4.427,2.269a1.115,1.115,0,0,1-.523.128A1.111,1.111,0,0,1,7430.464-6577.7Zm-25,0a1.049,1.049,0,0,1-.45-1.061l.887-4.832a1.063,1.063,0,0,0-.319-.954l-3.739-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.423l.17.068.107.04a.667.667,0,0,1,.162.128l.089.068a1.064,1.064,0,0,1,.2.266l2.189,4.41a1.119,1.119,0,0,0,.882.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.092,1.092,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.861.861,0,0,0-.27-.086h-.271a1.107,1.107,0,0,0-.5.128l-4.429,2.269a1.113,1.113,0,0,1-.522.128A1.111,1.111,0,0,1,7405.464-6577.7Z"
                    transform="translate(-7400.985 6596.656)" stroke="rgba(0,0,0,0)" stroke-width="1"
                    fill="url(#linear-gradient)" />
                </svg><br>
                <span style=" margin-left: 5px; font-size: 14px; margin-top: 15px;color: #545f7e;">Farah M.</span><br>
                <span style="font-size: 13px;  color: #545f7e;">
                  {{__('home.have a rep')}}
                </span>
              </div>
            </div>
            <!--1st comment-->
            <!---->
            <div
              style=' margin-top: 70px;background-color: #f0f1f3; padding:20px; border-radius: 5px; margin-bottom: 10px;'
              class="col-sm-12 col-lg-3 col-md-6 mx-2">
              <span style="font-size: 18px; font-weight: 600;color: #545f7e; ">{{__('home.I“5 Star Support”')}}</span><br>
              <div style="margin-top: 10px; margin-bottom: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="121.031"
                  height="19.665" viewBox="0 0 121.031 19.665">
                  <defs>
                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                      <stop offset="0" stop-color="#ffd200" />
                      <stop offset="1" stop-color="#f7971e" />
                    </linearGradient>
                  </defs>
                  <path id="Stars"
                    d="M7505.463-6577.7a1.049,1.049,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.057,1.057,0,0,1-.291-1.11,1.13,1.13,0,0,1,.91-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.114,1.114,0,0,1,.88-.589h.421l.17.068.109.04a.669.669,0,0,1,.161.128l.09.068a1,1,0,0,1,.2.266l2.192,4.41a1.115,1.115,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.05,1.05,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.889,4.833a1.092,1.092,0,0,1-.889,1.25,1.191,1.191,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.109,1.109,0,0,0-.5.128l-4.428,2.269a1.114,1.114,0,0,1-.521.128A1.116,1.116,0,0,1,7505.463-6577.7Zm-25,0a1.05,1.05,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.908-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.117,1.117,0,0,1,.879-.589h.421l.17.068.11.04a.667.667,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.051,1.051,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.115,1.115,0,0,0-.5.128l-4.429,2.269a1.1,1.1,0,0,1-.521.128A1.118,1.118,0,0,1,7480.462-6577.7Zm-25,0a1.049,1.049,0,0,1-.451-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.053,1.053,0,0,1-.289-1.11,1.126,1.126,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.421l.17.068.109.04a.633.633,0,0,1,.161.128l.09.068a1.052,1.052,0,0,1,.2.266l2.19,4.41a1.117,1.117,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.046,1.046,0,0,1-.268,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.115,1.115,0,0,0-.5.128l-4.426,2.269a1.116,1.116,0,0,1-.523.128A1.106,1.106,0,0,1,7455.464-6577.7Zm-25,0a1.05,1.05,0,0,1-.451-1.061l.889-4.832a1.07,1.07,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.113,1.113,0,0,0,.831-.6l2.218-4.391a1.116,1.116,0,0,1,.879-.589h.421l.17.068.11.04a.639.639,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.97.708a1.124,1.124,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.094,1.094,0,0,1-.891,1.25,1.2,1.2,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.12,1.12,0,0,0-.5.128l-4.427,2.269a1.115,1.115,0,0,1-.523.128A1.111,1.111,0,0,1,7430.464-6577.7Zm-25,0a1.049,1.049,0,0,1-.45-1.061l.887-4.832a1.063,1.063,0,0,0-.319-.954l-3.739-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.423l.17.068.107.04a.667.667,0,0,1,.162.128l.089.068a1.064,1.064,0,0,1,.2.266l2.189,4.41a1.119,1.119,0,0,0,.882.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.092,1.092,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.861.861,0,0,0-.27-.086h-.271a1.107,1.107,0,0,0-.5.128l-4.429,2.269a1.113,1.113,0,0,1-.522.128A1.111,1.111,0,0,1,7405.464-6577.7Z"
                    transform="translate(-7400.985 6596.656)" stroke="rgba(0,0,0,0)" stroke-width="1"
                    fill="url(#linear-gradient)" />
                </svg><br>
                <span style=" margin-top: 15px;color: #545f7e;">Md. Saddam H.</span><br>
                <span style="font-size: 13px;  color: #545f7e;">
                  {{__('home.helpful team')}}
                </span>
              </div>
            </div>
            <!--2nd comment-->
            <!---->
            <div
              style=" margin-top: 70px;background-color: #f0f1f3; padding:20px; border-radius: 5px; margin-bottom: 10px;"
              class=" col-sm-12 col-lg-3 col-md-6 mx-2">
              <span style="font-size: 18px; font-weight: 600;color: #545f7e; ">{{__('home.“GOOD CUSTOMER SERVICE”')}}</span><br>
              <div style="margin-top: 10px; margin-bottom: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="121.031"
                  height="19.665" viewBox="0 0 121.031 19.665">
                  <defs>
                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                      <stop offset="0" stop-color="#ffd200" />
                      <stop offset="1" stop-color="#f7971e" />
                    </linearGradient>
                  </defs>
                  <path id="Stars"
                    d="M7505.463-6577.7a1.049,1.049,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.057,1.057,0,0,1-.291-1.11,1.13,1.13,0,0,1,.91-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.114,1.114,0,0,1,.88-.589h.421l.17.068.109.04a.669.669,0,0,1,.161.128l.09.068a1,1,0,0,1,.2.266l2.192,4.41a1.115,1.115,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.05,1.05,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.889,4.833a1.092,1.092,0,0,1-.889,1.25,1.191,1.191,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.109,1.109,0,0,0-.5.128l-4.428,2.269a1.114,1.114,0,0,1-.521.128A1.116,1.116,0,0,1,7505.463-6577.7Zm-25,0a1.05,1.05,0,0,1-.449-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.908-.736l4.97-.708a1.108,1.108,0,0,0,.829-.6l2.22-4.391a1.117,1.117,0,0,1,.879-.589h.421l.17.068.11.04a.667.667,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.051,1.051,0,0,1-.268,1.11l-3.611,3.439a1.087,1.087,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.115,1.115,0,0,0-.5.128l-4.429,2.269a1.1,1.1,0,0,1-.521.128A1.118,1.118,0,0,1,7480.462-6577.7Zm-25,0a1.049,1.049,0,0,1-.451-1.061l.889-4.832a1.075,1.075,0,0,0-.319-.954l-3.739-3.477a1.053,1.053,0,0,1-.289-1.11,1.126,1.126,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.421l.17.068.109.04a.633.633,0,0,1,.161.128l.09.068a1.052,1.052,0,0,1,.2.266l2.19,4.41a1.117,1.117,0,0,0,.879.6l4.968.708a1.118,1.118,0,0,1,.889.736,1.046,1.046,0,0,1-.268,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.877.877,0,0,0-.27-.086h-.271a1.115,1.115,0,0,0-.5.128l-4.426,2.269a1.116,1.116,0,0,1-.523.128A1.106,1.106,0,0,1,7455.464-6577.7Zm-25,0a1.05,1.05,0,0,1-.451-1.061l.889-4.832a1.07,1.07,0,0,0-.319-.954l-3.74-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.113,1.113,0,0,0,.831-.6l2.218-4.391a1.116,1.116,0,0,1,.879-.589h.421l.17.068.11.04a.639.639,0,0,1,.16.128l.091.068a1.076,1.076,0,0,1,.2.266l2.189,4.41a1.118,1.118,0,0,0,.88.6l4.97.708a1.124,1.124,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.086,1.086,0,0,0-.319.961l.891,4.833a1.094,1.094,0,0,1-.891,1.25,1.2,1.2,0,0,1-.71-.108l-4.428-2.282a.881.881,0,0,0-.27-.086h-.272a1.12,1.12,0,0,0-.5.128l-4.427,2.269a1.115,1.115,0,0,1-.523.128A1.111,1.111,0,0,1,7430.464-6577.7Zm-25,0a1.049,1.049,0,0,1-.45-1.061l.887-4.832a1.063,1.063,0,0,0-.319-.954l-3.739-3.477a1.052,1.052,0,0,1-.289-1.11,1.125,1.125,0,0,1,.91-.736l4.968-.708a1.115,1.115,0,0,0,.831-.6l2.218-4.391a1.117,1.117,0,0,1,.88-.589h.423l.17.068.107.04a.667.667,0,0,1,.162.128l.089.068a1.064,1.064,0,0,1,.2.266l2.189,4.41a1.119,1.119,0,0,0,.882.6l4.968.708a1.119,1.119,0,0,1,.889.736,1.047,1.047,0,0,1-.27,1.11l-3.611,3.439a1.092,1.092,0,0,0-.319.961l.891,4.833a1.1,1.1,0,0,1-.891,1.25,1.193,1.193,0,0,1-.709-.108l-4.429-2.282a.861.861,0,0,0-.27-.086h-.271a1.107,1.107,0,0,0-.5.128l-4.429,2.269a1.113,1.113,0,0,1-.522.128A1.111,1.111,0,0,1,7405.464-6577.7Z"
                    transform="translate(-7400.985 6596.656)" stroke="rgba(0,0,0,0)" stroke-width="1"
                    fill="url(#linear-gradient)" />
                </svg><br>
                <span style=" margin-left: 5px; font-size: 14px; margin-top: 15px;color: #545f7e;">Mileta C.</span><br>
                <span style="font-size: 13px;  color: #545f7e;">
                 {{__('home.glad monospace')}}
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-------------------end of tursted comments------------------------->
        <!---->
        <!---->
        <!---->

        <div id="container_blogs" style="margin-top: 140px;" class="content__badges_container">
          <div class="text-center">
            <div class="content__badges_title-wrapper">
              <h3 style="font-weight: 700;" class="content__badges_title rf-h3 appear-item appear-2 appear">
                {{__('home.Join MonoSpce')}}
              </h3>
              <!---------------------------------------------->
              <!----------------------------------------------->
              <!---->
              <div id="akera">
                <div
                  style=" display: none;  background: rgba(37, 46, 72, .5);height: 100%;left: 0;position: fixed;top: 0;width: 100%;z-index: 104"
                  id="done">
                  <!--the container of the log form-->
                  <div
                    style="border-radius: 30px;box-shadow: 0 6px 12px #5690FF4D;box-sizing: border-box;max-width: 92%;left: 50%;min-height: 620px;
              padding: 20px;position: absolute;top: 50%;transform: translate(-50%, -50%);width: 500px;z-index: 10;background-color: #FFF;">
                    <div id="yeeh">
                      <svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                        fill="currentColor" class=" btn-outline-danger bi bi-x-square m-3" viewBox="0 0 16 16">
                        <path
                          d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path
                          d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                      </svg>
                    </div>
                    <div style="margin-top: 80px;">
                      <img style="width:25px;height: 30px;margin-right: 10px; margin-left: 0px; margin-bottom: 40ox;"
                        src="./assest/img/vbn.png" alt="">
                      <span style=" font-size: 18px;font-weight: 500;color: #545f7e;">
                      {{__('home.join to MonoSpace')}}
                      </span><br>
                    </div>
                    <label style="margin-top: 20px;" class="label show"><input class="form__input"
                        aria-label="Your Email" id="signupEmail" name="email" type="email"
                        placeholder="Enter your email">
                      <div class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" class="text-secondary">
                          <g transform="translate(2 3)">
                            <path data-name="Message"
                              d="M14.939,18H5.06A5.061,5.061,0,0,1,0,12.95V5.05A5.061,5.061,0,0,1,5.06,0h9.879a5.091,5.091,0,0,1,3.58,1.481A5.012,5.012,0,0,1,20,5.05v7.9A5.061,5.061,0,0,1,14.939,18ZM4.034,5.246A.733.733,0,0,0,3.5,5.47a.764.764,0,0,0-.071,1l.131.13L8.11,10.15a3.129,3.129,0,0,0,1.95.68,3.18,3.18,0,0,0,1.958-.68L16.53,6.54l.08-.08a.774.774,0,0,0-.012-1,.831.831,0,0,0-.528-.26h-.042a.76.76,0,0,0-.519.2L11,9a1.565,1.565,0,0,1-1,.36A1.592,1.592,0,0,1,9,9L4.5,5.4A.778.778,0,0,0,4.034,5.246Z"
                              fill="#7683a8"></path>
                          </g>
                        </svg></div>
                    </label>
                    <label style="margin-top: 10px; " class="label show"><input class="form__input" type="password"
                        placeholder="Enter your password" >
                      <div class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          fill="currentColor" class="bi bi-lock-fill text-secondary" viewBox="0 0 16 16">
                          <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg></div>
                    </label><br>
                    <button :disabled="!email || !password " style="margin-left: 230px;margin-bottom: 50px
                ;" class=" btn btn-outline-primary" onclick="go()">
                      {{__('home.signin')}}
                    </button>
                    <div style="justify-content: center;">
                      <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with"
                        data-layout="default" data-auto-logout-link="true" data-use-continue-as="false"></div>
                      <!--
                          ======================================================
                          ==                  githup signup                   ==
                          ======================================================

                        -->
                      <br>
                    <a href="{{route('githubRedirect','buyer')}}">  <div style="width: 300px; margin-bottom: 10px;" id="signin_with_github_buyer"
                        class="btn btn-dark text-light">{{__('home.signup with github')}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-github" viewBox="0 0 16 16">
                          <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                      </div>
                    </a>
                      <!--
                          ======================================================
                          ==                  google signup                   ==
                          ======================================================

                        -->
                     <a href="{{route('googleRedirect','buyer')}}"><div style="width: 300px;margin-bottom: 10px;" id="signin_with_google_buyer"
                        class="btn btn-danger">{{__('home.signup with google')}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-google" viewBox="0 0 16 16">
                          <path
                            d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
    </a>
              <!-------------------------------------->
              <div id="akera">
                <div
                  style=" display: none;  background: rgba(37, 46, 72, .5);height: 100%;left: 0;position: fixed;top: 0;width: 100%;z-index: 104"
                  id="do">
                  <div
                    style="border-radius: 30px;box-shadow: 0 6px 12px #5690FF4D;box-sizing: border-box;max-width: 92%;left: 50%;min-height: 620px;
              padding: 20px;position: absolute;top: 50%;transform: translate(-50%, -50%);width: 500px;z-index: 10;background-color: #FFF;">
                    <div id="ye">
                      <svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                        fill="currentColor" class=" btn-outline-danger bi bi-x-square m-3" viewBox="0 0 16 16">
                        <path
                          d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path
                          d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                      </svg>
                    </div>
                    <div style="margin-top: 80px;">
                      <img style="width:25px;height: 30px;margin-right: 10px; margin-left: 0px; margin-bottom: 40ox;"
                        src="./assest/img/vbn.png" alt="">
                      <span style=" font-size: 18px;font-weight: 500;color: #545f7e;">
                        {{__('home.join to MonoSpace')}}
                      </span><br>
                    </div>
                    <label style="margin-top: 20px;" class="label show"><input class="form__input"
                        aria-label="Your Email" id="signupEmail" name="email" type="email"
                        placeholder="Enter your email" >
                      <div class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" class="text-secondary">
                          <g transform="translate(2 3)">
                            <path data-name="Message"
                              d="M14.939,18H5.06A5.061,5.061,0,0,1,0,12.95V5.05A5.061,5.061,0,0,1,5.06,0h9.879a5.091,5.091,0,0,1,3.58,1.481A5.012,5.012,0,0,1,20,5.05v7.9A5.061,5.061,0,0,1,14.939,18ZM4.034,5.246A.733.733,0,0,0,3.5,5.47a.764.764,0,0,0-.071,1l.131.13L8.11,10.15a3.129,3.129,0,0,0,1.95.68,3.18,3.18,0,0,0,1.958-.68L16.53,6.54l.08-.08a.774.774,0,0,0-.012-1,.831.831,0,0,0-.528-.26h-.042a.76.76,0,0,0-.519.2L11,9a1.565,1.565,0,0,1-1,.36A1.592,1.592,0,0,1,9,9L4.5,5.4A.778.778,0,0,0,4.034,5.246Z"
                              fill="#7683a8"></path>
                          </g>
                        </svg></div>
                    </label>
                    <label style="margin-top: 10px; " class="label show"><input class="form__input" type="password"
                        placeholder="Enter your password">
                      <div class="input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          fill="currentColor" class="bi bi-lock-fill text-secondary" viewBox="0 0 16 16">
                          <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg></div>
                    </label><br>
                    <button :disabled="!email || !password " style="margin-left: 230px;margin-bottom: 50px
                ;" class=" btn btn-outline-primary" onclick="ss()">
                      {{__('home.signin')}}
                    </button>
                    <div style="justify-content: center;">
                      <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with"
                        data-layout="default" data-auto-logout-link="true" data-use-continue-as="false"></div>
                      <br>
                      <!--
                          ======================================================
                          ==                  githup signup                   ==
                          ======================================================

                        -->
                        <a href="{{route('githubRedirect','provider')}}">
                      <div style="width: 300px; margin-bottom: 10px;" id="signin_with_github_provider"
                        class="btn btn-dark text-light">{{__('home.signup with github')}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-github" viewBox="0 0 16 16">
                          <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                      </div>
    </a>
                      <!--
                          ======================================================
                          ==                  google signup                   ==
                          ======================================================

                        -->
                        <a href="{{route('googleRedirect','provider')}}">
                      <div style="width: 300px;margin-bottom: 10px;" id="signin_with_google_provider"
                        class="btn btn-danger">{{__('home.signup with google')}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-google" viewBox="0 0 16 16">
                          <path
                            d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
    </a>
              <img class="content__badges_title-img img-left lozad" style="display: none;" width="150px" height="170px"
                alt="floating element" src="./assest/img/left svg.png">
              <img class=" anmi content__badges_title-img img-right lozad fade-img" style="display: none;" width="150px"
                height="170px" alt="floating element" src="./assest/img/right svg.png">
              <!---------------------------------------------->
              <div
                style=" display: none;background: rgba(37, 46, 72, .5);height: 100%;left: 0;position: fixed;top: 0;width: 100%;z-index: 104;"
                class="popup-overlay" id="all">
                <div id="form"
                  style="border-radius: 30px;box-shadow: 0 6px 12px #5690FF4D;box-sizing: border-box;max-width: 92%;left: 50%;min-height: 620px;
            padding: 20px;position: absolute;top: 50%;transform: translate(-50%, -50%);width: 500px;z-index: 10;background-color: #FFF;">
                  <!---------------------------------------------->
                  <!---------------------------------------------->
                  <div id="no" onclick="close()">
                    <svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                      fill="currentColor" class=" btn-outline-danger bi bi-x-square m-3" viewBox="0 0 16 16">
                      <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                      <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                  </div>
                  <div style=" margin-top: 200px; display: flex ; justify-content: center;">
                    <h1 style="color: #252E48;">{{__('home.Join as')}}</h1>
                  </div>
                  <!---------------------------------------------->
                  <!---------------------------------------------->
                  <div style="display: flex ; justify-content: center;margin: top 0px;">
                    <div class="btn btn-outline-success anmi" id="nw">{{__('home.Join as a Service Provider')}}
                    </div>
                  </div>
                  <!---------------------------------------------->
                  <!---------------------------------------------->
                  <div style="display: flex ; justify-content: center; margin-top: 30px;">
                    <div id="new" class="btn btn-outline-success anmia">{{__('home.Join as a Buyer')}}
                    </div>
                  </div>
                </div>
                <!---------------------------------------------->
                <!---------------------------------------------->
              </div>
              <button style="border: none;margin-top: 40px;
          border-radius: 5px;font-size: 18px;height: 50px;line-height: 50px;box-sizing: border-box;padding: 0 30px;
          font-weight: 500;min-width: 100px;text-align: center;transition: all .2s ease;white-space: nowrap;
        background: linear-gradient(180deg,#8C83F7 0,#655BE2 100%);box-shadow: 0 6px 12px #766de880;
      " class=" text-light getStartedBtn toggleBtn" id="willHiden">{{__('home.start')}}</button>
              <!---------------------------------------------->


            </div>
          </div>
        </div>
        <!--.......############8888888888888888888##############.......-->
        <!--.......############8888888888888888888##############.......-->
        <!--.......############8888888888888888888##############.......-->
        <!--.......############8888888888888888888##############.......-->
        <!--.......############8888888888888888888##############.......-->
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
        <!---->
        <!---->

<!--   <div class="rf-en" id="cookie_message" style="display: flex;">
    <img class="cookie-icon" src="./assest/img//cooki icon.png" width="80" height="76" alt="Cookie icon">
    <p class="cookie-msg">We use cookies to improve your experience. By clicking agree, you allow us such use.</p>
    <button class="rf-btn blue" onclick="hideMsg()">AGREE</button>
  </div>
-->
        <!---------------end of cookis----------------->

@endsection
@section('script')
<script >
      document.querySelector('.close').onclick=(event)=>{
    let myalert=document.querySelector('.myaalert');
    myalert.style.display="none"

  }
  </script>
<script src="{{'./assest/js/main.js'}}"></script>
<!--<script type="module">
  import {
    signin_with_github_provider,
    signin_with_google_provider,
    signin_with_github_buyer,
    signin_with_google_buyer,
    profile,
    logOut
  } from "{{'./assest/js/Configuration.js'}}"


  logOut()
  profile()

  signin_with_github_provider()
  signin_with_google_provider()
  signin_with_github_buyer()
  signin_with_google_buyer()
</script>-->
@endsection
</body>

