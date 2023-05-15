<div class="option-all__playlist
        option-all__margin_bot">
    <div class="option-heading
            option-all__playlist-heading">
        <h3 class="option-heading-name
                js__main-color">Nghệ Sĩ</h3>
        <div class="more-list mobile-hiden">
            <span class="js__main-color">Tất cả</span>
            <i class="fas fa-chevron-right
                    js__main-color"></i>
        </div>
    </div>
    <ul class="option-all__playlist-list">
        <div class="row">
<?php
    $sql = "select * from singer limit 8";
    $result = $dbCon->query($sql);
    $html = '';
	if ($result && $result->num_rows > 0) {
		while ($row = $result->fetch_assoc()){
            $html .= <<<EOF
                            <div class="col l-2-4 m-4 s-6 mobile-margin-bot-30px ">
                                <li class="option-all__playlist-item
                                        option-all__playlist-item-margin_top">
                                    <div class="option-all__playlist-item-img-wrapper
                                            option-all__playlist-item-img-wrapper-mv">
                                        <div class="option-all__playlist-item-img-wrapper-action">
                                            <!-- <i class="fas fa-times option-all__playlist-item-img-wrapper-action-icon1"></i> -->
                                            <i class="fas fa-play
                                                    option-all__playlist-item-img-wrapper-action-icon2"></i>
                                            <!-- <i class="fas fa-ellipsis-h option-all__playlist-item-img-wrapper-action-icon3"></i> -->
                                        </div>
                        EOF;
            $html .= '<div class="option-all__playlist-item-img
                                option-all__playlist-item-img-singer" style="background-image:
                                url(./assets/img/singer/'.$row["image"].');"></div>';
            // $html .= '<div class="option-all__playlist-item-img
            //                     option-all__playlist-item-img-singer" style="background-image:
            //                     url(./assets/img/singer/'.$row["image"].'.webp);"></div>';
            $html .= '</div>';
            $html .= '<a href="./singer_song.php?singer='.$row["id"].'">';
            $html .= '<div class="option-all__playlist-item-content-singer">
                        <div class="option-all__playlist-item-content-singer-name1
                                js__main-color">'.$row["name"].'</div>';
            // $html .= '<div class="option-all__playlist-item-content-singer-name2
            //                     js__sub-color">757K quan
            //                 tâm</div>';
            $html .= <<<EOF
                                    <div class="option-all__playlist-item-content-singer-profile">
                                        <i class="fas fa-random
                                                js__main-color"></i>
                                        <span class="js__main-color">Góc
                                            nhạc</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </div>
                    EOF;
        }
    }
    echo $html;                                          
?>
        </div>
    </ul>
</div>