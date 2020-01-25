<!-- This file is used to markup the public-facing widget. -->
<p>
    <?php if (strlen(trim($weekdays)) > 0) : ?>
        <span class="business-weekdays"><strong>Monday to Friday:</strong></span>
        <?php echo $weekdays; ?>
    <?php endif; ?>
</p>

<p>
    <?php if (strlen(trim($saturdays)) > 0) : ?>
        <span class="saturdays"><strong>Saturday:</strong></span>
        <?php echo $saturdays; ?>
    <?php endif; ?>
</p>

<p>
    <?php if (strlen(trim($sundays)) > 0) : ?>
        <span class="sundays"><strong>Sunday:</strong></span>
        <?php echo $sundays; ?>
    <?php endif; ?>
</p>