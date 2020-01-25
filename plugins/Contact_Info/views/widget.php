<!-- This file is used to markup the public-facing widget. -->
<p>
    <?php if (strlen(trim($phone)) > 0) : ?>
        <span class="phone"><i class="fas fa-phone-alt"></i></span>
        <a href=""><?php echo $phone; ?></a>
    <?php endif; ?>
</p>

<p>
    <?php if (strlen(trim($email)) > 0) : ?>
        <span class="email"><i class="fas fa-envelope"></i></span>
        <a href=""><?php echo $email; ?></a>
    <?php endif; ?>
</p>

<!-- <p>
    <?php if (strlen(trim($facebook)) > 0) : ?>
        <span class="facebook"><i class="fab fa-facebook-square"></i></span>
        <a href=""><?php echo $facebook; ?></a>
    <?php endif; ?>
</p>

 <p>
    <?php if (strlen(trim($twitter)) > 0) : ?>
        <span class="twitter"><i class="fab fa-twitter-square"></i></span>
        <a href=""><?php echo $twitter; ?></a>
    <?php endif; ?>
</p>

<p>
    <?php if (strlen(trim($location)) > 0) : ?>
        <span class="google"><i class="fab fa-google-plus-square"></i></span>
        <a href=""><?php echo $google; ?></a>
    <?php endif; ?>
</p> -->

<p>
    <?php if (strlen(trim($location)) > 0) : ?>
        <span class="location"><i class="fas fa-map-marker-alt"></i></span>
        <p><?php echo $location; ?></p>
    <?php endif; ?>
</p>