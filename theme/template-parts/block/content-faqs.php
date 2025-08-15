<?php
// Block Name: Frequently Asked Questions

$id = 'faqs-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="pb-20">
    <div class="wrapper">
        <?php

        // Create id attribute allowing for custom "anchor" value.
        $id = 'faqs-' . $block['id'];
        if (! empty($block['anchor'])) {
            $id = $block['anchor'];
        }

        // Create class attribute allowing for custom "className" and "align" values.
        $classes = 'block-faqs';
        if (! empty($block['className'])) {
            $classes .= ' ' . $block['className'];
        }
        if (! empty($block['align'])) {
            $classes .= ' align' . $block['align'];
        }
        ?>

        <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
            <h2 class="section-ttl"><?php the_field('faq_title'); ?></h2>
            <?php if (get_field('faq_description')): ?>
                <?php the_field('faq_description'); ?>
            <?php endif; ?>

            <?php if (have_rows('faqs_listing')) : ?>
                <div class="mt-4">
                    <?php while (have_rows('faqs_listing')) : the_row(); ?>
                        <div class="faq-item border-b border-gray-400 pb-4 mb-4">
                            <div class="faq-question relative flex flex-between align-baseline justify-between">
                                <h5 class="font-semibold text-xl flex justify-center items-center"><?php the_sub_field('question'); ?></h5>
                            </div>
                            <div class="faq-answer">
                                <div class="expander-content">
                                    <?php the_sub_field('answer'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <button class="load-more-faq" id="load-more-faq">Load More</button>
                <?php endif; ?>
                </div>
        </div>
    </div>
</section>

<style>
    .faq-container {
        margin-bottom: 50px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 15px;
        grid-row-gap: 15px;
    }

    .faq-question {
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .faq-question::after {
        content: '+';
        font-size: 22px;
        font-weight: 300;
        transition: transform 0.5s ease;
    }

    .faq-item.active .faq-question::after {
        content: '−';
    }

    .faq-answer {
        display: grid;
        grid-template-rows: 0fr;
        overflow: hidden;
        transition: grid-template-rows .6s;
    }

    .faq-item .expander-content {
        min-height: 0;
        transition: visibility .6s;
        visibility: hidden;
    }

    .faq-item.active .faq-answer {
        grid-template-rows: 1fr;
    }

    .faq-item.active .expander-content {
        visibility: visible;
    }

    .load-more-faq {
        border: 1px solid #b00000;
        color: #b00000;
        padding: 7px 25px;
        margin-right: 20px;
        border-radius: 3px;
        background: none;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 20px;
        display: block;
        margin: 0 auto;
        cursor: pointer;
    }

    .load-more-faq:hover {
        color: #ffffff;
        background-color: #b00000;
    }

    .faq-hidden {
        display: none;
    }

    .faq-question h5 {
        line-height: 20px;
        cursor: pointer;
    }

    @media (max-width: 980px) {
        .faq-container {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const itemsToShow = 6; // Number of FAQ items to show initially

        const faqItems = document.querySelectorAll('.faq-item');
        const loadMoreBtn = document.getElementById('load-more-faq');

        faqItems.forEach((item, index) => {
            if (index >= itemsToShow) {
                item.classList.add('faq-hidden');
            }
        });

        if (faqItems.length <= itemsToShow) {
            loadMoreBtn.classList.add('faq-hidden');
        }

        // Add click event to toggle accordion for each question
        const questions = document.querySelectorAll('.faq-question');
        questions.forEach(question => {
            question.addEventListener('click', () => {
                const parent = question.parentElement;
                parent.classList.toggle('active');
            });
        });

        // Load more functionality
        loadMoreBtn.addEventListener('click', () => {
            const hiddenItems = document.querySelectorAll('.faq-item.faq-hidden');

            hiddenItems.forEach(item => {
                item.classList.remove('faq-hidden');
            });

            loadMoreBtn.classList.add('faq-hidden');
        });
    });
</script>