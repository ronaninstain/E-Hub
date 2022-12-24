<?php /* Template Name: PDF Exam Dump */ ?>
<?php get_header() ?>

<div class="eb-top-sec">
    <div class="eb-top-container">
        <?php


        // Set up the arguments for the query
        $args = array(
            'taxonomy' => 'pdf_exam_cat',
            'hide_empty' => true,
        );
        $categories = get_terms($args);
        ?>
        <ul>
            <?php
            if (!empty($categories) && !is_wp_error($categories)) {
                foreach ($categories as $category) { ?>
                    <li><a href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a></li>
            <?php }
            } ?>
        </ul>
    </div>
</div>

<div class="eb-hero-bg">
    <div class="eb-hero-container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="eb-hero-title">FREE PROFESSIONAL CERTIFICATION EXAM QUESTIONS.</h1>
                <h3 class="eb-hero-subtitle">Prepare With Confidence.</h3>
                <h4 class="eb-hero-des">Get certified in your first attempt by using our high-quality exam questions
                    </br>absolutely for free!</h4>
                <button class="btn btn-large eb-btn">DOWNLOAD FREE QUESTION</button>
            </div>
        </div>
    </div>
</div>
<div class="eb-subhero-bg">
    <div class="row">
        <div class="col-md-12">
            <div class="eb-subhero-container">
                <h1 class="eb-subhero-title">Download Free PDF Questions and Get Amazing Discounts in Future for Exam
                    Booking!!!
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="custom-sec-bg">
    <div class="custom-Alphabetic-exam-search-section-ks">
        <div class="the-search-box-plus-heading-ks">
            <div class="exam-search-ks-title">
                <h2>HOT CERTIFICATIONS</h2>
            </div>
            <div class="exam-search-ks-box">
                <form id="search" action="https://examshub.co.uk/">
                    <input type="hidden" name="post_type" value="course">
                    <input type="text" class="search-exam" id="AR-myInput" name="search-exam" placeholder="search for exams" value="" onkeyup="MSearchInstant()">
                    <button type="submit" class="sbtn"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="the-exam-searching-content-ks" id="ar-for-filter">
            <div class="the-main-list-ks-exams" id="the-main-list-ks-exams">

                <ul>
                    <?php
                    $custom_query = array(
                        'post_type' => 'pdf_exam_dump',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    );

                    $loop = new WP_Query($custom_query);

                    //var_dump($loop);
                    $i == 0;
                    while ($loop->have_posts()) : $loop->the_post();
                        $i++;
                    ?>
                        <li class="category-box">
                            <h5 class="ar-class-for-filter">
                                <a href="<?php echo get_permalink(); ?>"><span>0<?php echo $i; ?>. <?php echo get_the_title(); ?></span></a>
                            </h5>
                        </li>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <div class="the-all-search-exam-btn-ks">
                <a href="#">View All <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="faq-container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="faq-title">FREQUENTLY ASKED QUESTIONS</h1>
            <div class="faq-item">
                <h2>1. What is Professional Certification?</h2>
                <p>Professional certification is a standardised process that allows a person to demonstrate a certain
                    level of competency in a particular career or job function. A certificate credential is awarded upon
                    completion of professional certification requirements, which typically include passing an exam
                    administered by an industry-specific credentialing organisation.</p>
            </div>
            <div class="faq-item">
                <h2>2. What are exam dumps?</h2>
                <p>Exam dumps are practise questions that can help you prepare and practise for your exam in a short
                    amount of time. If you can’t cover your exam syllabus in due time, exam dumps are the best option
                    for you. We offer pdf exam dumps absolutely for free!</p>
            </div>
            <div class="faq-item">
                <h2>3. Are exams dupms questions similar to real exam questions?</h2>
                <p>The answer is yes. We give you 100% authentic exam questions that can help you prepare your
                    certification exams through intense practice. Our certified IT professionals are responsible for
                    checking the originality of each questions that can be asked in the real exam.</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>