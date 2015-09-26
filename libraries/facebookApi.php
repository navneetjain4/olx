<?php

class facebookApi{

    function getFacebookObj(){
        $app_id = '1022914594397199';
        $app_secret = 'a3770f44fd7e282a78b69cd61d25e546';
        $fb = new Facebook\Facebook([
                'app_id' => $app_id,
                'app_secret' => $app_secret,
                'default_graph_version' => 'v2.4',
                ]);
        return $fb;
    }

}
