<?php echo do_shortcode('[wp_login_header]') ?>
<div class="l-content l-content--user">
    <div class="l-content__container">
    <!-- b-content -->
    <div class="b-content  l-content__item">
        <div class="b-content__logo b-logo">
            <a href="<?php echo home_url() ?>" class="b-logo__item b-logo__item--user">Logo</a>
        </div>
        <div class="b-content__text b-content__text--user c-text">
            <p><?php echo $description ?></p>
        </div>
        <div class="b-content__hr b-content__hr--user"></div>
        <ul class="b-content__links">
            <li class="b-content__link-item b-content__link-item--user"><a class="b-content__link" href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></li>
            <li class="b-content__link-item b-content__link-item--user"><a class="b-content__link" href="mailto:<?php echo $email ?>"><?php echo $email ?></a></li>
        </ul>
    </div>
    <!-- /b-content -->
    <!-- b-login-form -->
    <form class="b-login-form @@mod @@mix" action="" method="get" accept-charset="utf-8" id="registration-form">
        <div class="b-login-form__message b-login-form__message--user lost-password-message-show-up">
            <div class="b-login-form__message-inner b-login-form__message-inner--user b-login-form__message-inner--info">
                <div><?php _e('Register For This Site.') ?> <?php _e('Registration confirmation will be emailed to you.') ?></div>
            </div>
        </div>
        <div class="b-login-form__message b-login-form__message--user">
            <div class="b-login-form__message-inner b-login-form__message-inner--user">
                <div></div>
            </div>
        </div>
        <label class="b-login-form__label b-login-form__label--user" for="user_login"><?php _e('Username') ?></label>
        <input class="b-login-form__input b-login-form__input--user" type="text" id="user_login" name="user_login">
        <label class="b-login-form__label b-login-form__label--user" for="user_email"><?php _e('Email') ?></label>
        <input class="b-login-form__input b-login-form__input--user" type="text" id="user_email" name="user_email">
        <div class="b-login-form__row">
            <input class="b-login-form__button b-login-form__button--user b-login-form__button--100p" type="submit" name="register" value="<?php _e('Register') ?>">
        </div>
        <ul class="b-login-form__links">
            <li class="b-login-form__link-item"><a class="b-login-form__link b-login-form__link--user" href="<?php echo $login_url ?>"><?php _e('Log in') ?></a></li>
            <li class="b-login-form__link-item">
                <a class="b-login-form__link b-login-form__link--user" href="<?php echo $lost_password_url ?>"><?php _e('Lost your password?') ?></a>
            </li>
        </ul>
    </form>
    <!-- /b-login-form -->
    </div>
</div>
<?php echo do_shortcode('[wp_login_footer]') ?>