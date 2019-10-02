<?php $path = Yii::app()->getBaseUrl(true) .'/files/media/sliders/';?>
<div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
        <ul>
            <?php foreach ($sliders as $k => $slider) : ?>
                <li data-index="rs-<?= $k ?>" 
                data-transition="slidingoverlayhorizontal" 
                data-slotamount="default" 
                data-easein="default" 
                data-easeout="default" 
                data-masterspeed="default" 
                data-thumb="<?= Utils::isUrlValid($slider['image'], $path); ?>" 
                data-rotate="0" data-saveperformance="off" 
                data-title="Slide <?= $k ?>" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?= Utils::isUrlValid($slider['image'], $path); ?>" alt="" 
                    data-bgposition="center top" data-bgfit="cover" 
                    data-bgrepeat="no-repeat" class="rev-slidebg"
                     data-bgparallax="10" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme text-uppercase 
                         text-white font-raleway bg-theme-colored-transparent 
                         border-right-theme-workshop-6px  pr-20 pl-20" 
                         id="rs-<?= $k ?>-layer-1" 
                         data-x="['<?= $slider['position'] ?>']" 
                         data-hoffset="['30']" data-y="['middle']" 
                         data-voffset="['-90']" data-fontsize="['64']"
                         data-lineheight="['72']" data-width="none" 
                         data-height="none" data-whitespace="nowrap" 
                         data-transform_idle="o:1;s:500" 
                         data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" 
                         data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" 
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                         data-start="1000" data-splitin="none" data-splitout="none" 
                         data-responsive_offset="on" 
                         style="z-index: 7; white-space: nowrap; font-weight:600;">
                        <?= wordwrap($slider['title'], 20, '<br>', true) ?>
                    </div>

                    <!-- LAYER NR. 4 -->
                    <?php if ($slider['button']) : ?>
                        <div class="tp-caption tp-resizeme" id="rs-<?= $k ?>-layer-4" data-x="['<?= $slider['position'] ?>']" data-hoffset="['35']" data-y="['middle']" data-voffset="['40']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                            <a class="btn btn-colored btn-lg btn-flat
                             btn-theme-colored btn-theme-colored
                             border-right-theme-workshop-6px  pl-20 pr-20"
                              href="<?= $slider['link'] ?>">
                              <?= $slider['button'] ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- end .rev_slider -->
</div>