<div wire:poll>
<div>
    <form wire:submit.prevent="createPost">
      <div class="d-flex flex-column" id="akera">
        <div class="d-flex align-items-center flex-column" style="margin-top: 80px">
          <div style="margin-top: 15px; width: 500px">
            <div style="background-color: #1c1e21;align-items: flex-end !important;width: 100%;height: auto;border-radius: 7px;margin-bottom: 15px;
                ">
              <div class="d-flex justify-content-end flex-column align-items-end m-2 p-2" dir="ltr">
                <div class="d-flex align-items-center" dir="ltr">
                  <span class="text-light fw-bold" id="name_post"> {{auth()->guard('Provider')->user()->name}}</span>

                  <img style="width: 40px;border-radius: 50%;float: right;margin-left: 7px;
                      " id="img_post" src="{{asset(auth()->guard('Provider')->user()->avatar
                      )}}" alt="" />
                </div>

                <div class="container m-2" dir="auto">
                  <textarea style="resize:none;height: 25px;" wire:model.defer="PostBody" class="form-control w-100" type="text" placeholder="{{__('providerIndex.what think')}}" dir="auto" v-model="taskText" id="tx"
                    dir="auto"></textarea>
                  <button style="outline: none; height: 50px" class="btn btn-primary mt-3 " type="submit" >
                     {{__('providerIndex.Add Post')}}
                  </button>
                </div>
              </div>
            </div>
          </div>
         </form>
        </div>
          <!--=========######################################========-->

@foreach($postes as $post)
<div style="display: flex; justify-content: center" class="tasks-list input" dir="auto">
<div class="d-flex position-realative flex-column" style="flex-direction: column;margin-top: 10px;background-color: #1c1e21;width: 500px;height: auto;border-radius: 10px;
            ">
              <div class="d-flex justify-content-end flex-column align-items-end m-2">
                <a href="{{route('otherProfile',$post->user_id)}}" style="border:none;color:none">
                <div class="d-flex align-items-center">

                  <span class="text-light fw-bold pr-2">{{$post->user->name}}</span>
                  <img style="width: 40px;border-radius: 50%;float: right;margin-left: 7px;
                  " src="{{$post->user->avatar}}" alt="" />
                </div>
                      </a>
              </div>
              <div dir="auto" style="float: right;padding: 23px;display: flex;justify-content: center;margin-bottom: 20px;flex-direction: column;
              ">
                <div style="max-height: 300px;border: solid 1px #9d9ea0;padding: 32px;font-size: 25px;border-radius: 10px;overflow: scroll;overflow-wrap: normal;word-wrap: break-word;
                " class="post-space text-light" id="post">
                                {{$post->body}}
                </div>
              </div>

              <div style="display: flex; justify-content: center">
                <div style="border: 1px solid #9d9ea0;width: 95%;height: 50px;border-radius: 5px;margin-bottom: 20px;display: flex;justify-content: center;align-items: center;
                " class="react-box" onclick="reactBox()">
                  <div>
                    <svg style="cursor: pointer; color: #ffff" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                      fill="currentColor" class="bi bi-hand-thumbs-up-fill likee" viewBox="0 0 16 16" id="likee">
                      <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                    </svg>
                  </div>
                  <div style="display: flex;justify-content: center;flex-direction: column;color: #ffff;cursor: pointer;margin-left: 40px;
                  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                      class="bi bi-chat-square-fill commnt" viewBox="0 0 16 16">
                      <path
                        d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    </svg>
                  </div>
                  <div>
                    <svg style="margin-left: 40px; color: #ffff; cursor: pointer" xmlns="http://www.w3.org/2000/svg"
                      width="23" height="23" fill="currentColor" class="bi bi-heart-fill love" viewBox="0 0 16 16"
                      id="love">
                      <path fill-rule="evenodd"
                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                  </div>
                </div>
              </div>

              <div style="display: none" class="comment">
                <div class="d-flex justify-content-end m-2 p-2">
                  <div style="margin-right: 10px" class="btn btn-primary comment-btn">
                    comment
                  </div>
                  <div class="d-flex align-items-center">
                    <input class="text-dark fw-bold form-control w-100 comment-input" placeholder="write a comment" />
                    <img style="width: 40px;border-radius: 50%;float: right;margin-left: 7px;
                    " id="img_post" src="${sd.val()['photoURL']} alt=" />
                  </div>
                </div>
                <div class="comments text-white" style="display: flex; justify-content: center">
                  <div style="width: 95%;border: 1px solid #9d9ea0;border-radius: 5px;padding: 5px;font-size: 18px;
                  " class="mb-2 comment-text" dir="auto"></div>
                </div>
              </div>
            </div>
</div>
@endforeach
  </div>



