<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redirecting....</title>
    <script>
        (function(){
            window.__loader__=function(url,vertical_id,usid, callback){

                var script = document.createElement("script");
                script.type = "text/javascript";

                if (script.readyState){
                    script.onreadystatechange = function(){
                        if (script.readyState == "loaded" ||
                                script.readyState == "complete"){
                            script.onreadystatechange = null;
                            callback();
                        }
                    };
                } else {
                    script.onload = function(){
                        callback();
                    };
                }

                script.src = url;
                document.getElementsByTagName("head")[0].appendChild(script);
            };

            window.__vertical__=function(url){
                    window.location=url;
            }
        })();
        var progress = 0;
        @foreach($verticals as $vertical)
         __loader__("http://{{$vertical->domain}}/authenticate?USID={{ $usid }}",".{{$vertical->vertical_id}}","{{ $usid }}", function () {
            progress++;
        });
        @endforeach

         if(progress => {{ count($verticals) }}){
            //__vertical__("{{ $return  }}");
        }
    </script>
</head>
<body>

</body>

</html>