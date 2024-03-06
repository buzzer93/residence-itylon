<?php
function dump ($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

// getimagesize(string $filename)L'index 0 contient la largeur. L'index 1 contient la hauteur.;
function format_class($image){
    $img_width = getimagesize($image)[0];
    $img_height = getimagesize($image)[1];
    if($img_height/$img_width >= 1){ //portrait or square (heidht/width < 1,landscape)
        return "portrait";
    }
    else{
        return"landscape";
    }
}
//$dir = string (chemin du dossier)
function carouselBuilder($dir){
$dir_array = dirArray($dir);
    echo("
        <div id='carouselExampleFade' class='carousel slide carousel-fade' data-ride='carousel'>
            <div class='carousel-inner'>"
);
 foreach ($dir_array as $key => $img_name){ 
    $is_active = ''; 
    if ($key === array_key_first($dir_array)){
        $is_active = 'active';
    }
    if (preg_match('/[\s\S]+\.(png|jpg|jpeg)/', $img_name)){
     $class = format_class("$dir/$img_name");
        echo (
            "<div class='carousel-item $is_active'>
                <img src='$dir/$img_name' class='$class' alt='$img_name'>
            </div>"
        );
    };
    }
    echo("
            </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleFade' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleFade' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
        </div>
    ");
}

function dirArray($dir):array{
    $dir_array = scandir($dir);
    while( $dir_array[0] === "."  || $dir_array[0] === ".."){
        array_shift($dir_array);
        };
        return $dir_array;
}

function imageGallery ($dir){
    $dir_array = dirArray($dir);
    echo("<div class='container-fluid'>
        <div class='gallery row'>");
        foreach ($dir_array as $k => $img_name){
            if (preg_match('/[\s\S]+\.(png|jpg|jpeg|JPG)/', $img_name)){
                $class = format_class("$dir/$img_name");   
            echo ("<div class='gallery-img-box col-12 col-md-5 col-xl-3'>            
                <img src='$dir/$img_name' class=' $class' alt='$img_name'>
            </div>");
            }
        }
    echo("</div>
        </div>");
}


function galleryBuilder($dir){
    $dir_array = dirArray($dir);
        echo("<div class='gallery'>
                <ul class='gallery'>");
     foreach ($dir_array as $key => $img_name){ 
        if (preg_match('/[\s\S]+\.(png|jpg|jpeg)/', $img_name)){
            $class = format_class("$dir/$img_name");
            echo (
                    "<li class='gallery'>
                        <img class='gallery' src='$dir/$img_name' class='$class'  alt='$img_name' loading='lazy'>
                    </li>"
            );
        };
        }
        echo("  </ul>
            </div>"
        );
    }

    function cardBuilder (string $title, string $href, string $src, string $p){
        echo(
        "<div class='col-11 col-md-6 col-lg-4'>
            <div class='card'>
                <div class='bg-image hover-overlay card-img-box ripple' data-mdb-ripple-color='light'>
                    <a href='$href'><img src='$src' class='img-fluid'/>
                    </a>
                </div>
                <div class='card-body'>
                    <h4 class='card-title'>$title</h4>
                    <p>$p</p>
                    
                    <a href='$href' class='btn ' target='_blank' >En savoir plus</a>
                </div>
            </div>
        </div>");
    }