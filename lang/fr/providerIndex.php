<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
$lang=new GoogleTranslate('en');
return
[
'Add Post'=>$lang->setSource('en')->setTarget('fr')->translate('Add post'),
'what think'=>$lang->setSource('en')->setTarget('fr')->translate('what do U think ')


];
