<?php
$group = get_field('employee-quote');
$img = get_field_value($group, 'image');
$name = get_field_value($group, 'name');
$position = get_field_value($group, 'position');
$text = get_field_value($group, 'text');
?>
<div class="employee-quote">
    <svg class="employee-quote__background" viewBox="0 0 851 450" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 450H635.109L779 225L635.109 0H0L143.891 225L0 450Z" fill="#292B2E" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M658 450H706.973L851 225L706.973 0H658L802.027 225L658 450Z" fill="#F4BC20" />
    </svg>
    <div class="container">
        <div class="employee-quote__wrap">
            <figure class="employee-quote__figure">
                <?php if ($img) { ?>
                    <img class="employee-quote__image" src="<?php echo $img; ?>" alt="img">
                <?php } ?>
            </figure>
            <div class="employee-quote__info">
                <div class="employee-quote__text">
                    <?php if ($text) {
                        echo $text;
                    } ?>
                </div>
                <div class="employee-quote__fio">
                    <?php if ($name) { ?>
                        <p class="employee-quote__name">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6094 17.8936H11.4878L-0.00132179 0.893555H7.14188L18.6094 17.8936Z" fill="#F4BC20" />
                            </svg>

                            <?php echo $name; ?>
                        </p>
                    <?php } ?>
                    <?php if ($position) { ?>
                        <p class="employee-quote__position"><?php echo $position; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
