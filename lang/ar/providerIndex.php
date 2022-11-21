<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$lang=new GoogleTranslate('en');
return
[
'Add Post'=>$lang->setSource('en')->setTarget('ar')->translate('Add post'),
'what think'=>$lang->setSource('en')->setTarget('ar')->translate('what do U think ')

];
