<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>مرکز تصویربرداری و رادیولوژی فرخ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>


@media screen and (min-width:900px)
{

     #newss{
       width:35% !important;
      }

}
@media screen and (max-width:900px)
{

      #header{
                width: 100%;
                height: 300px;

    background-image: url("{{ asset('bg.jpg') }}");
    background-size: 10% 72%;
            }
    .ftext{
        font-size: 10px;
    }
    #logo{
        display: none;
    }
 #header pre{
              
              font-size: 10px;
              margin-right: 1%;
              background-color: #fff;
              opacity: 0.9;
               font-size: x-large !important;
              }
    #menu ul li a{
     
    font-size: 10px;
}	

#header img{
                float: left;
    width: 20%;
   
            }
}
@media screen and (max-width:791px)
{

    #header img{
            display: none;
   
            }
            .hamkaran{
                width: 100%;
            }
}

@media screen and (max-width:550px)
{
#menu{
height:170px !important;
}
.hamkaran {
    float: right;
    margin-right: 10% !important;
    height: 300px;
    width: 18% !important;
    font-size: 10 !important;
}
.hamkaran input{
       font-size: 10px!important;
    width: auto !important;
    font-size: 10 !important;
}
  #footer img{
      
     with:35% !important;
     
   } 


}


@media screen and (max-width:400px)
{
          #header{
                width: 100%;
                height: 300px;

    background-image: url("{{ asset('bg.jpg') }}");
    background-size: 50% 72% !important;
            }
.hamkaran {
    float: right;
    margin-right: 10% !important;
    height: 300px;
    width: 10% !important;
    font-size: 10 !important;
}
.hamkaran input{
       font-size: 10px!important;
    width: auto !important;
    font-size: 10 !important;
}

}

.hamkaran{
    float:right;margin-right: 1%;height: 300px;width: 30%
}
#logo{
    float:right;width:100px;height:100px;margin-right:50px ;margin-top: -100px;border-radius: 40%;
}
            body {
                font-family: 'Nunito', sans-serif;

            }
              #header{
                width: 100%;
                height: 300px;

    background-image: url("{{ asset('bg.jpg') }}");
    background-size: 10% 72%;
            }
      #header pre{
                float: right;
    color: #5559ce;
    margin-top: 10%;
    margin-right: 20%;
    text-align: center;
    font-size: xx-large;
    background-color: #fff;
              opacity: 0.9;
              border-radius: 10%;
 padding: 7px;
            }
            #header img{
                float: left;
    width: 25%;
    margin: 60px;

            }
            #menu{
                width: 100%;
    height: 70px;
    background-color: #ffa726;
    margin-top: 127px;
    padding-right: 50px;
            }
            #menu ul li{
                float: right;
    list-style: none;
    position: relative;
    margin-right: 30px;
    margin-top: 19px;
    color: #108ac6;
    font-size: larger;
}
#menu ul li:hover{
           
    
           
    color: #ffffff;
    border: solid 1px #000;
    padding: 3px;
    border-radius: 10%;
   

   
}
#cooperation div div center a input{
    border: #ffffff solid 1px;
    }  
    #cooperation div div center a input:hover{
      
      border: #108ac6 solid 1px;
      color: #fff;
     
   }  
   
   #news div a input:hover{
      
      border: #108ac6 solid 1px;
      color: #fff;
     
   }  

   #footer input:hover{
      
      border: #108ac6 solid 1px;
      color: #108ac6 ;
     
   } 

   
        </style>
    </head>
    <body >

    <div id="header">
<img src="top.png">
<pre> سونوگرافی و رادیولوژی فرخ
    
اولین مرکز تصویربرداری

 فوری در ایران</pre>

    </div>

    <div id="menu">
<ul>
    <li><a href="{{route('index')}}">صفحه اول</a> </li>
    <li><a href="#hamkari">استخدام و همکاری </a></li>
    <li><a href="#about">درباره ی ما </a> </li>
    <li><a href="#contact">تماس با ما </a> </li>
    <li><a href="{{route('login')}}">ورود</a></li>
</ul>
    </div>
<div style="clear: both;width: 100%;"></div>
    <div id="about" style="direction: rtl;">

        <div style="float:right;width:40%;margin-right:10%;padding-top:70px">
            <a name="about"></a>
            <span style="color:#17ffff ;font-size: x-large;">
                درباره ی ما
            </span><br>
            <span style="color:#17ffff ;font-size: large;">
                رادیولوژی و سونوگرافی فرخ به عنوان 
                اولین مرکز تصویربرداری فوری در ایران 
                همه روزه در خدمت شماست


        </span>
        </div>
        <div style="float: left;width:35%;margin-left:5% ;">
            <div id="31405781710"><script type="text/JavaScript" src="https://www.aparat.com/embed/l8B7N?data[rnddiv]=31405781710&data[responsive]=yes"></script></div>
        
        </div>

    </div>
    <div id="newstop" style="padding-top:20px ;font-size: x-large;width: 100%;height:70px ;background-color: #00acc2;margin-top: 200px;clear: both;color: #fff;">
   <center>
        <span style="">رادیولوژی فرخ در رسانه ها</span>

    </center>
    </div>
    <div id="news" style="padding-top: 50px">
        <div id="newss" style="float:left;margin-left: 5%;height: 300px;width: 45%">

                <img src="ninisite.jpg" style="width:90%;height: auto;" ><br>
                    <a target="_blank" href="https://www.ninisite.com/article/17486/%D8%A8%D9%87%D8%AA%D8%B1%DB%8C%D9%86-%D8%B3%D9%88%D9%86%D9%88%DA%AF%D8%B1%D8%A7%D9%81%DB%8C-%D8%AF%D8%B1-%D8%B4%D8%B1%D9%82-%D8%AA%D9%87%D8%B1%D8%A7%D9%86%D8%B3%D9%88%D9%86%D9%88%DA%AF%D8%B1%D8%A7%D9%81%DB%8C-%D9%81%D8%B1%D8%AE"><input type="button" value="دیدن خبر" style="margin-top: 50px;font-size: x-large;color:#00acc2;width:150px;margin-left: 40%;background-color:#ffa827 ;"></a>
        </div>

        <div id="newss" style="float:right;margin-right: 5%;height: 300px;width: 45%">

            <img src="1PEZESHK.png" style="width:90%;height: auto;" ><br>
                <a target="_blank" href="https://www.1pezeshk.com/archives/2024/01/%D8%B1%D8%A7%D8%AF%DB%8C%D9%88%D9%84%D9%88%DA%98%DB%8C-%D9%81%D9%88%D8%B1%DB%8C-%D9%85%D9%88%D8%B3%D8%B3%D9%87-%D8%B1%D8%A7%D8%AF%DB%8C%D9%88%D9%84%D9%88%DA%98%DB%8C-%D9%81%D8%B1%D8%AE.html"><input type="button" value="دیدن خبر" style="margin-top: 50px;font-size: x-large;color:#00acc2;width:150px;margin-left: 40%;background-color:#ffa827 ;"></a>
    </div>

    </div>
    <div id="cooperationtop" style="padding-top:20px ;font-size: x-large;width: 100%;height:70px ;background-color: #438afe;margin-top: 700px;clear: both;color: #fff;">
        <center>
            <a name="hamkari"></a>
             <span style="">  همکاری با ما  </span>
     
         </center>
         </div>
 
    <div id="cooperation">
        <div id="news" style="padding-top: 50px">
            <div style="float:left;margin-left: 5%;height: 300px;width: 45%">
    <center>
                    <img src="karshenas.jpg" style="width:70%;height: auto;" ><br>
                    <span>کارشناسان رادیولوژی برای همکاری کلیک کنند</span><br>
                    <a target=”_blank” href="https://docs.google.com/forms/d/1K1ZwZnzIvCjpd_mNk0fXv1kcPw1rWC-FBm3Fcypn37o"><input type="button" value=" کلیک کنید" style="font-size: x-large;color:#00acc2;width:150px;margin-left: 0%;background-color:#ffa827 ;"></a>            </div>
                </center>
            <div style="float:right;margin-right: 5%;height: 300px;width: 45%">
    <center>
                <img src="p.jpg" style="width:90%;height: auto;" ><br>
                <span>پزشکان عزیز برای همکاری کلیک کنند</span><br>
                    <a target=”_blank” href="https://docs.google.com/forms/d/19Fdg8SJEAzIdRr_Mti6ruOPoJtuS-dvsCEGAH2H7l7M"><input type="button" value=" کلیک کنید" style="font-size: x-large;color:#00acc2;width:150px;margin-left: 0%;background-color:#ffa827 ;"></a>
                </center>
               </div>


<div style="clear: both;
    height: 210px;
    width: 100%;
    margin-bottom: 10%;"></div>

<div class="hamkaran" style="">
    <center>
                <img src="hesabdari.jpg" style="width:50%;height: auto;" ><br>
                <span>حسابداران عزیز برای همکاری کلیک کنند</span><br>
                    <a href="#"><input type="button" value=" کلیک کنید" style="font-size: x-large;color:#00acc2;width:150px;margin-left: 0%;background-color:#ffa827 ;"></a>
                </center>
               </div>
               <div class="hamkaran" style="">
                <center>
                            <img src="Monshi.jpg" style="border-radius: 40%;width:60%;height: auto;" ><br>
                            <span>منشیان عزیز برای همکاری کلیک کنند</span><br>
                                <a target=”_blank” href="https://docs.google.com/forms/d/107PJbMz3GgSt_2vvMP4JmFpgMcCMFS1zd7-cbjm-S7g"><input type="button" value=" کلیک کنید" style="font-size: x-large;color:#00acc2;width:150px;margin-left: 0%;background-color:#ffa827 ;"></a>
                            </center>
                           </div>

               
                           <div class="hamkaran" style="">
                            <center>
                                        <img src="bazaryab.jpg" style="border-radius: 45%;width:60%;height: auto;" ><br>
                                        <span>بازاریابان عزیز برای همکاری کلیک کنید</span><br>
                                            <a target=”_blank” href="https://docs.google.com/forms/d/16UQqLkPsqrEp6de9DqxayFnnCpLOvm9vYP_iSUZj89w"><input type="button" value=" کلیک کنید" style="font-size: x-large;color:#00acc2;width:150px;margin-left: 0%;background-color:#ffa827 ;">
                                        </a>
                                        </center>
                                       </div>
                      

                           

    </div>
    <div style="clear:both;height: 150px;width: 100%;"></div>
    <div id="footer" style="direction: rtl;background-color:#607d8b ;width: 100%;height: 300px;">
    <a name="contact"></a>
        <img src="naghshe.png" style="border-radius: 39px;
        margin-top: 10px;
        float: left;">
        <div style="margin-right: 27%;padding-top: 50px;">
        <span class="ftext" style="color: #fff;padding: 0px;margin-top: 50px">
            <b>آدرس:</b> 
            <br>
            تهران،نارمک،خیابان فرجام بین شهید مظفری نیا و عبادی 
            
            <br>
             پلاک 398،طبقه 4،واحد 14 رادیولوژی فرخ
        </span>
        <br>
       
       
    
            <br>
        
        <span class="ftext" style="color: #fff;padding: 50px;">
            <br>
         <b> شماره تماس:</b>  
            
            77735721        </span>

            <a href="https://neshan.org/maps/places/9a6d4947ad757c0606b2def1d36dbf68" style="color:#fff ;" target="_blank">
<input type="button" value="مسیریابی">
        </a>

          
        </div>
        <img id="logo" src="logo.jpg" style="">
    </div>
    <div id="copyright" style="width:100%;height: 70px;background-color: #273238;">
    <center>
        <br>
        <span class="ftext" style="color: #fff;padding-top: 10px;">تمامی حقوق برای مرکز تصویربرداری فرخ محفوظ است</span>
   
   
    </center>
    </div>
    
    </body>
</html>
