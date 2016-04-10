<?php get_header(); ?>

<div role="main">

    <div class="row">
        <div class="columns small-12">

            <?php if( have_posts() ): ?>
                <?php while( have_posts() ) : the_post(); ?>

                    <?php the_title('<h1>', '</h1>'); ?>

                    <?php the_content(); ?>

                    <form id="donate" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <div class="row">
                            <div class="columns small-6 large-3">
                                <div class="option">
                                    <button value="5">&pound;<span>5</span></button>
                                </div>
                            </div>
                            <div class="columns small-6 large-3">
                                <div class="option">
                                    <button value="10">&pound;<span>10</span></button>
                                </div>
                            </div>
                            <div class="columns small-6 large-3">
                                <div class="option">
                                    <button value="25">&pound;<span>25</span></button>
                                </div>
                            </div>
                            <div class="columns small-6 large-3">
                                <div class="option">
                                    <button value="50">&pound;<span>50</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="columns small-12">
                                <input type="hidden" name="cmd" value="_donations">
                                <input type="hidden" name="business" value="smile@brightenupalife.org.uk">
                                <input type="hidden" name="currency_code" value="GBP">
                                <div class="custom-amount">
                                    &pound; <input type="text" name="amount" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="columns small-12">
                                <a id="make-donation" class="button" href="javascript:;" title="Make a donation" role="button">Make a Donation</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column small-12">
                                <a class="paypal" href="https://www.paypal.com/uk/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/uk/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_secured_by_pp_2line.png" border="0" alt="Secured by PayPal">
                                </a>
                            </div>
                        </div>
                    </form>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>