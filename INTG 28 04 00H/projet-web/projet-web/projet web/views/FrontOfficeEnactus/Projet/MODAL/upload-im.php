<?php
//echo '<script> alert("fez"); </script>';


if (isset($_POST['nome']) && isset($_POST['nomee'])) {
    
    if (file_exists('../../../Back Office ENACTUS/Les Modules/gestion produit/php/views/Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'])) {

    $var = '../../../Back Office ENACTUS/Les Modules/gestion produit/php/views/Les Projets/'.$_POST['nomee'].'/'.$_POST['nome'];

    $folder_name = $var .'/';

    if (isset($_POST["name"])) {
        $filename = $folder_name . $_POST["name"];
        unlink($filename);
    }

    $result = array();

    $files = scandir($var); //$var

        $output = '
<script>
                            var slideIndex,slides,dots,captionText;
                            function initGallery() {
                                slideIndex=0;
                               // alert("imagesHolder_'.$_POST['nome'].'");
                               slides=document.getElementsByClassName("imagesHolder '.$folder_name.'");
                                //alert("ICI : "+slides.length);
                                //slides=document.getElementById("imagesHolder_'.$folder_name.'");
                                slides[slideIndex].style.opacity=1;
                                
                                captionText=document.querySelector(".captionHolder .captionText ");
                                captionText.innerHTML=slides[slideIndex].querySelector(".captionText ").innerHTML ;
                                
                                dots=[];
                                var dotsContainer=document.getElementById(\'dotsContainer\');
                                
                                for(var i=0;i<slides.length;i++)
                                    {
                                        var dot=document.createElement("span");
                                        dot.classList.add("dots");
                                        dot.setAttribute("onClick","moveSlide("+i+")");
                                        dotsContainer.append(dot);
                                        dots.push(dot);
                                        //alert(i);
                                    }
     
                                dots[slideIndex].classList.add("active");


                                /*alert("plz");
                                if(1)
                                    {
                                return ;}
                                alert("plz2");*/
                            }
                                initGallery();
                            function plusSlides(n){
                                moveSlide(slideIndex+n);
                               // alert(slides.length);
                            }
                            function moveSlide(n) {
                              var i,current,next;
                              var moveSlideAnimClass={forCurrent:"",forNext:""}
                              if (n>slideIndex)
                                  { if (n>=slides.length) {n=0;}
                                      moveSlideAnimClass.forCurrent="moveLeftCurrentSlide";
                                      moveSlideAnimClass.forNext="moveLeftNextSlide";
                                  }else if(n<slideIndex)
                                      {if(n<0) {n=slides.length-1;}
                                      moveSlideAnimClass.forCurrent="moveRightCurrentSlide";
                                      moveSlideAnimClass.forNext="moveRightNextSlide";
                                      }
                              if(n!=slideIndex){
                                  next=slides[n];
                                  current=slides[slideIndex];
                                  for (i=0;i<slides.length;i++){
                                      slides[i].className="imagesHolder '.$folder_name.'";
                                      slides[i].style.opacity=0;
                                      dots[i].classList.remove("active");
                                  }
                                  current.classList.add(moveSlideAnimClass.forCurrent);
                                  next.classList.add(moveSlideAnimClass.forNext);
                                  dots[n].classList.add("active");
                                  slideIndex=n;

                              }
                            }
                            </script>
                            
                            <div id="slideShowContainer">
                            <div class="leftArrow" onclick="plusSlides(-1)"><span class="arrow arrowLeft"></span></div>
                                    <div class="rightArrow" onclick="plusSlides(1)"><span class="arrow arrowRight"></span></div>
                                    <div class="captionHolder" ><p class="captionText "></p></div>
                                    ';

        if (false !== $files) {
            $i=0;
            foreach ($files as $file) {

                if ('.' != $file && '..' != $file) {
                    $i++;
                    $output .= '
                                    
   <div class="imagesHolder '.$folder_name.'">
    <img src="' .$folder_name.$file . '" style="height: 390px;width: 390px" >
    <input type="text" value="imagesHolder '.$folder_name.'">
    <p class="captionText  "></p>
   </div>
<!--
                                    
-->                                                    
   ';
                }
            }
        }
        $output .= '</div><div id="dotsContainer"></div>';
        echo $output;
}
}



?>