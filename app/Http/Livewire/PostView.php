<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PostModel;

//use App\Models\comment;
//use App\Models\React;
class PostView extends Component
{
    public $title;
    public $PostBody;
    //public $commentText;
    //public $replayText;
    public function render()
    {
        $postes=PostModel::orderBy('created_at','desc')->get();
        return view('livewire.post-view',compact('postes'));
    }
    function createPost()
    {
        if( $this->PostBody===null)
        {
        
        $this->reset('PostBody');
            return back();
        }
        $post=PostModel::create([
            'body'=>$this->PostBody,
            'user_id'=>auth()->guard('Provider')->user()->id
        ]);


        $this->reset('PostBody');
    }


   /* public function createComment($id)
    {
        comment::create([
            'post_id'=>$id,
            'user_id'=>auth()->user()->id,
            'commentText'=>$this->commentText
        ]);
        $this->reset('commentText');
    }
    function createReplay($post_id,$comment_id)
    {
        if($this->replayText==null){
            $this->reset('replayText');

            return back();
        }
        comment::create([
            'post_id'=>$post_id,
            'user_id'=>auth()->user()->id,
            'commentText'=>$this->replayText,
            'parent_id'=>$comment_id
        ]);
        $this->reset('replayText');

    }*/

   /* #################### React creation function #################3
    function react($type,$post_id)
    {

        $react=React::where('post_id',$post_id)->where('user_id',auth()->user()->id)->first();
        if($react ==null){
        React::create([
            'user_id'=>auth()->user()->id,
            'post_id'=>$post_id,
            'type'=>$type
        ]);
    }
    else{
        return back();
    }
    }*/
}
