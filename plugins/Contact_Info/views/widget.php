<!-- This file is used to markup the public-facing widget. -->
<p>
    <?php if (strlen(trim($phone)) > 0) : ?>
        <span class="contact phone">
            <i class="fas fa-phone-alt"></i>
            <a href=""><?php echo $phone; ?></a>
        </span>
    <?php endif; ?>
</p>

<p>
    <?php if (strlen(trim($email)) > 0) : ?>
        <span class="contact email">
            <i class="fas fa-envelope"></i>
            <a href=""><?php echo $email; ?></a>
        </span>
    <?php endif; ?>
</p>
<div class="social-media-icons">
    <p>
        <?php if (strlen(trim($facebook)) > 0) : ?>
            <span class="facebook">
                <i class="fab fa-facebook-square"></i>
                <a href="<?php echo $facebook; ?>"></a>
            </span>
        <?php endif; ?>
    </p>

    <p>
        <?php if (strlen(trim($twitter)) > 0) : ?>
            <span class="twitter">
                <i class="fab fa-twitter-square"></i>
                <a href="<?php echo $twitter; ?>"></a>
            </span>
        <?php endif; ?>
    </p>

    <p>
        <?php if (strlen(trim($google)) > 0) : ?>
            <span class="google">
                <i class="fab fa-google-plus-square"></i>
                <a href="<?php echo $google; ?>"></a>
            </span>
        <?php endif; ?>
    </p>
</div>

<div class="location-icon">
    <p>
        <?php if (strlen(trim($location)) > 0) : ?>
            <span class="location">
                <i class="fas fa-map-marker-alt"></i>
                <p class="location-input"><?php echo $location ?></p>
            </span>
        <?php endif; ?>
    </p>
</div>