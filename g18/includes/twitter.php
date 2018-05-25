<?php

    require "vendor/autoload.php";
    use Abraham\TwitterOAuth\TwitterOAuth;

    require_once "includes/connexion.php";
    $sql = "SELECT 
      `name`
    FROM
      alde
    ;";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    errorHandler($stmt);

    // On obtient le token d'accès
    $oauth = new TwitterOAuth("UxMvvMkRjTrn61rP308iRQcui", "dz7hDgXkhd2tfhP4Ow8jM5VzMCTPyUByqEIG0CWyVPPZMZmRXe");
    $accessToken = $oauth->oauth2('oauth2/token', ['grant_type' => 'client_credentials']);
    $access_token = $accessToken->access_token;
    
    // on appel l'API
    $twitter = new TwitterOAuth("UxMvvMkRjTrn61rP308iRQcui", "dz7hDgXkhd2tfhP4Ow8jM5VzMCTPyUByqEIG0CWyVPPZMZmRXe", null, $access_token);
    while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):
    $tweets = $twitter->get('statuses/user_timeline', [
        'screen_name' => $row['name'],
        'include_rts' => false,
        'exclude_replies' => false,
        'count' => 10// On est obligé de filtrer après coup (cf doc)
    ]);
    if (isset($tweets3)){
        $tweets3 = array_merge($tweets3, $tweets);
    } else {
        $tweets3 = $tweets;
    }
    
    endwhile;
    function sortFunction( $a, $b ) {
            return strtotime($a->created_at) - strtotime($b->created_at);
    }
    usort($tweets3, "sortFunction");
    $tweets3 = array_reverse($tweets3);
    $autolink = \Twitter\Text\Autolink::create();
?>