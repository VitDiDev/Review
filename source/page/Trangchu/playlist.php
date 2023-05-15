<div class="option-all__playlist
        option-all__margin_bot">
    <div class="option-heading
            option-all__playlist-heading mobile-hiden">
        <h3 class="option-heading-name
                js__main-color">Playlist</h3>
        <div class="more-list ">
            <span class="js__main-color">Tất cả</span>
            <i class="fas fa-chevron-right
                    js__main-color"></i>
        </div>
    </div>
    <ul class="option-all__playlist-list">
        <div class="row">
            <div class="col l-2-4 m-3 s-6
                    mobile-margin-bot-10px">
                <li class="option-all__playlist-item0">
                    <i class="fas fa-plus"></i>
                    <span>Tạo playlist mới</span>
                </li>
            </div>
<?php
    $sql = "select * from playlist where user = ".$user_id;
    $result = $dbCon->query($sql);
    $html = '';
	if ($result && $result->num_rows > 0) {
		while ($row = $result->fetch_assoc()){
            $html .= <<<EOF
                        <div class="col l-2-4 m-3 s-6 mobile-margin-bot-10px">
                        <li class="option-all__playlist-item">
                        <div class="option-all__playlist-item-img-wrapper">
                        <div class="option-all__playlist-item-img-wrapper-action">
                            <i class="fas fa-times
                                    option-all__playlist-item-img-wrapper-action-icon1"></i>
                            <i class="fas fa-play
                                    option-all__playlist-item-img-wrapper-action-icon2"></i>
                            <i class="fas
                                    fa-ellipsis-h
                                    option-all__playlist-item-img-wrapper-action-icon3"></i>
                        </div>
                        EOF;
            $html .= '<div class="option-all__playlist-item-img" style="background-image: url(./assets/img/playlist/'.$row["image"].');"></div>';
            $html .= '</div>';
            $html .= '<div class="option-all__playlist-item-content">';
            $html .= '<a href="./playlist_song.php?playlist='.$row["id"].'"><div class="option-all__playlist-item-content-name1 js__main-color">'.$row["name"].'</div></a>';
            $html .= '<div class="option-all__playlist-item-content-name2 js__sub-color">'.$name.'</div>';
            $html .= '</div>';
            $html .= '</li>';
            $html .= '</div>';            
        }
	}
    echo $html;                                          
?>
        </div>
    </ul>
</div>

