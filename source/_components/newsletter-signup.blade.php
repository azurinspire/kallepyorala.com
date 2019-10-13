<div class="w-full flex justify-center {{ isset($cover) ? 'lg:mx-6' : '' }} my-12 p-6 md:px-12 bg-green-100 border border-gray-400 text-sm md:rounded shadow">
    <!-- Begin Mailchimp Signup Form -->
    <div id="mc_embed_signup">
        <form action="https://kallepyorala.us20.list-manage.com/subscribe/post?u=0d1d9750d7dd99e79160cfb38&amp;id=23b20f76bd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="hidden" value="2" name="group[4475][2]" id="mce-group[4475]-4475-1">
            <div id="mc_embed_signup_scroll">
                <h2>Sign up for monthly newsletter</h2>
                <p>Every month I send an email about interesting things in photography for the moment. Sign up and keep learning!</p>

                <div id="mce-responses" class="clear">
                    <div class="response mb-4 text-red-500 px-4 py-2 border border-red-500 rounded bg-red-100" id="mce-error-response" style="display:none"></div>
                    <div class="response mb-4 text-green-500 px-4 py-2 border border-green-500 rounded bg-green-100" id="mce-success-response" style="display:none"></div>
                </div>

                <div class="mc-field-group">
                    <label for="mce-EMAIL">Email Address </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email address">
                </div>

                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_25582686a9fc051afd5453557_189578c854" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
    </div>
    <!--End Mailchimp Signup Form -->
</div>

@push('scripts')
    <script src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script>(function($) {
        window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
    </script>
@endpush
