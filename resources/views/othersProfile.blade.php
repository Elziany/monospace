<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assest/css/other user.css">
    <link rel="stylesheet" href="../../assest/css/other user2.css">
    <link rel="stylesheet" href="../../assest/css/bootstrap.min.css">
    <title>{{__('profile.profile')}}</title>
</head>

<body class="p-2">
    <div class="container bg-dark text-light rounded-3 p-3">
        <div class="img">
            <img src="{{$provider->avatar}}" alt="">
        </div>
        <h3> <span><i class="fa-sharp fa-solid fa-circle"></i></span> {{$provider->name}}</h3>
        <p class="info"> <span>مصر <i class="fa-solid fa-location-dot"></i> </span></p>
    </div>
    <hr>
    <div class="about-me">
        <div class="my-caption bg-dark rounded-3">
            <h3 class="text-light">{{__('profile.bio Profile')}}</h3>
            <hr>
            <p class="text-light">{{$provider->profile->brief}}</p>
        </div>
        <div class="my-caption bg-dark rounded-3">
            <h3 class="text-light">{{__('profile.Skills')}}</h3>
            <hr>
            <div class="skills">
                <div
                    style="height: auto; margin: 7px; width: auto; color: #ffff; border-radius: 5px; background-color: #dc143ce8;display: flex;justify-content:center ;text-align: center;padding: 8px;">
                    <p><i class="fa-solid fa-thumbtack"></i> {{$provider->profile->skills}} </p>
                </div>

            </div>



        </div>
    </div>
    <!-- <span> <i class="fa-solid fa-thumbtack"></i> فوتوشوب </span> -->
    <script src="../../assest/js/other user.js"></script>
</body>

</html>
