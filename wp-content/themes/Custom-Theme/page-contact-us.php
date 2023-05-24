<?php 
/**
 * Template Name: Media
 * 
 * @since 1.0
 */
?>
<?php
/*
** Template Name: Add Post From Frontend
*/
?>
<?php
    $contact_us_header_args = array(
        'post_type' => 'contact-us-header',
        'post_per_page' => '1',
    );
    $contact_us_header_query = new WP_Query ( $contact_us_header_args );
    $first_name = $last_name = $email = $comment = $inquiry_type = $contact_number = "";
    get_header(); 
?>

<script>
</script>
<?php
    if(isset($_POST))
    {
        $inquiry_select = $_POST['inquiry_select'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $comment = $_POST['comment'];
        $new_post = array(
            'post_title' => 'Inquiry',
            'post_type' => 'inquiry-form',
            'post_status' => 'publish',
        );
        $post_id = wp_insert_post( $new_post );
        update_field( 'inquiry_type', $inquiry_select, $post_id );
        update_field( 'first_name', $first_name, $post_id );
        update_field( 'last_name', $last_name, $post_id );
        update_field( 'email', $email, $post_id );
        update_field( 'contact_number', $contact_number, $post_id );
        update_field( 'comment', $comment, $post_id );
        
        $to = 'neilianenriquez.dbmanila@gmail.com';
        $subject = 'Dunkin Inquiry';
        $message = $comment;
        $headers[] = 'From: ';
        $headers[] = 'Reply-To: Neil Enriquez';
        $headers[] = 'Content-Type: text/html: charset=UTF-8'; 
        wp_mail($to, $subject, $message, $headers);
    }
    else {
        return;
    }
?>
<div class="contact">
    <section class="contact-hero">
        <div class="contact-hero-container">
            <div class="contact-hero-container-content">
                <?php if (  $contact_us_header_query->have_posts() ) :  $contact_us_header_query->the_post(); ?>
                        <?php
                            $value = get_field( "title" );
                            if( $value ) {
                                echo '<h1>' . $value . '</h1>';
                            } else {
                                echo 'empty'; 
                            }
                            $value = get_field( "content" );
                            if( $value ) {
                                echo '<p>' . $value . '</p>';
                            } else {
                                echo 'empty'; 
                            }
                        ?>
                    <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="hero-container-footer">
        <img src="https://dev-api.dunkindonuts.ph/storage/uploads/Banner/2022-12-20/bg-drip-1_15-45-44-181169.png" width="100%" alt="test" loading="lazy" title="test">
    </div>
    <section class="contact-info">
        <div class="contact-info-container">
            <div class="contact-info-container-content">
                <div class="contact-info-container-content-left">
                    <h2 class="">Address</h2>
                    <p class="">GDI Bldg. Reliance cor. Sheridan Sts. Highway Hills, Mandaluyong City</p>
                    <h2 class="">Email</h2>
                    <p class="">dunkin@email.com</p>
                    <h2 class="">Social Media</h2>
                    <ul class="">
                        <li class=""><a href="#" class="fa fa-facebook socials_link"></a></li>
                        <li class=""><a href="#" class="fa fa-twitter socials_link"></a></li>
                        <li class=""><a href="#" class="fa fa-instagram socials_link"></a></li>
                        <li class=""><a href="#" class="fa fa-youtube socials_link"></a></li>
                        <li class=""><a href="#" class="fa fa-vine socials_link"></a></li>
                    </ul>
                </div>
                <div class="contact-info-container-content-right">
                    <form method="post" name="form" enctype="multipart/form-data">  
                        <div class="contact-info-container-content-right-text-solo">
                            <div class="contact-info-container-content-right-text-row">
                                Inquiry:<br>
                                <select name="inquiry_select">
                                    <option value="" name="inquiry_type">Select an Inquiry</option>
                                    <option value="General Inquiry" name="inquiry_type">General Inquiry</option>
                                </select>
                            </div>
                        </div>
                        <div class="contact-info-container-content-right-text">
                            <div class="contact-info-container-content-right-text-row">
                                <label> First Name: </label><br>
                                <input type="text" name="first_name">
                            </div>
                            <div class="contact-info-container-content-right-text-row">
                                <label> Last Name: </label> <br>
                                <input type="text" name="last_name">
                            </div>
                        </div>
                        <div class="contact-info-container-content-right-text">
                            <div class="contact-info-container-content-right-text-row">
                                <label> E-mail: </label> <br>
                                <input type="text" name="email">
                            </div>
                            <div class="contact-info-container-content-right-text-row">
                                <label> Contact Number: </label><br>
                                <input type="number" name="contact_number">
                            </div>
                        </div>
                        <div class="contact-info-container-content-right-text-solo">
                            <div class="contact-info-container-content-right-text-row">
                                <label> Comment: </label> <br>
                                <textarea name="comment" rows="5" cols="40"></textarea>
                                <br><br>
                            </div>
                        </div>
                        <div class="contact-info-container-content-right-text-footer">
                            <div class="contact-info-container-content-right-text-footer-row">
                                <input type="checkbox" name="privacy_policy" value="checkox_value">
                                <p>I have read the Privacy Policy.</p>
                            </div>
                            <div class="contact-info-container-content-right-text-footer-row">
                                <input type="checkbox" name="newsletter" value="checkox_value">
                                <p>By checking this box, you agree to recieve newsletters, personalized information and advetisement from Dunkin'.</p>
                            </div>
                        </div>
                        <div class="contact-info-container-content-button">
                            <input type="submit" name="submit" value="Submit" class="general_button blue_button">
                            <input type="button" name="submit" value="Submit" class="general_button blue_button">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    
</script>
<style>
    .contact {
        margin-top: 110px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }    
    .contact-hero {
        background-image: url(https://dev-api.dunkindonuts.ph/storage/uploads/Banner/2022-12-20/bg-image-2_15-49-47-493221.jpg);
        background-color: #dd307c;
        background-position: center;
        background-repeat: no-repeat;
        background-position: bottom;
        height: 250px;
        width: 100%;
        color: white;
        text-align: center;
        vertical-align: middle;
    }
    .contact-hero-container-content {
        padding-top: 125px;
    }
    .contact-hero h1 {
        font-size: 50px;
        margin: 0;
    }
    .contact-hero p {
        font-size: 20px;
        margin: 0;
    }
    .contact-info {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
        position: relative;
        margin-top: 15%;
    }
    .contact-info-container {
        width: 100%;
        display: flex;
    }
    .contact-info-container-content {
        position: relative;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        width: 100%;
    }
    .contact-info-container-content-left {
        width: 30%;
    }
    .contact-info-container-content-left h2 {
        font-size: 27px;
        letter-spacing: .24px;
        line-height: 1.5;
        color: gray;
        transition: .3s ease;
        font-weight: bold;
    }
    .contact-info-container-content-left ul {
        list-style: none;
        display: flex;
        margin: 0 0;
        padding: 0 0;
        color: #f20c90;
    }
    .contact-info-container-content-left li a {
        color: #f20c90 !important;
        font-size: 20px !important;
    }
    .contact-info-container-content-left li a:hover {
        background: #f20c90 !important;
        color: white !important;
        transition: .5s ease;
    }
    .contact-info-container-content-left p {
        font-size: 16px;
        letter-spacing: .24px;
        line-height: 1.5;
        color: gray;
        transition: .3s ease;
        font-weight: bold;
    }
    .contact-info-container-content-left p:hover {
        color: #FF6E0E;
        transition: .3s ease;
    }

    .contact-info-container-content-right {
        width: 50%;
    }
    .contact-info-container-content-right-text {
        display: flex;
        flex-flow: row wrap;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .contact-info-container-content-right-text-solo {
        display: block;
        flex-flow: row wrap;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .contact-info-container-content-right-text-row {
        position: relative;
        transition: .3s ease;
        flex: 0 0 calc(50% - 10px);
    }
    .contact-info-container-content-right-text-row label {
        display: block; */
        font-family: var(--book);
        color: #000;
        transition: .3s ease;
    }
    .contact-info-container-content-right-text-row input {
        display: block;
        width: 100%;
        border-radius: 6px;
        border: 1px solid #f5f5f5;
        padding: 12px 4px;
        font-family: var(--book);
        font-size: 16px;
        letter-spacing: .24px;
        background-color: #f5f5f5;
        color: var(--theme_mine_shaft);
        resize: none;
        transition: .3s ease;
    }
    .contact-info-container-content-right-text-row select {
        display: block;
        width: 100%;
        border-radius: 6px;
        border: 1px solid #f5f5f5;
        padding: 12px 15px;
        font-family: var(--book);
        font-size: 16px;
        letter-spacing: .24px;
        background-color: #f5f5f5;
        color: var(--theme_mine_shaft);
        resize: none;
        transition: .3s ease;
    }
    .contact-info-container-content-right-text-row textarea {
        display: block;
        width: 100%;
        border-radius: 6px;
        border: 1px solid #f5f5f5;
        padding: 12px 4px;
        font-family: var(--book);
        font-size: 16px;
        letter-spacing: .24px;
        background-color: #f5f5f5;
        color: var(--theme_mine_shaft);
        resize: none;
        transition: .3s ease;
    }

    .general_button {
        width:fit-content;
        border: 1px solid transparent;
        border-radius: 30px;
        padding: 13px 25px;
        font-family: var(--display);
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: .24px;
        line-height: 1;
        color:#FF6E0E;
        font-weight:bolder;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        transform: scale(1);
        cursor: pointer;
        transition: 0.3s ease 0.3s;
        background-color: white;
        text-align: center;
        margin-right: 5px;
    }
    .blue_button {
        background-color: #49cdd5;
        color: white;
    }
    .blue_button:hover {
        color: white;
        background-color: #49cdd5;
        border: 1px solid white;
    }
    .contact-info-container-content-right-text-footer-row { 
        position: relative;
        display: flex;
        padding-left: 10px;
        line-height: 1.5;
        color: #707070;
        cursor: pointer;
        position: relative;
        width: 100%;
        max-width: 430px;
        margin: 0 auto;
    }
    .contact-info-container-content-button {
        text-align: center;
    }
</style>
<?php
    get_footer(); 
?>