<?php 
$sl=new slider();
$s=$sl->leer_slider();


?>

<div>
        <div>
            <div>
                <ol class="carousel-indicators">
                    
                    <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="0" class="active"></li>
                    <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="1"></li>
                    <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="2"></li>
                    <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="3"></li>
                    <li data-app-prevent-settings="" data-target="#slider-0" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active" data-bg-video-slide="false" style="background-image: url(assets/images/<?php echo $s[0]['img_slider'] ?>);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-xs-center">
                                        <h2 class="mbr-section-title display-1"></h2>
                                        <p class="mbr-section-lead lead"></p>

                                        <!--<div class="mbr-section-btn"><a class="btn btn-lg btn-success" href="www.infocentro.com">FOR WINDOWS</a> <a class="btn btn-lg btn-white btn-white-outline" href="www.infocentro.com">FOR MAC</a></div>--->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/<?php echo $s[1]['img_slider'] ?>);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h2 class="mbr-section-title display-1"></h2>
                                        <p class="mbr-section-lead lead"></p>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/<?php echo $s[2]['img_slider'] ?>);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1"></h2>
                                        <p class="mbr-section-lead lead"></p>

                                        <!--<div class="mbr-section-btn"><a class="btn btn-lg btn-info" href="www.infocentro.com">FOR WINDOWS</a> <a class="btn btn-lg btn-white btn-white-outline" href="www.infocentro.com">FOR MAC</a></div>--->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/<?php echo $s[3]['img_slider'] ?>);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1"></h2>
                                        <p class="mbr-section-lead lead"></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/<?php echo $s[4]['img_slider'] ?>);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1"></h2>
                                        <p class="mbr-section-lead lead"></p>

                                       <!--- <div class="mbr-section-btn"><a class="btn btn-lg btn-info" href="www.infocentro.com">FOR WINDOWS</a> <a class="btn btn-lg btn-white btn-white-outline" href="www.infocentro.com">FOR MAC</a></div> ---->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-0">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-0">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

