 <!---->
  <!---->
  <!---->
  <!---->

  <header style="background-color: rgba(255, 255, 255, .5);-webkit-backdrop-filter: blur(5px);backdrop-filter: blur(5px);
  box-shadow: 0 8px 32px rgba(85, 101, 128, 0.1);position: fixed;width: 100%;display: flex;justify-content: space-between;
    align-items: center;z-index: 10;margin-right: 20px;" class="ggg bg-transparent p-2 w-100">
      <h2 class="logo">
        <a style=" font-weight: 520; margin-left: 20px; color: #545f7e; text-decoration: none;font-family: Montserrat, 'Open Sans', sans-serif !important;"
          href="#" class="none"> MonoSpace </a>
      </h2>
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
              <img  style="justify-content: start; margin-left: 5px; cursor: pointer;"
              src="./assest/img/united-states-of-america.png" class="bg-light dropdown-toggle drop-menu" type="button"
              id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" id="d-d">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30"
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
            </svg> -->

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <rect data-name="Rectangle 21224" width="24" height="24" fill="none"></rect>
              <path data-name="Arrow - Right 2"
                d="M5.778,4.279c-.034.035-.162.184-.281.306A13.014,13.014,0,0,1,2.02,7a2.77,2.77,0,0,1-.707.2,1.16,1.16,0,0,1-.537-.131A1.124,1.124,0,0,1,.3,6.527a5.9,5.9,0,0,1-.154-.638A14.387,14.387,0,0,1,0,3.6,16.635,16.635,0,0,1,.128,1.391a5.1,5.1,0,0,1,.2-.8A1.071,1.071,0,0,1,1.279,0h.034a2.927,2.927,0,0,1,.793.245,13.014,13.014,0,0,1,3.4,2.38,3.4,3.4,0,0,1,.289.332A1.07,1.07,0,0,1,6,3.6a1.125,1.125,0,0,1-.222.683"
                transform="translate(15.199 10) rotate(90)" fill="#545F7E"></path>
            </svg>

            <!--------------drop icon-------------->
            <ul id="dpm" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li></li>
              <a class="dropdown-item hide" href="{{route('changeLang','ar')}}">
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

                <a class="dropdown-item" href="{{route('changeLang','en')}}">
                  <span style="margin-right: 20px;">{{__('home.English')}}</span>
                  <img style="justify-content: start; margin-left: 5px; cursor: pointer;"
                    src="./assest/img/united-states-of-america.png" class="bg-light dropdown-toggle drop-menu"
                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                </a>

              </li>



              <!--french-->
              <li>

<a class="dropdown-item" href="{{route('changeLang','fr')}}">
  <span style="margin-right: 20px;">{{__('home.French')}}</span>
  <img style="justify-content: start; margin-left: 5px; cursor: pointer; width:50px;height:50px"
    src="./assest/img/french_icon.png" class="bg-light dropdown-toggle drop-menu"
    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
</a>

</li>
            </ul>

          </div>
        </div>
        <!-- user options/icon -->
        <!-- <li onclick="prof()" style="cursor:pointer;">
        <img style="width: 40px;height: 40px; border: solid 0.5px #000016;border-radius: 50px;float: right;"
          src="./assest/img/user img.jpg" alt="">
      </li> -->
        <!-- ------------------------------- -->
        <div class="dropdown border p-1 rounded text-light" id="Counted_Auth"
          style="display:none;background-color:#a5a4a4;box-shadow:#aaaaaa 0px 0px 20px;">
          <div class="hob" id="dropMenu_2">



            <div class="d-flex justify-content-between flex-rows w-100">
              <div>
                <img
                  style="justify-content: start; border-radius: 100%; margin-left: 5px; cursor: pointer;width: 40px;height: 40px;"
                  src="./assest/img/user.jpg" class="bg-light dropdown-toggle drop-menu" type="button"
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
              <div>





         <ul id="dpm_prof" class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <li id="profile">
                    <a class="dropdown-item hide d-flex justify-content-start align-items-center fw-bold" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-video" viewBox="0 0 16 16">
                        <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2Zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1.202Z"/>
                      </svg>
                      <span style="margin-left:15px">{{__('home.Profile')}}</span>
                    </a>
                  </li>

                  <li id="logout">
                    <a class="dropdown-item d-flex justify-content-start align-items-center fw-bold" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd"
                          d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                      </svg>
                      <span style="margin-left:15px">{{__('home.Logout')}}</span>
                    </a>

                  </li>
                </ul>

              </div>
            </div>
          </div>
          <!-- ------------------------------- -->
    </ul>
  </header>


  <!---------------end of head-------------------->
