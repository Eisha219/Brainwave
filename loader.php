
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loader with Video Background</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 <style>
   /* HTML: <div class="loader"></div> */
   .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            z-index: 10000;
        }
.loader {
  width: 40px;
  height: 20px;
  --c:no-repeat radial-gradient(farthest-side,#000 93%,#0000);
  background:
    var(--c) 0    0,
    var(--c) 50%  0,
    var(--c) 100% 0;
  background-size: 8px 8px;
  position: relative;
  animation: l4-0 1s linear infinite alternate;
}
.loader:before {
  content: "";
  position: absolute;
  width: 8px;
  height: 12px;
  background: #000;
  left: 0;
  top: 0;
  animation: 
    l4-1 1s  linear infinite alternate,
    l4-2 0.5s cubic-bezier(0,200,.8,200) infinite;
}
@keyframes l4-0 {
  0%      {background-position: 0  100%,50% 0   ,100% 0}
  8%,42%  {background-position: 0  0   ,50% 0   ,100% 0}
  50%     {background-position: 0  0   ,50% 100%,100% 0}
  58%,92% {background-position: 0  0   ,50% 0   ,100% 0}
  100%    {background-position: 0  0   ,50% 0   ,100% 100%}
}
@keyframes l4-1 {
  100% {left:calc(100% - 8px)}
}
@keyframes l4-2 {
  100% {top:-0.1px}
}
 </style>
</head>
<body>
  
<div class="preloader" id="preloader">
<div class="loader"></div>

    </div>
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('preloader').style.display = 'none';
            }, 3000); 
        });
        $(window).on('load', function() {
        setTimeout(function() {
            $('#preloader').fadeOut('fast');
            $('html').css({'overflow-y':'auto'});
        }, 3000)
    });
    </script>
</body>
</html>
