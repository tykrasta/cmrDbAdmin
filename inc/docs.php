<?php
class Lien{
    function iframe($src)
    {
        echo "<iframe height='500px' src='$src' frameborder='1'></iframe>";
    }
    function a($txt,$src){
        echo "<p><a href='$src' target='_blank'>$txt</a></p>";
    }
}
$lien=[
    'php.net'=>'http://php.net/docs.php',
    'api.jquery'=>'http://api.jquery.com/',
    'nodejs'=>'https://nodejs.org/en/',
    'composer'=>'https://getcomposer.org/',
    'symfony'=>'https://symfony.com/doc/current/setup.html',
    'angular'=>'angular.io',
    'dart-sass'=>'https://sass-lang.com/dart-sass',
    'bootstrap'=>'https://getbootstrap.com/',
    'prismjs'=>'https://prismjs.com/download.html#themes=prism-twilight&languages=markup+css+clike+javascript',
    'fontawesome'=>'http://fontawesome.com',
    'google font'=>'https://fonts.google.com',
    'developer.mozilla'=>'https://developer.mozilla.org/fr/docs/',
    'W3Schools'=>'https://www.w3schools.com/'   
];
$frame = new Lien();
$frame->iframe('https://devdocs.io/');
$link = new Lien();
foreach ($lien as $key => $value) {
    $link->a($key,$value);   
}


