<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$lang=new GoogleTranslate('en');
return
[
'Add Post'=>$lang->setSource('en')->setTarget('en')->translate('Add post'),
'what think'=>$lang->setSource('en')->setTarget('en')->translate('what do U think ')


];
